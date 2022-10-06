<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastre-se</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="Estilo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="Estilo/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="Estilo/css/maruti-login.css" />
        <link href="Estilo/css/estiloLogin.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="post" action="../Controller/ctrl_usuario.php">
                <div class="control-group normal_text"> 
                    <h1><p class="normal_text">INFORME SEUS DADOS</p></h1>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" name="nome" 
                                                                                        placeholder="Nome Completo"
                                                                                        required oninvalid="setCustomValidity('Campo obrigatório')" 
                                                                                        onchange="try{setCustomValidity('')}catch(e){}" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" 
                                                                                            placeholder="E-mail" required
                                                                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" 
                                                                                            oninvalid="setCustomValidity('Digite seu e-mail no formato email@email.com')" 
                                                                                            onchange="try{setCustomValidity('')}catch(e){}"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" name="senha" 
                                                                                        placeholder="Senha"
                                                                                        required oninvalid="setCustomValidity('Campo obrigatório')" 
                                                                                        onchange="try{setCustomValidity('')}catch(e){}"/> 
                        </div>  
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-right"><input type="submit" class="btn btn-success" name="submit" value="Cadastrar" /></span>
                    <span class="pull-left"><a href="index.php" class="flip-link btn btn-inverse" id="to-login">&laquo; Voltar</a></span>
                </div>
            </form>
        </div>
        
        <script src="../Estilo/js/jquery.min.js"></script>  
        <script src="../Estilo/js/maruti.login.js"></script> 
    </body>
</html>