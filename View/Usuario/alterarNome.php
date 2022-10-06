<?php
include_once("../../Controller/ctrl_conexao.php");
include_once("../../Controller/ctrl_perfil_alterarNome.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <title>Alterar Nome</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../Estilo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../Estilo/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../Estilo/css/maruti-style.css" />
        <link rel="stylesheet" href="../Estilo/css/maruti-media.css" class="skin-color" />
        <link rel="stylesheet" href="../Estilo/css/estiloLogin.css"  type="text/css"/>
    </head>
    <body>
        <?php include("logoPaginas.php") ?>
        <?php include('menuUsuario.php') ?>
       


        <div id="content">
            <div id="content-header">
                <div id="breadcrumb">
                    <a href="paginaInicial.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Início</a>
                    <a href="perfilUsuario.php" class="current">Perfil</a>
                    <a href="#" class="current">Alterar Nome</a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Alterar Nome</h5>
                            </div>
                            <div class="widget-content">
                                <form action="../../Controller/ctrl_perfil_alterarNome.php" method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Nome:</label>
                                        <div class="controls">
                                            <input type="text" class="span11" name="nome" value="<?php echo $nome; ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                        <button type="submit" class="btn btn-success" name="update" value="Alterar">Alterar</button>
                                        <a href="perfilUsuario.php" class='btn btn-danger'>Cancelar</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../rodape.php') ?>

        <script src="../Estilo/js/jquery.ui.custom.js"></script> 
        <script src="../Estilo/js/jquery.gritter.min.js"></script> 
        <script src="../Estilo/js/jquery.peity.min.js"></script> 
        <script src="../Estilo/js/maruti.js"></script>
        <script src="../Estilo/js/maruti.interface.js"></script>
        <script src="../Estilo/js/maruti.popover.js"></script>
    </body>
</html>