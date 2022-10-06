<?php
    include_once("../../Controller/ctrl_sessao.php");
    include_once("../../Controller/ctrl_perfil_alterarEmail.php");
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
        <link href="../Estilo/css/estiloLogin.css" rel="stylesheet" type="text/css"/>
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
                    <a href="" class="current"> Alterar Email </a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Alterar Email</h5>
                            </div>
                            <div class="widget-content">
                                <form action="../../Controller/ctrl_perfil_alterarEmail.php" method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Email:</label>
                                        <div class="controls">
                                            <input type="text" class="span11" required name="email" 
                                                   value="<?php echo $email; ?>"
                                                   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                                                   oninvalid="setCustomValidity('Digite seu e-mail no formato email@email.com')"
                                                   onchange="try{setCustomValidity('')}catch(e){}"/>
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

    </body>
</html>