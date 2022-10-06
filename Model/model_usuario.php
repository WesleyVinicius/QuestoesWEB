<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarUsuario($nome, $email, $senha){
        return mysqli_query(conectar(), "INSERT INTO usuario(nome, email, senha) VALUES('$nome', '$email', md5('$senha'))");
    }
?>