<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarOrganizadora($nome){
        return mysqli_query(conectar(), "INSERT INTO organizadora(nome) VALUES('$nome')");
    }

    function excluirOrganizadora($id){
        return mysqli_query(conectar(), "DELETE FROM organizadora WHERE id=$id");
    }
?>