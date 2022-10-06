<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarQuestão($descricao, $texto_associado, $imagem_associada, $alternativa_a,
            $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e, $alternativa_correta,
            $id_categoria, $id_instituicao, $id_organizadora, $id_disciplina, $id_cargo, $id_curso, $id_prova){
        return mysqli_query(conectar(), "INSERT INTO questao(descricao, texto_associado, imagem_associada, "
            . "alternativa_a, alternativa_b, alternativa_c, alternativa_d, alternativa_e, "
            . "alternativa_correta, id_categoria, id_instituicao, id_organizadora, id_disciplina, id_cargo, "
            . "id_curso, id_prova) "
            . "VALUES('$descricao', '$texto_associado', '$imagem_associada', '$alternativa_a', "
            . "'$alternativa_b', '$alternativa_c', '$alternativa_d', '$alternativa_e', "
            . "'$alternativa_correta', '$id_categoria', '$id_instituicao', '$id_organizadora', '$id_disciplina', "
            . "'$id_cargo', '$id_curso', '$id_prova')");
    }

    function excluirQuestão($id){
        return mysqli_query(conectar(), "DELETE FROM questao WHERE id=$id");
    }
?>