<?php
    include_once("../../Controller/ctrl_conexao.php");
    include_once("../../Controller/ctrl_sessao.php");
    $result = mysqli_query(conectar(), "SELECT * FROM usuario");
    $id_usuario = $_SESSION['id'];
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
        <link href="../Estilo/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../Estilo/css/maruti-style.css" />
        <link rel="stylesheet" href="../Estilo/css/maruti-media.css" class="skin-color" />
        <link href="../Estilo/css/select2.css" rel="stylesheet" type="text/css"/>
        <link href="../Estilo/css/uniform.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="../Estilo/css/estiloLogin.css"  type="text/css"/>
        <link href="../Estilo/css/estiloTabelas.css" rel="stylesheet" type="text/css"/>
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
                    <a href="#" class="current">Questões</a>
                </div>
            </div>
            <div class="tabela">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span11">
                            <div class="widget-box">

                                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                    <h5>Filtros de pesquisa</h5>
                                </div>

                                <div class="widget-content">
                                    <form action="filtrarQuestoes.php" method="post" class="form-horizontal" >
                                        <div class="control-group">

                                            <div class="widget-title2">
                                                <h5>
                                                    <select name="id_cargo">
                                                        <option value="" selected="selected">Selecione o cargo</option>
                                                        <?php
                                                        $consulta = mysqli_query(conectar(), "SELECT * FROM cargo order by nome ASC");
                                                        if (mysqli_num_rows($consulta) == null) {
                                                            echo '<option value="">Não foram encontrados cargos</option>';
                                                        } else {
                                                            while ($dados = mysqli_fetch_array($consulta)) {
                                                                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                            }
                                                        }
                                                        ?>
                                                    </select> 
                                                </h5>
                                                <h5>                      
                                                    <select name="id_categoria">
                                                        <option value="" selected="selected">Selecione a categoria</option>
                                                        <?php
                                                        $consulta = mysqli_query(conectar(), "SELECT * FROM categoria order by nome ASC");
                                                        if (mysqli_num_rows($consulta) == null) {
                                                            echo '<option value="">Não foram encontradas categorias</option>';
                                                        } else {
                                                            while ($dados = mysqli_fetch_array($consulta)) {
                                                                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                            }
                                                        }
                                                        ?>
                                                    </select> 
                                                </h5>  
                                                <h5>


                                                    <select name="id_curso">
                                                        <option value="" selected="selected">Selecione o curso</option>
                                                        <?php
                                                        $consulta = mysqli_query(conectar(), "SELECT * FROM curso order by nome ASC");
                                                        if (mysqli_num_rows($consulta) == null) {
                                                            echo '<option value="">Não foram encontrados cursos</option>';
                                                        } else {
                                                            while ($dados = mysqli_fetch_array($consulta)) {
                                                                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                            }
                                                        }
                                                        ?>
                                                    </select> 

                                                </h5>
                                                <h5>
                                                    <select name="id_disciplina">
                                                        <option value="" selected="selected">Selecione a disciplina</option>
                                                        <?php
                                                        $consulta = mysqli_query(conectar(), "SELECT * FROM disciplina order by nome ASC");
                                                        if (mysqli_num_rows($consulta) == null) {
                                                            echo '<option value="">Não foram encontradas disciplinas</option>';
                                                        } else {
                                                            while ($dados = mysqli_fetch_array($consulta)) {
                                                                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </h5>
                                                <h5>

                                                    <select name="id_instituicao">
                                                        <option value="" selected="selected">Selecione a instituição</option>
                                                        <?php
                                                        $consulta = mysqli_query(conectar(), "SELECT * FROM instituicao order by nome ASC");
                                                        if (mysqli_num_rows($consulta) == null) {
                                                            echo '<option value="">Não foram encontradas instituições</option>';
                                                        } else {
                                                            while ($dados = mysqli_fetch_array($consulta)) {
                                                                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                            }
                                                        }
                                                        ?>
                                                    </select> 
                                                </h5>

                                                <h5>
                                                    <select name="id_organizadora">
                                                        <option value="" selected="selected">Selecione a organizadora</option>
                                                        <?php
                                                        $consulta = mysqli_query(conectar(), "SELECT * FROM organizadora order by nome ASC");
                                                        if (mysqli_num_rows($consulta) == null) {
                                                            echo '<option value="">Não foram encontradas organizadoras</option>';
                                                        } else {
                                                            while ($dados = mysqli_fetch_array($consulta)) {
                                                                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                </h5>

                                                <h5>                                            
                                                    <select name="id_prova">
                                                        <option value="" selected="selected">Selecione a prova</option>
                                                        <?php
                                                        $consulta = mysqli_query(conectar(), "SELECT * FROM prova order by nome ASC");
                                                        if (mysqli_num_rows($consulta) == null) {
                                                            echo '<option value="">Não foram encontradas provas</option>';
                                                        } else {
                                                            while ($dados = mysqli_fetch_array($consulta)) {
                                                                echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                            }
                                                        }
                                                        ?>
                                                    </select>                                          
                                                </h5>                                       
                                                <h5>
                                                    
                                                    <p> <input type="radio" class="radio" value="<?php echo "$id_usuario"; ?>" name="nao_respondida">     Não respondidas</p>
                                                
                                                    
                                                </h5>                          
                                                                                 
                                            </div> 
                                        </div>
                                        <p>
                                            <button type="submit" class="btn btn-info" name="bt_enviar" value="Buscar">Buscar</button>
                                        </p>
                                    </form> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            if (isset($_POST['bt_enviar'])) {

                if (empty($_POST['id_disciplina'])) {
                    $id_disciplina = 0;
                } else {
                    $id_disciplina = $_POST['id_disciplina'];
                }
                if (empty($_POST['id_organizadora'])) {
                    $id_organizadora = 0;
                } else {
                    $id_organizadora = $_POST['id_organizadora'];
                }
                if (empty($_POST['id_instituicao'])) {
                    $id_instituicao = 0;
                } else {
                    $id_instituicao = $_POST['id_instituicao'];
                }
                if (empty($_POST['id_curso'])) {
                    $id_curso = 0;
                } else {
                    $id_curso = $_POST['id_curso'];
                }
                if (empty($_POST['id_cargo'])) {
                    $id_cargo = 0;
                } else {
                    $id_cargo = $_POST['id_cargo'];
                }
                if (empty($_POST['id_prova'])) {
                    $id_prova = 0;
                } else {
                    $id_prova = $_POST['id_prova'];
                }
                if (empty($_POST['id_categoria'])) {
                    $id_categoria = 0;
                } else {
                    $id_categoria = $_POST['id_categoria'];
                }

                if (empty($_POST['nao_respondida'])) {

                    $sql_questao = mysqli_query(conectar(), "SELECT questao.id, questao.peso, questao.descricao, 
                                        questao.texto_associado, questao.imagem_associada, 
                                        questao.alternativa_a, questao.alternativa_b, questao.alternativa_c,
                                        questao.alternativa_d, questao.alternativa_e,
                                        organizadora.nome as organizadora, instituicao.nome as instituicao,
                                        disciplina.nome as disciplina, prova.nome as prova FROM questao
                                        inner join categoria on categoria.id = questao.id_categoria
                                        inner join organizadora on organizadora.id = questao.id_organizadora
                                        inner join instituicao on instituicao.id = questao.id_instituicao
                                        inner join prova on prova.id = questao.id_prova
                                        inner join disciplina on disciplina.id = questao.id_disciplina" .
                            " WHERE "
                            . "( id_disciplina = $id_disciplina OR $id_disciplina = 0) "
                            . "AND (id_organizadora = $id_organizadora OR $id_organizadora = 0)"
                            . "AND (id_curso = $id_curso OR $id_curso = 0) "
                            . "AND (id_cargo = $id_cargo OR $id_cargo = 0) "
                            . "AND (id_instituicao = $id_instituicao OR $id_instituicao = 0)"
                            . "AND (id_prova = $id_prova OR $id_prova = 0)"
                            . "AND (id_categoria = $id_categoria OR $id_categoria = 0)");
                } else {
                    $id_usuario = $_POST['nao_respondida'];

                    $sql_questao = mysqli_query(conectar(), "SELECT
                                        questao.id, questao.peso, questao.descricao, questao.texto_associado, questao.imagem_associada, 
                                        questao.alternativa_a, questao.alternativa_b, questao.alternativa_c, questao.alternativa_d, questao.alternativa_e,
                                        organizadora.nome as organizadora, instituicao.nome as instituicao, disciplina.nome as disciplina, prova.nome as prova,
                                        questao_resolvida.id_usuario
                                        FROM questao
                                        inner join categoria on categoria.id = questao.id_categoria
                                        inner join organizadora on organizadora.id = questao.id_organizadora
                                        inner join instituicao on instituicao.id = questao.id_instituicao
                                        inner join prova on prova.id = questao.id_prova
                                        inner join disciplina on disciplina.id = questao.id_disciplina
                                        left join questao_resolvida 
                                        on (questao_resolvida.id_questao_certa = questao.id and questao_resolvida.id_usuario=$id_usuario) 
                                        or (questao_resolvida.id_questao_errada = questao.id and questao_resolvida.id_usuario=$id_usuario) 
                                        where id_usuario is null
                                                    AND (id_disciplina = $id_disciplina OR $id_disciplina = 0)"
                            . " AND (id_organizadora = $id_organizadora OR $id_organizadora = 0)"
                            . " AND (id_curso = $id_curso OR $id_curso = 0)"
                            . " AND (id_cargo = $id_cargo OR $id_cargo = 0) "
                            . " AND (id_instituicao = $id_instituicao OR $id_instituicao = 0)"
                            . " AND (id_prova = $id_prova OR $id_prova = 0)"
                            . " AND (id_categoria = $id_categoria OR $id_categoria = 0)"
                            . "");
                }
                ?>


                <?php

                if (mysqli_num_rows($sql_questao) == null) {
                    echo " <p><h4><strong style='color:white'>_____________</strong>Nenhuma questão encontrada para essa pesquisa. </h4></p>";
                } else {
                    while ($row = mysqli_fetch_array($sql_questao)) {

                        $id_questao = $row['id'];
                        ?>
                        <div class="tabela">
                            <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span11">
                                        <div class="widget-box">
                                            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                                <h5>Disciplina: <?php echo $row['disciplina'] ?></h5>
                                                <h5>Prova: <?php echo $row['prova'] ?></h5>
                                                <h5>Organizadora: <?php echo $row['organizadora'] ?></h5>
                                                <h5>Instituição: <?php echo $row['instituicao'] ?></h5>
                                            </div>
                                            <div class="widget-content nopadding">
                                                <table class="table table-bordered data-table">


                                                    <?php
                                                    if (!empty($row['texto_associado'])) {
                                                        echo "<tr>";
                                                        echo "<td> <b> Texto associado: </b> <i>" . $row['texto_associado'] . "</i> </td>";
                                                        echo "</tr>";
                                                    }
                                                    if (!empty($row['imagem_associada'])) {
                                                        $img = "../Estilo/imagens/";
                                                        $img = $img + $row['imagem_associada'];
                                                        
                                                        echo "<tr>";
                                                        echo "<td><img src=" . $row['imagem_associada'] . "></td>";
                                                        echo "</tr>";
                                                    }
                                                    echo "<tr>";
                                                    echo "<td>" . $row['descricao'] . "</td>";
                                                    echo "</tr>";
                                                    ?>

                                                    <tr>

                                                        <td>
                                                            <form id='<?php echo "$id_questao"; ?>' name="<?php echo "$id_questao"; ?>" method="post" onsubmit="return chk('<?= $id_questao ?>')" >
                                                                <p> <input type="radio" class="radio" value="a" name="alternativa" id="alternativa1<?= $id_questao ?>"> <?php echo $row['alternativa_a']; ?> </p> 
                                                                <p> <input type="radio" class="radio" value="b" name="alternativa" id="alternativa2<?= $id_questao ?>"> <?php echo $row['alternativa_b']; ?> </p> 
                                                                <p> <input type="radio" class="radio" value="c" name="alternativa" id="alternativa3<?= $id_questao ?>"> <?php echo $row['alternativa_c']; ?> </p> 
                                                                <p> <input type="radio" class="radio" value="d" name="alternativa" id="alternativa4<?= $id_questao ?>"> <?php echo $row['alternativa_d']; ?> </p> 

                                                                <?php
                                                                if (empty($row['alternativa_e'])) {
                                                                    ?>   
                                                                    <input type="hidden" value="e" name="alternativa" id="alternativa5<?= $id_questao ?>" >   
                                                                    <?php
                                                                } else {
                                                                    ?>
                                                                    <p> <input type="radio" class="radio" value="e" name="alternativa" id="alternativa5<?= $id_questao ?>"> <?php echo $row['alternativa_e']; ?> </p>
                                                                    <?php
                                                                }
                                                                ?>

                                                                <div class="form-actions">
                                                                    <input type="hidden" id="id_questao<?= $id_questao ?>" value="<?php echo "$id_questao"; ?>" >
                                                                    <button type="submit" class="btn btn-info" value="Responder">Responder</button>
                                                                </div>

                                                            </form>
                                                            <p id="msg<?= $id_questao ?>" class="msg1"></p>

                                                        </td>
                                                    </tr>   
                                                </table> 
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            }
            ?>
        </div>

        <?php include('../rodape.php') ?>
        
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
                                                    function chk(id) {
                                                        var rate_value;
                                                        if (document.getElementById('alternativa1' + id).checked) {
                                                            rate_value = document.getElementById('alternativa1' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa2' + id).checked) {
                                                            rate_value = document.getElementById('alternativa2' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa3' + id).checked) {
                                                            rate_value = document.getElementById('alternativa3' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa4' + id).checked) {
                                                            rate_value = document.getElementById('alternativa4' + id).value;
                                                        }
                                                        if (document.getElementById('alternativa5' + id).checked) {
                                                            rate_value = document.getElementById('alternativa5' + id).value;
                                                        }

                                                        var dataObject = {alternativa: rate_value,
                                                            id_questao: document.getElementById('id_questao' + id).value};
                                                        $.ajax({
                                                            type: "post",
                                                            url: "../../Controller/ctrl_validarQuestao.php",
                                                            data: dataObject,
                                                            cache: false,
                                                            success: function (phtml) {

                                                                $('#msg' + id).html(phtml);
                                                            }

                                                        });
                                                        return false;
                                                    }
        </script>
    </body>
</html>