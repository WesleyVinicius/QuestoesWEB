<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function buscarProva($id_prova){
        return mysqli_query(conectar(), "SELECT * FROM prova WHERE id=$id_prova");
    }

    function buscarProvaResolvida($id_usuario, $id_prova){
        return mysqli_query(conectar(), "select * FROM prova_resolvida WHERE id_usuario=$id_usuario and id_prova = $id_prova");
    }
    
    function gravarResultado($resultado, $id_usuario, $id_prova){
        return mysqli_query(conectar(), "update prova_resolvida set resultado = '$resultado' where id_usuario=$id_usuario and id_prova = $id_prova");
    }
?>