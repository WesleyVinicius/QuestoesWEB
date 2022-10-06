<?php
    include_once("ctrl_conexao.php");
    
    //Alterar E-mail
    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $email = $_POST['email'];

        if (empty($email)){
            if (empty($email)){
                echo "<font color='red'>Campo obrigatório.</font><br/>";
            }
        } else{
            $result = mysqli_query(conectar(), "UPDATE usuario SET email='$email' WHERE id=$id");
            header("Location: ../View/Usuario/perfilUsuario.php");
        }
    }
    
    //alguma coisa
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query(conectar(), "SELECT * FROM usuario WHERE id=$id");

        while ($res = mysqli_fetch_array($result)){
            $email = $res['email'];
        }
    }

?>