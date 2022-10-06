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
                    <a href="" class="current"> Alterar Senha </a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                <h5>Alterar Senha</h5>
                            </div>
                            <div class="widget-content">
                                <form action="../../Controller/ctrl_perfil_alterarSenha.php" method="post" class="form-horizontal">
                                    <div class="control-group">
                                        <label class="control-label">Senha atual:</label>
                                        <div class="controls">
                                            <input type="password" class="span11" required name="senhaatual" placeholder="Senha atual" size="8"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Nova senha:</label>
                                        <div class="controls">
                                            <input type="password" class="span11" required name="novasenha" placeholder="Nova senha" size="8"/>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Confirmar nova senha:</label>
                                        <div class="controls">
                                            <input type="password" class="span11" required name="confirmarsenha" placeholder="Confirmar nova senha" size="8"/>
                                        </div>
                                    </div>
                                  
                                    <div class="form-actions">
                                         <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                        <button type="submit" class="btn btn-success" name="submit" value="Alterar">Alterar</button>
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