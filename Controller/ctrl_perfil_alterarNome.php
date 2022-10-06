<?php
    include_once("ctrl_conexao.php");
    
    //alterar nome do usuário
    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];

        if (empty($nome)){

            if (empty($nome)){
                echo "<font color='red'>Campo obrigatório.</font><br/>";
                
            }
        } else {
            $result = mysqli_query(conectar(), "UPDATE usuario SET nome='$nome' WHERE id=$id");
            
            header("Location: ../View/Usuario/perfilUsuario.php");
        }
    }
    
    //alguma coisa
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query(conectar(), "SELECT nome FROM usuario WHERE id=$id");

        while ($res = mysqli_fetch_array($result)) {
            $nome = $res['nome'];
        }
    }