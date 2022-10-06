<?php session_start(); ?>
<?php
    include("ctrl_conexao.php");
    include("../Model/model_resultadoProva.php");
    
    if (isset($_SESSION['valid'])){ 
 
        $id_usuario = $_SESSION['id'];
        $id_prova = $_POST['id_prova'];

        $busca1 = buscarProva($id_prova);
        $row1 = mysqli_fetch_array($busca1);
        $nota_corte = $row1['nota_corte'];

        $busca2 = buscarProvaResolvida($id_usuario, $id_prova);
        $row2 = mysqli_fetch_array($busca2);
        $pontuacao = $row2['pontuacao'];

        if ($pontuacao >= $nota_corte) {
            echo ""
            . "<table class='table table-bordered data-table'>"
                    . "<tr>"
                    . "<td>"
                    . "<p> Voce fez $pontuacao pontos </p>"
                    . "<p> A pontuação minima necessária dessa prova é $nota_corte pontos<p>"
                    . "<p style='color:green'>Parabens, você atingiu a pontuação necessária para ser aprovado nessa prova.</p>"
                    . ""
            . "<form method='GET' action='../View/Usuario/resolverProva.php'>"
            . "<input type='submit' class='btn btn-success' value='Refazer prova'> "
            . "<input type='hidden' name='id' value=$id_prova>"
            . "</form>"
                    . "<br>"
            . "<form action='provas.php'>"
            . "<input type='submit' class='btn btn-info' value='Resolver outra prova'> "
            . "</form>"
                    . "<br>"
            . "<form action='../Usuario/paginaInicial.php'>"
            . "<input type='submit' class='btn btn-info' value='Voltar ao menu'> "
            . "</form>"      
                    . "</td>"
                    . "</tr>"
            . "</table>";

            $resultado = 'Aprovado';
            $update = gravarResultado($resultado, $id_usuario, $id_prova);
        } else {

            echo ""
            . ""
            . "<table class='table table-bordered data-table'>"
                    . "<tr>"
                    . "<td>"
                    . "<p> Voce fez $pontuacao pontos </p>"
                    . "<p> A pontuação minima necessária dessa prova é $nota_corte pontos<p>"
                    . "<p style='color:red'>Você não atingiu a pontuação necessária para ser aprovado nessa prova.</p>"
                    . ""
            . "<form method='GET' action='resolverProva.php'>"
            . "<input type='submit' class='btn btn-success' value='Refazer provaa'> "
            . "<input type='hidden' name='id' value=$id_prova>"
            . "</form>"
                    . "<br>"
            . "<form action='provas.php'>"
            . "<input type='submit' class='btn btn-success' value='Resolver outra prova'> "
            . "</form>"
                    . "<br>"
            . "<form action='paginaInicial.php'>"
            . "<input type='submit' class='btn btn-success' value='Voltar ao menu'> "
            . "</form>"      
                    . "</td>"
                    . "</tr>"
            . "</table>";

            $resultado = 'Reprovado';
            $update = gravarResultado($resultado, $id_usuario, $id_prova);
        }
    }
?>