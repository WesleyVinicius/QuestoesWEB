<?php
    include_once("ctrl_conexao.php");
    
    //Alterar Prova
    if(isset($_POST['update'])){	
        $id = $_POST['id'];
        $nome = $_POST['nome'];

        if($nome == ""){
            if($nome == ""){
                echo "<font color='red'>Campo(s) obrigatório(s).</font><br/>";
            }	
        } else{	
            $result = mysqli_query(conectar(), "UPDATE prova SET nome='$nome' WHERE id=$id");
            header("Location: ../View/Adm/listarProva.php");
        }
    }
    
    //alguma coisa
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query(conectar(), "SELECT * FROM prova WHERE id=$id");

        while($res = mysqli_fetch_array($result)){
                $nome = $res['nome'];
        }
    }
?>