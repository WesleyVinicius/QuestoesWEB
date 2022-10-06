<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function cadastrarProva($nome, $nota_corte){
        return mysqli_query(conectar(), "INSERT INTO prova(nome, nota_corte) VALUES('$nome', '$nota_corte')");
    }

    function excluirProva($id){
        return mysqli_query(conectar(), "DELETE FROM prova WHERE id=$id");
    }
?>