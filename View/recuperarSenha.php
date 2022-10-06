<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Login</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="Estilo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="Estilo/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="Estilo/css/maruti-login.css" />
        <link href="Estilo/css/estiloLogin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="loginbox">
            <form id="loginform" class="form-vertical" method="post" action="../Controller/ctrl_recuperarSenha.php">
                <p class="normal_text">Informe seu e-mail para que uma nova senha seja enviada.</p>
				
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail" name="email" />
                    </div>
                </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="index.php" class="flip-link btn btn-inverse" id="to-login">&laquo; Voltar</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" value="Recuperar" /></span>
                </div>
            </form>
        </div>
        
        <script src="../Estilo/js/jquery.min.js"></script>  
        <script src="../Estilo/js/maruti.login.js"></script> 
    </body>

</html>

