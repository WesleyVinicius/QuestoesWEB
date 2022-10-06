<?php

include("ctrl_conexao.php");

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string(conectar(), $_POST['email']);
    $senha = mysqli_real_escape_string(conectar(), $_POST['senha']);


    $result = mysqli_query(conectar(), "SELECT * FROM usuario WHERE email='$email' AND senha=md5('$senha')")
            or die("Falha ao se conectar com o banco de dados.");

    $row = mysqli_fetch_assoc($result);

    if (is_array($row) && !empty($row)) {
        $validuser = $row['email'];
        $_SESSION['valid'] = $validuser;
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['id'] = $row['id'];
    } else {
        echo "<script type='text/javascript'>alert('Usuário ou senha incorretos.');</script>";
    }

    if (isset($_SESSION['valid'])) {
        if (($_SESSION['tipo'] = $row['tipo']) == "Comum") {
            header('Location: Usuario/paginaInicial.php');
        } else {
            header('Location: Adm/paginaInicialAdm.php');
        }
    }
}
?>