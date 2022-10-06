<?php
    include_once("ctrl_conexao.php");
    include_once("../Model/model_instituicao.php");
    
    //Cadastrar Instituição
    if (isset($_POST['submit'])){
        $nome = $_POST['nome'];

        if (empty($nome)){
            if (empty($nome)){
                echo "<font color='red'>Campo obrigatório.</font><br/>";
            }
            echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
        } else{	
                $result = cadastrarInstituicao($nome);

                //display success message
                echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso');</script>";
                header('Location: ../View/Adm/listarInstituicao.php');
            }
        }
    
    //Excluir Instituição
    if(isset($_GET['id_exclusao'])){
        $id = $_GET['id_exclusao'];
        $result = excluirInstituicao($id);
        header("Location:../View/Adm/listarInstituicao.php");
    }
?>