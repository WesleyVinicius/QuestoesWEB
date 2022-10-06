<?php

    include_once("ctrl_conexao.php");

    //alterar cargo
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];


        $result = mysqli_query(conectar(), "UPDATE cargo SET nome='$nome' WHERE id=$id");
        header("Location: ../View/Adm/listarCargo.php");
    }

    //alguma coisa
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = mysqli_query(conectar(), "SELECT * FROM cargo WHERE id=$id");

        while ($res = mysqli_fetch_array($result)) {
            $nome = $res['nome'];
        }
    }

