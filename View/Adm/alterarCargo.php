<?php
    include_once("../../Controller/ctrl_sessao.php");    
    include_once("../../Controller/ctrl_cargoAlteracao.php");
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
                    <a href="../paginaInicialAdm.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 
                        Início
                    </a>
                    <a href="listarCargo.php" class="current">Listar Cargos</a>
                    <a href="#" class="current">Alterar Cargos</a>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Alterar Cargos</h5>
                            </div>
                            <div class="widget-content">
                                <form action="../../Controller/ctrl_cargoAlteracao.php" method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Nome:</label>
                                        <div class="controls">
                                            <input type="text" class="span11" name="nome" value="<?php echo $nome; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                        <button type="submit" class="btn btn-success" name="update" value="Alterar">Alterar</button>
                                        <a href="listarCargo.php" class='btn btn-danger'>Cancelar</a>
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