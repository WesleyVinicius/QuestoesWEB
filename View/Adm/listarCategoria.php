<?php
    include_once("../../Controller/ctrl_sessao.php");
    include_once("../../Controller/ctrl_conexao.php");

    $result = mysqli_query(conectar(), "SELECT * FROM categoria ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>QuestõesWEB</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="../Estilo/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../Estilo/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="../Estilo/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="../Estilo/css/fullcalendar.css" rel="stylesheet"/>
        <link href="../Estilo/css/maruti-style.css" rel="stylesheet"/>
        <link href="../Estilo/css/maruti-media.css" rel="stylesheet" class="skin-color" />
        <link href="../Estilo/css/select2.css" rel="stylesheet" type="text/css"/>
        <link href="../Estilo/css/uniform.css" rel="stylesheet" type="text/css"/>
        <link href="../Estilo/css/estiloTabelas.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php include('logoPaginas.php') ?>

        <?php include("menuAdm.php") ?>
        
        <div id="content">
            <div id="content-header">
                <div id="breadcrumb"> 
                    <a href="../paginaInicial.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 
                        Início
                    </a>
                    <a href="#" class="current">Listar Categorias</a>
                </div>
            </div>
            <p class="botao"><a href="cadastrarCategoria.php" class='btn btn-info'>+ Cadastrar</a></p>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <span class="icon"><i class="icon-th"></i></span> 
                                <h5>Categorias</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <table class="table table-bordered data-table">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                            <?php
                                            while ($res = mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>" . $res['nome'] . "</td>";
                                                echo "<td><a href=\"alterarCategoria.php?id=$res[id]\" class='btn btn-success'>Alterar</a> "
                                                        . "<a href=\"../../Controller/ctrl_categoria.php?id_exclusao=$res[id]\" class='btn btn-danger' onClick=\"return confirm('Tem certeza que deseja excluir essa instituiçao?')\">Excluir</a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <?php include('../rodape.php') ?>
        
    </body>
</html>
