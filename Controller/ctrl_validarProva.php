<?php session_start(); ?>
<?php
    include("ctrl_conexao.php");
    include("../Model/model_validarQuestao.php");

    if (isset($_SESSION['valid'])){
        $id_usuario = $_SESSION['id'];
        $alternativa = $_POST['alternativa'];
        $id_questao = $_POST['id_questao'];
        $id_prova = $_POST['id_prova'];
        $peso = $_POST['peso'];

        $busca = buscarQuestao($id_questao);
        $row2 = mysqli_fetch_array($busca);
        $alternativa_correta = $row2['alternativa_correta'];

        if ($alternativa == $alternativa_correta){

            $update = mysqli_query(conectar(), "update usuario set questoes_certas = questoes_certas + 1 where id=$id_usuario");
            $update = mysqli_query(conectar(), "update prova_resolvida set questoes_certas = questoes_certas + 1, pontuacao = pontuacao + $peso where id_usuario=$id_usuario and id_prova = $id_prova");

            echo " <strong style='color:green';> Você acertou! </strong>";

            $delete=mysqli_query(conectar(), "DELETE FROM questao_resolvida WHERE id_usuario = $id_usuario and (id_questao_certa = $id_questao or id_questao_errada=$id_questao)");
            $insert = mysqli_query(conectar(), "INSERT INTO questao_resolvida(id_usuario, id_questao_certa) VALUES('$id_usuario', '$id_questao')");

        }
        
        if ($alternativa != $alternativa_correta) {

            $update = mysqli_query(conectar(), "update usuario set questoes_erradas = questoes_erradas + 1 where id=$id_usuario");
            $update = mysqli_query(conectar(), "update prova_resolvida set questoes_erradas = questoes_erradas + 1 where id_usuario=$id_usuario and id_prova = $id_prova");

            echo " <strong style='color:red';> Você errou! Resposta certa: " . $row2['alternativa_correta']. "</strong>";
            $delete=mysqli_query(conectar(), "DELETE FROM questao_resolvida WHERE id_usuario = $id_usuario and (id_questao_certa = $id_questao or id_questao_errada=$id_questao)");
            $insert = mysqli_query(conectar(), "INSERT INTO questao_resolvida(id_usuario, id_questao_errada) VALUES('$id_usuario', '$id_questao')");
        }
    }
?>