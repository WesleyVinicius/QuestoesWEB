<?php
    include_once("../../Controller/ctrl_conexao.php");
    include_once("../../Controller/ctrl_sessao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>QuestõesWEB</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../Estilo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../Estilo/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../Estilo/css/fullcalendar.css" />
        <link rel="stylesheet" href="../Estilo/css/maruti-style.css" />
        <link rel="stylesheet" href="../Estilo/css/maruti-media.css" class="skin-color" />
        <link rel="stylesheet" href="../Estilo/css/estiloLogin.css"  type="text/css"/>
        <link href="../Estilo/css/estiloTabelas.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php include('logoPaginas.php') ?>
        <?php include('menuUsuario.php') ?>


        <div id="content">
            <div id="content-header">
                <div id="breadcrumb"> 
                    <a href="paginaInicial.php" title="Go to Home" class="tip-bottom">
                        <i class="icon-home"></i> 
                        Início
                    </a>
                    <a href="#" class="current">Questões</a>
                    <a href="#" class="current">Resolver Questões</a>
                </div>
            </div>   

            <?php
            
            
            $id_categoria = 0;
            $id_disciplina = 0;
            $id_instituicao = 0;
            $id_organizadora = 0;
            
            $tipo = $_GET['tipo'];
            if($tipo == 1){
            $id_categoria = $_GET['id'];   
            } 
            else if ($tipo == 2){
            $id_disciplina = $_GET['id'];     
            }
            else if ($tipo == 3){
            $id_instituicao = $_GET['id'];     
            }
            else if ($tipo == 4){
            $id_organizadora = $_GET['id'];     
            }
            
            
            $sql_questao = mysqli_query(conectar(), "SELECT questao.id, questao.descricao, 
                                        questao.texto_associado, questao.imagem_associada, 
                                        questao.alternativa_a, questao.alternativa_b, questao.alternativa_c,
                                        questao.alternativa_d, questao.alternativa_e,
                                        organizadora.nome as organizadora, instituicao.nome as instituicao,
                                        disciplina.nome as disciplina, prova.nome as prova FROM questao 
                                        inner join organizadora on organizadora.id = questao.id_organizadora
                                        inner join instituicao on instituicao.id = questao.id_instituicao
                                        inner join prova on prova.id = questao.id_prova
                                        inner join disciplina on disciplina.id = questao.id_disciplina 
                                        WHERE (id_categoria = $id_categoria or $id_categoria = 0)"
                                        . "and (id_disciplina = $id_disciplina or $id_disciplina = 0)"
                                        . "and (id_instituicao = $id_instituicao or $id_instituicao = 0)"
                                        . "and (id_organizadora = $id_organizadora or $id_organizadora = 0)");

            if (mysqli_num_rows($sql_questao) == null) {
                echo "<h3>Desculpe mas sua busca não retornou resultados</h3>";
            } else { 

                while ($row = mysqli_fetch_array($sql_questao)) {

                    $id_questao = $row['id'];
                    ?>

                    <div class="tabela">
                        <div class="container-fluid">
                            <div class="row-fluid">
                                <div class="span11">
                                    <div class="widget-box">
                                        <div class="widget-title"> 
                                            <span class="icon"> <i class="icon-align-justify"></i> </span>
                                            

                                            <h5>Disciplina: <?php echo $row['disciplina'] ?></h5>

                                            <h5>Prova: <?php echo $row['prova'] ?></h5>
                                            <h5>Organizadora: <?php echo $row['organizadora'] ?></h5>
                                            <h5>Instituição: <?php echo $row['instituicao'] ?></h5>
                                        </div>
                                        <div class="widget-content nopadding">
                                            <table class="table table-bordered data-table">


                                                 <?php
                                                    if (!empty($row['texto_associado'])) {
                                                        echo "<tr>";
                                                        echo "<td> <b> Texto associado: </b> <i>" . $row['texto_associado'] . "</i> </td>";
                                                        echo "</tr>";
                                                    }
                                                    if (!empty($row['imagem_associada'])) {
                                                        echo "<tr>";
                                                        echo "<td><img src=" . $row['imagem_associada'] . "></td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "<tr>";
                                                    echo "<td>" . $row['descricao'] . "</td>";
                                                    echo "</tr>";
                                                    ?>


                                                <tr>

                                                    <td>


                                                        <form id='<?php echo "$id_questao"; ?>' name="<?php echo "$id_questao"; ?>" method="post" onsubmit="return chk('<?= $id_questao ?>')" >

                                                            <p> <input type="radio" class="radio" value="a" name="alternativa" id="alternativa1<?= $id_questao ?>"> <?php echo $row['alternativa_a']; ?> </p> 
                                                            <p> <input type="radio" class="radio" value="b" name="alternativa" id="alternativa2<?= $id_questao ?>"> <?php echo $row['alternativa_b']; ?> </p> 
                                                            <p> <input type="radio" class="radio" value="c" name="alternativa" id="alternativa3<?= $id_questao ?>"> <?php echo $row['alternativa_c']; ?> </p> 
                                                            <p> <input type="radio" class="radio" value="d" name="alternativa" id="alternativa4<?= $id_questao ?>"> <?php echo $row['alternativa_d']; ?> </p> 
                                                            
                                                                <?php
                                                                if (empty($row['alternativa_e'])) {
                                                                    ?>   
                                                                    <input type="hidden" value="e" name="alternativa" id="alternativa5<?= $id_questao ?>" >   
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <p> <input type="radio" class="radio" value="e" name="alternativa" id="alternativa5<?= $id_questao ?>"> <?php echo $row['alternativa_e']; ?> </p>
                                                                    <?php
                                                                }
                                                                ?>
                                                            
                                                            <input type="hidden" id="id_questao<?= $id_questao ?>" value="<?php echo "$id_questao"; ?>" >
                                                           
                                                  
                                                            <input type="hidden" id="metodo" value="form1" >
                                                            <br/>

                                                            <div class="form-actions">
                                                                <input type="hidden" id="id_questao<?= $id_questao ?>" value="<?php echo "$id_questao"; ?>" >
                                                                <button type="submit" class="btn btn-info" value="Responder">Responder</button>
                                                            </div>

                                                        </form>

                                                        <p id="msg<?= $id_questao ?>" class="msg1"></p>

                                                    </td>

                                                </tr>
                                            </table> 
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>       

                    <?php
                }
            }
            
            ?>
        </div>

        <br></br>

        
        <?php include('../rodape.php') ?>

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
     <script type="text/javascript">
                                                    function chk(id) {
                                                        var rate_value;
                                                        if (document.getElementById('alternativa1' + id).checked) {
                                                            rate_value = document.getElementById('alternativa1' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa2' + id).checked) {
                                                            rate_value = document.getElementById('alternativa2' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa3' + id).checked) {
                                                            rate_value = document.getElementById('alternativa3' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa4' + id).checked) {
                                                            rate_value = document.getElementById('alternativa4' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa5' + id).checked) {
                                                            rate_value = document.getElementById('alternativa5' + id).value;
                                                        }

                                                        var dataObject = {alternativa: rate_value,
                                                            id_questao: document.getElementById('id_questao' + id).value};
                                                        $.ajax({
                                                            type: "post",
                                                            url: "../../Controller/ctrl_validarQuestao.php",
                                                            data: dataObject,
                                                            cache: false,
                                                            success: function (phtml) {

                                                                $('#msg' + id).html(phtml);
                                                            }

                                                        });
                                                        return false;
                                                    }
        </script>
    </body>
</html>
