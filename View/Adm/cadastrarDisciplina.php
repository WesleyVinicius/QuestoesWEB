<?php
    include_once("../../Controller/ctrl_sessao.php");
    include_once("../../Controller/ctrl_conexao.php");

    $result = mysqli_query(conectar(), "SELECT * FROM disciplina ORDER BY id DESC");
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
                    <a href="#" class="current">Cadastrar Disciplina</a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Cadastrar Disciplina</h5>
                            </div>
                            <div class="widget-content">
                                <form action="../../Controller/ctrl_disciplina.php" method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Nome:</label>
                                        <div class="controls">
                                            <input type="text" class="span11" required name="nome" placeholder="Nome" size="50"
                                                   oninvalid="setCustomValidity('Campo obrigatório')" onchange="try{setCustomValidity('')}catch(e){}"/>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success" name="submit" value="Cadastrar">Cadastrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <?php include('../rodape.php') ?>
        
    </body>
</html>