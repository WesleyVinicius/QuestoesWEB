<?php
    include_once("ctrl_conexao.php");
    
    //Alterar Organizadora
    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];

        if (empty($nome)){
            if (empty($nome)){
                echo "<font color='red'>Campo obrigatório.</font><br/>";
            }
        } else{
            $result = mysqli_query(conectar(), "UPDATE organizadora SET nome='$nome' WHERE id=$id");
            header("Location: ../View/Adm/listarOrganizadora.php");
        }
    }
    
    //alguma coisa
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query(conectar(), "SELECT * FROM organizadora WHERE id=$id");

        while ($res = mysqli_fetch_array($result)){
            $nome = $res['nome'];
        }
    }
?>