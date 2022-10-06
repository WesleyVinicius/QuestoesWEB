<?php

include("ctrl_conexao.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $senhaatual = mysqli_real_escape_string(conectar(), $_POST['senhaatual']);
    $novasenha = mysqli_real_escape_string(conectar(), $_POST['novasenha']);
    $confirmarsenha = mysqli_real_escape_string(conectar(), $_POST['confirmarsenha']);
    
    $result = mysqli_query(conectar(), "SELECT * FROM usuario WHERE id=$id");
    $row = mysqli_fetch_array($result);
    $senha = $row['senha'];
    $id = $row['id'];
    
    if ($senhaatual == "" || $novasenha == "" || $confirmarsenha == "") {
        echo "<script type='text/javascript'>alert('Campo(s) obrigatório(s)');</script>";
    } 
    else if (md5($senhaatual) !== $senha) {
        echo "<script type='text/javascript'>alert('Senha atual incorreta.');</script>";
     
       
    } 
    else if ($novasenha !== $confirmarsenha){
        echo "<script type='text/javascript'>alert('Nova senha incorreta.');</script>";
    
        
    } else {

        $result = mysqli_query(conectar(), "UPDATE usuario SET senha=md5('$novasenha') where id=$id")
                or die("Falha ao se conectar com o banco de dados.");
        echo "<script type='text/javascript'>alert('Senha alterada com sucesso');</script>"; 
         echo "<form action='../View/Usuario/perfilUsuario.php'>"
            . "<input type='submit' class='btn btn-success' value='Voltar'> "
            . "</form>";
    } 
  
       
 }


?>