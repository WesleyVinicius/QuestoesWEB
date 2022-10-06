<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarDisciplina($nome){
        return mysqli_query(conectar(), "INSERT INTO disciplina(nome) VALUES('$nome')");
    }

    function excluirDisciplina($id){
        return mysqli_query(conectar(), "DELETE FROM disciplina WHERE id=$id");
    }
?>