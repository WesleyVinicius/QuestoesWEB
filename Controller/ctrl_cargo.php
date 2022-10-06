<?php

    include_once("ctrl_conexao.php");
    include_once("../Model/model_cargo.php");

    //excluir cargo
    if (isset($_GET['id_exclusao'])) {
        $id = $_GET['id_exclusao'];
        $result = excluirCargo($id);

        header("Location:../View/Adm/listarCargo.php");
    }

    //cadastrar cargo
    if (isset($_POST['submit'])) {
        $nome = $_POST['nome'];

        $result = cadastrarCargo($nome);

        echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso');</script>";
        header('Location: ../View/Adm/listarCargo.php');
    }
