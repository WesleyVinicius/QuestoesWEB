<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarCategoria($nome){
        return mysqli_query(conectar(), "INSERT INTO categoria(nome) VALUES('$nome')");
    }

    function excluirCategoria($id){
        return mysqli_query(conectar(), "DELETE FROM categoria WHERE id=$id");
    }
?>