<?php
    include_once("../Controller/ctrl_conexao.php");
    
    function buscarQuestao($id_questao){
        return mysqli_query(conectar(), "select * FROM questao WHERE id=$id_questao");
    }
    
    function salvarQuestoesCertas(){
        
    }
    
    function salvarQuestoesErradas(){
        
    }
?>