<?php
    include_once("ctrl_conexao.php");
    include_once("../Model/model_prova.php");
    
    //Cadastrar Prova
    if (isset($_POST['submit'])){
        $nome = $_POST['nome'];
        $nota_corte = $_POST['nota_corte'];

        if ($nome == ""){
            if ($nome == ""){
                echo "<font color='red'>Campo(s) obrigatório(s).</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
        } else{	
            $result = cadastrarProva($nome, $nota_corte);
            echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso');</script>";
            header('Location: ../View/Adm/listarProva.php');
        }
    }
    
    //Excluir Cadastrar
    if(isset($_GET['id_exclusao'])){
        $id = $_GET['id_exclusao'];
        $result = excluirProva($id);
        header("Location:../View/Adm/listarProva.php");
    }
?>