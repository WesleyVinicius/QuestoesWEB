<?php
include_once("../../Controller/ctrl_sessao.php");
include_once("../../Controller/ctrl_questaoAlteracao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>QuestõesWEB</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="../Estilo/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="../Estilo/css/bootstrap-responsive.min.css" rel="stylesheet"/>
        <link href="../Estilo/css/colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="../Estilo/css/fullcalendar.css" rel="stylesheet"/>
        <link href="../Estilo/css/maruti-style.css" rel="stylesheet"/>
        <link href="../Estilo/css/maruti-media.css" rel="stylesheet" class="skin-color" />
        <link href="../Estilo/css/select2.css" rel="stylesheet" type="text/css"/>
        <link href="../Estilo/css/uniform.css" rel="stylesheet" type="text/css"/>
        <link href="../Estilo/css/estiloTabelas.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php include('logoPaginas.php') ?>

        <?php include("menuAdm.php") ?>

        <div id="content">
            <div id="content-header">
                <div id="breadcrumb"> 
                    <a href="../paginaInicialAdm.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 
                        Início
                    </a>
                    <a href="alterarQuestao.php" class="current">Listar Questões</a>
                    <a href="#" class="current">Alterar Questão</a>
                </div>
            </div>
            <div class="tabela">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="span11">
                            <div class="widget-box">
                                <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                                    <h5>Alterar Questão</h5>
                                </div>
                                <div class="widget-content">
                                    <form action="../../Controller/ctrl_questaoAlteracao.php" method="post" class="form-horizontal">
                                        <div class="control-group">
                                            <label class="control-label">Descrição:</label>
                                            <div class="controls">
                                                <textarea class="span11" required name="descricao" placeholder="Descrição" value="<?php echo $descricao; ?>" ></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Texto:</label>
                                            <div class="controls">
                                                <textarea class="span11" name="texto_associado" placeholder="Texto" value="<?php echo $texto_associado; ?>"></textarea>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Imagem:</label>
                                            <div class="controls">
                                                <input type="file" class="span11" name="imagem_associada" placeholder="Imagem"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Alternativa A:</label>
                                            <div class="controls">
                                                <input type="text" class="span11" required name="alternativa_a" placeholder="Alternativa A" value="<?php echo $alternativa_a; ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Alternativa B:</label>
                                            <div class="controls">
                                                <input type="text" class="span11" required name="alternativa_b" placeholder="Alternativa B" value="<?php echo $alternativa_b; ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Alternativa C:</label>
                                            <div class="controls">
                                                <input type="text" class="span11" required name="alternativa_c" placeholder="Alternativa C" value="<?php echo $alternativa_c; ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Alternativa D:</label>
                                            <div class="controls">
                                                <input type="text" class="span11" required name="alternativa_d" placeholder="Alternativa D" value="<?php echo $alternativa_d; ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Alternativa E:</label>
                                            <div class="controls">
                                                <input type="text" class="span11" name="alternativa_e" placeholder="Alternativa E" value="<?php echo $alternativa_e; ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Alternativa Correta:</label>
                                            <div class="controls">
                                                <input type="text" class="span11" required name="alternativa_correta" placeholder="Alternativa Correta" value="<?php echo $alternativa_correta; ?>"/>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Categoria:</label>
                                            <div class="controls">
                                                <select name="id_categoria">
                                                    <?php
                                                    $consulta = mysqli_query(conectar(), "SELECT * FROM categoria order by nome ASC");
                                                    echo("<option value=''>Selecione uma categoria</option>");
                                                    while ($dados = mysqli_fetch_array($consulta)) {
                                                        echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Instituição:</label>
                                            <div class="controls">
                                                <select name="id_instituicao">
                                                    <?php
                                                    $consulta = mysqli_query(conectar(), "SELECT * FROM instituicao order by nome ASC");
                                                    echo("<option value=''>Selecione uma instituicao</option>");
                                                    while ($dados = mysqli_fetch_array($consulta)) {
                                                        echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Organizadora:</label>
                                            <div class="controls">
                                                <select name="id_organizadora">
                                                    <?php
                                                    $consulta = mysqli_query(conectar(), "SELECT * FROM organizadora order by nome ASC");
                                                    echo("<option value=''>Selecione uma organizadora</option>");
                                                    while ($dados = mysqli_fetch_array($consulta)) {
                                                        echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Disciplina:</label>
                                            <div class="controls">
                                                <select name="id_disciplina">
                                                    <?php
                                                    $consulta = mysqli_query(conectar(), "SELECT * FROM disciplina order by nome ASC");
                                                    echo("<option value=''>Selecione uma disciplina</option>");
                                                    while ($dados = mysqli_fetch_array($consulta)) {
                                                        echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Cargo:</label>
                                            <div class="controls">
                                                <select name="id_cargo">
                                                    <?php
                                                    $consulta = mysqli_query(conectar(), "SELECT * FROM cargo order by nome ASC");
                                                    echo("<option value='3'>Selecione um cargo</option>");
                                                    while ($dados = mysqli_fetch_array($consulta)) {
                                                        echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Curso:</label>
                                            <div class="controls">
                                                <select name="id_curso">
                                                    <?php
                                                    $consulta = mysqli_query(conectar(), "SELECT * FROM curso order by nome ASC");
                                                    echo("<option value='6'>Selecione um curso</option>");
                                                    while ($dados = mysqli_fetch_array($consulta)) {
                                                        echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Prova:</label>
                                            <div class="controls">
                                                <select name="id_prova">
                                                    <?php
                                                    $consulta = mysqli_query(conectar(), "SELECT * FROM prova order by nome ASC");
                                                    echo("<option value=''>Selecione uma prova</option>");
                                                    while ($dados = mysqli_fetch_array($consulta)) {
                                                        echo("<option value='" . $dados['id'] . "'>" . $dados['nome'] . "</option>");
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
                                            <button type="submit" class="btn btn-success" name="update" value="Alterar">Alterar</button>
                                            <a href="listarQuestao.php" class='btn btn-danger'>Cancelar</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../rodape.php') ?>

        <script src="../Estilo/js/jquery.min.js"></script> 
        <script src="../Estilo/js/jquery.ui.custom.js"></script> 
        <script src="../Estilo/js/bootstrap.min.js"></script> 
        <script src="../Estilo/js/bootstrap-colorpicker.js"></script> 
        <script src="../Estilo/js/bootstrap-datepicker.js"></script> 
        <script src="../Estilo/js/jquery.uniform.js"></script> 
        <script src="../Estilo/js/select2.min.js"></script> 
        <script src="../Estilo/js/maruti.js"></script> 
        <script src="../Estilo/js/maruti.form_common.js"></script>
    </body>
</html>