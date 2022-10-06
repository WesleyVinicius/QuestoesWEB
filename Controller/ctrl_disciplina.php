<?php
    include_once("ctrl_conexao.php");
    include_once("../Model/model_disciplina.php");
    
    //Cadastrar Disciplina
    if(isset($_POST['submit'])){	
        $nome = $_POST['nome'];
        
        if(empty($nome)){
            if(empty($nome)){
                echo "<font color='red'>Campo obrigatório.</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
        }else{ 
            $result = cadastrarDisciplina($nome);
            echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso');</script>";
            header('Location: ../View/Adm/listarDisciplina.php');
        }
    }
    
    //Excluir Disciplina
    if(isset($_GET['id_exclusao'])){
        $id = $_GET['id_exclusao'];
        $result = excluirDisciplina($id);
        header("Location:../View/Adm/listarDisciplina.php");
    }
?>