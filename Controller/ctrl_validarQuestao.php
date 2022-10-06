<?php session_start(); ?>
<?php
    include("ctrl_conexao.php");
    include("../Model/model_validarQuestao.php");
    
    if (isset($_SESSION['valid'])) {
        
        $id_usuario = $_SESSION['id'];
        $alternativa = $_POST['alternativa'];
        $id_questao = $_POST['id_questao'];

        $busca = buscarQuestao($id_questao);

        $row2 = mysqli_fetch_array($busca);
        $alternativa_correta = $row2['alternativa_correta'];

        if ($alternativa == $alternativa_correta) {

            $update = mysqli_query(conectar(), "update usuario set questoes_certas = questoes_certas + 1 where id=$id_usuario");
            $result = mysqli_query(conectar(), "SELECT * FROM usuario where id=$id_usuario");
            $row = mysqli_fetch_array($result);
            $delete=mysqli_query(conectar(), "DELETE FROM questao_resolvida WHERE id_usuario = $id_usuario and (id_questao_certa = $id_questao or id_questao_errada=$id_questao)");
            $insert = mysqli_query(conectar(), "INSERT INTO questao_resolvida(id_usuario, id_questao_certa) VALUES('$id_usuario', '$id_questao')");
            $select = mysqli_query(conectar(), "SELECT 
                                               COUNT(id_questao_certa), COUNT(id_questao_errada)
                                               FROM questao
                                               INNER JOIN questao_resolvida ON questao_resolvida.id_questao_certa = questao.id OR questao_resolvida.id_questao_errada = questao.id
                                               WHERE questao_resolvida.id_questao_certa = $id_questao or questao_resolvida.id_questao_errada = $id_questao");
               
            $row3 = mysqli_fetch_array($select);
            $n_questao_certa = $row3['COUNT(id_questao_certa)'];
            $n_questao_errada = $row3['COUNT(id_questao_errada)'];
            $estatistica = $n_questao_certa / ($n_questao_certa + $n_questao_errada) * 100;
            echo " <strong style='color:green';> Você acertou! </strong> <strong style='color:gray';>(".number_format($estatistica, 2, ',', '.')."% dos usuários acertaram essa questão.)</strong>" ;
      
        }
        if ($alternativa != $alternativa_correta) {

            $update = mysqli_query(conectar(), "update usuario set questoes_erradas = questoes_erradas + 1 where id=$id_usuario");
            $result = mysqli_query(conectar(), "SELECT * FROM usuario where id=$id_usuario");
            $row = mysqli_fetch_array($result);
            $delete=mysqli_query(conectar(), "DELETE FROM questao_resolvida WHERE id_usuario = $id_usuario and (id_questao_certa = $id_questao or id_questao_errada=$id_questao)");
            $insert = mysqli_query(conectar(), "INSERT INTO questao_resolvida(id_usuario, id_questao_errada) VALUES('$id_usuario', '$id_questao')");
            $select = mysqli_query(conectar(), "SELECT 
                                               COUNT(id_questao_certa), COUNT(id_questao_errada)
                                               FROM questao
                                               INNER JOIN questao_resolvida ON questao_resolvida.id_questao_certa = questao.id OR questao_resolvida.id_questao_errada = questao.id
                                               WHERE questao_resolvida.id_questao_certa = $id_questao or questao_resolvida.id_questao_errada = $id_questao");
               
            $row3 = mysqli_fetch_array($select);
            $n_questao_certa = $row3['COUNT(id_questao_certa)'];
            $n_questao_errada = $row3['COUNT(id_questao_errada)'];
            $estatistica = $n_questao_certa / ($n_questao_certa + $n_questao_errada) * 100;
            
            echo " <strong style='color:red';> Você errou! Resposta certa: " . $row2['alternativa_correta']. " <strong style='color:gray';>(".number_format($estatistica, 2, ',', '.')."% dos usuários acertaram essa questão.)</strong>" ;
           

            }
    }
?>