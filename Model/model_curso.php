<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarCurso($nome){
        return mysqli_query(conectar(), "INSERT INTO curso(nome) VALUES('$nome')");
    }

    function excluirCurso($id){
        return mysqli_query(conectar(), "DELETE FROM curso WHERE id=$id");
    }
?>