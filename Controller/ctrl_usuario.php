<?php
    include_once("ctrl_conexao.php");
    include_once("../Model/model_usuario.php");
    
    //Cadastrar Usuário
    if(isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($email == "" || $senha == "" || $nome == "") {
            echo "Campo(s) obrigatório(s).";
            echo "<br/>";
            echo "<a href='../View/cadastrarUsuario.php'>Voltar</a>";
        } 
        else {
            cadastrarUsuario($nome, $email, $senha);
            echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso');</script>";
            header('Location: ../View/index.php');
        }
    }
?>