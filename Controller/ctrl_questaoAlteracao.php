<?php
    include_once("ctrl_conexao.php");
    
    //Alterar Questão
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
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
                        $alternativa_d == "" ||  $alternativa_correta == "" || 
                        $id_disciplina == "" || $id_prova == "") {

            echo "<font color='red'>Campo(s) obrigatório(s).</font><br/>";
            echo "<br/><a href='javascript:self.history.back();'>Voltar</a>";
        } else {
            $result = mysqli_query(conectar(), "UPDATE questao SET descricao='$descricao', texto_associado='$texto_associado', "
                    . "imagem_associada='$imagem_associada', alternativa_a='$alternativa_a', alternativa_b='$alternativa_b', "
                    . "alternativa_c='$alternativa_c', alternativa_d='$alternativa_d', alternativa_e='$alternativa_e', "
                    . "alternativa_correta='$alternativa_correta', id_categoria='$id_categoria', "
                    . "id_instituicao='$id_instituicao', id_organizadora='$id_organizadora', "
                    . "id_disciplina='$id_disciplina', id_cargo='$id_cargo', id_curso='$id_curso', "
                    . "id_prova='$id_prova' WHERE id=$id");

            header("Location: ../View/Adm/listarQuestao.php");
        }
    }
    
    //alguma coisa
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query(conectar(), "SELECT * FROM questao WHERE id=$id");

        while ($res = mysqli_fetch_array($result)){

            $descricao = $res['descricao'];
            $texto_associado = $res['texto_associado'];
            $imagem_associada = $res['imagem_associada'];
            $alternativa_a = $res['alternativa_a'];
            $alternativa_b = $res['alternativa_b'];
            $alternativa_c = $res['alternativa_c'];
            $alternativa_d = $res['alternativa_d'];
            $alternativa_e = $res['alternativa_e'];
            $alternativa_correta = $res['alternativa_correta'];
            $id_categoria = $res['id_categoria'];
            $id_instituicao = $res['id_instituicao'];
            $id_organizadora = $res['id_organizadora'];
            $id_disciplina = $res['id_disciplina'];
            $id_cargo = $res['id_cargo'];
            $id_curso = $res['id_curso'];
            $id_prova = $res['id_prova'];
        }
    }
?>