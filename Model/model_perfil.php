<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function gerarHistorico($id_usuario, $id_disciplina){
        return mysqli_query(conectar(), "SELECT
        COUNT(id_questao_certa), COUNT(id_questao_errada)
        FROM questao
        INNER JOIN disciplina ON disciplina.id = questao.id_disciplina
        INNER JOIN questao_resolvida ON questao_resolvida.id_questao_certa = questao.id 
        OR questao_resolvida.id_questao_errada = questao.id
        WHERE questao_resolvida.id_usuario = $id_usuario AND disciplina.id = $id_disciplina");
    }
?>