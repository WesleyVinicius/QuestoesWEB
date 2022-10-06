<?php session_start(); ?>
<?php
    include("ctrl_conexao.php");
    include("../Model/model_perfil.php");
    
    if (isset($_SESSION['valid'])) { 
        $id_usuario = $_SESSION['id'];
        $id_disciplina = $_POST['id_disciplina'];

        $busca = gerarHistorico($id_usuario, $id_disciplina);

        $row = mysqli_fetch_array($busca);
        $n_questao_certa = $row['COUNT(id_questao_certa)'];
        $n_questao_errada = $row['COUNT(id_questao_errada)'];
        $n_soma = $n_questao_certa + $n_questao_errada;
        
        if ($n_soma <> 0){
            $desempenho = $n_questao_certa / $n_soma * 100;
        } else{
            $desempenho = 0;    
        }
              echo ""
            . ""
            . "<table class='table table-bordered data-table'>"
                    . "<tr>"
                    . "<td>"
                    . "<p> Respondidas: $n_soma </p>"
                    . "<p style='color:green'>Acertos: $n_questao_certa</p>"
                    . "<p style='color:red'>Erros: $n_questao_errada</p>"
                    . "<p>Desempenho: $desempenho%</p>"      
                    . "</td>"
                    . "</tr>"
            . "</table>";
    }
?>