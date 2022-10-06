<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarInstituicao($nome){
        return mysqli_query(conectar(), "INSERT INTO instituicao(nome) VALUES('$nome')");
    }

    function excluirInstituicao($id){
        return mysqli_query(conectar(), "DELETE FROM instituicao WHERE id=$id");
    }
?>