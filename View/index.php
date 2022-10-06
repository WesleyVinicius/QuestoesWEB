<?php session_start(); ?>
<?php
    include_once("../Controller/ctrl_validacao.php");
?>
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
            <form id="loginform" class="form-vertical" method="post" action="">
                <div class="control-group normal_text"> 
                    <h3><img src="Estilo/img/logo.png" alt="Logo" /></h3>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on">
                                <i class="icon-envelope"></i>
                            </span><input type="text" required name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" oninvalid="setCustomValidity('Digite seu e-mail no formato email@email.com')" onchange="try{setCustomValidity('')}catch(e){}"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on">
                                <i class="icon-lock"></i>
                            </span><input type="password" required name="senha" placeholder="Senha" oninvalid="setCustomValidity('Digite sua senha')" onchange="try{setCustomValidity('')}catch(e){}"/> 
                        </div>  
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" class="btn btn-success" name="submit" value="Entrar" /></span>
                    <span class="pull-left"><a href="RecuperarSenha.php" class="flip-link btn btn-inverse" id="to-recover">Esqueceu sua senha?</a></span>

                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="cadastrarUsuario.php" class="flip-link btn btn-inverse" id="to-recover">Cadastre-se</a></span>
                </div>
            </form>

        </div>
    </body>

</html>