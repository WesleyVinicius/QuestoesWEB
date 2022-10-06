<?php
    include_once("ctrl_conexao.php");
    include_once("../Model/model_questao.php");
    
    //Cadastrar Questão
    if (isset($_POST['submit'])){
        $descricao = $_POST['descricao'];
        $texto_associado = $_POST['texto_associado'];
        $imagem_associada = $_POST['imagem_associada'];
        $alternativa_a = $_POST['alternativa_a'];
        $alternativa_b = $_POST['alternativa_b'];
        $alternativa_c = $_POST['alternativa_c'];
        $alternativa_d = $_POST['alternativa_d'];
        $alternativa_e = $_POST['alternativa_e'];
        $alternativa_correta = $_POST['alternativa_correta'];
        $id_categoria = $_POST['id_categoria'];
        $id_instituicao = $_POST['id_instituicao'];
        $id_organizadora = $_POST['id_organizadora'];
        $id_disciplina = $_POST['id_disciplina'];
        $id_cargo = $_POST['id_cargo'];
        $id_curso = $_POST['id_curso'];
        $id_prova = $_POST['id_prova'];

        if ($descricao == "" || $alternativa_a == "" || $alternativa_b == "" || $alternativa_c == "" || 
            $alternativa_d == "" || $alternativa_correta == "" || 
            $id_disciplina == "" || $id_prova == ""){

                echo "<font color='red'>Campo(s) obrigatório(s).</font><br/>";
                echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
        } else{
            $result = cadastrarQuestão($descricao, $texto_associado, $imagem_associada, $alternativa_a, 
                    $alternativa_b, $alternativa_c, $alternativa_d, $alternativa_e, $alternativa_correta, 
                    $id_categoria, $id_instituicao, $id_organizadora, $id_disciplina, $id_cargo, $id_curso, $id_prova);

            echo "<script type='text/javascript'>alert('Dados cadastrados com sucesso');</script>";
            header('Location: ../View/Adm/listarQuestao.php');
        }
    }
    
    //Excluir Questão
    if(isset($_GET['id_exclusao'])){
        $id = $_GET['id_exclusao'];
        $result = excluirQuestão($id);
        header("Location:../View/Adm/listarQuestao.php");
    }
?>