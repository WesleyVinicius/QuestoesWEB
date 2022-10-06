<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarCargo($nome){
        return mysqli_query(conectar(), "INSERT INTO cargo(nome) VALUES('$nome')");
    }
    
    function alterarCargo($id, $nome){
        return mysqli_query(conectar(), "UPDATE cargo SET nome='$nome' WHERE id=$id");
    }
    
    function excluirCargo($id){
        return mysqli_query(conectar(), "DELETE FROM cargo WHERE id=$id");
    }
    
    function listarCargos(){
        return mysqli_query(conectar(), "SELECT * FROM cargo ORDER BY id DESC");
    }
?>