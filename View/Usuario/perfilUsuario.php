<?php
include_once("../../Controller/ctrl_conexao.php");
include_once("../../Controller/ctrl_sessao.php");

$result = mysqli_query(conectar(), "SELECT * FROM disciplina");
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Maruti Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../Estilo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../Estilo/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../Estilo/css/maruti-style.css" />
        <link rel="stylesheet" href="../Estilo/css/maruti-media.css" class="skin-color" />
        <link rel="stylesheet" href="../Estilo/css/estiloLogin.css"  type="text/css"/>
    </head>
    <body>
        <?php include('logoPaginas.php') ?>
        <?php include('menuUsuario.php') ?>


        <div id="content">
            <div id="content-header">
                <div id="breadcrumb">
                    <a href="paginaInicial.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Início</a>
                    <a href="#" class="current">Perfil</a>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" href="#tab1">Dados Pessoais</a></li>
                                    <li><a data-toggle="tab" href="#tab2">Histórico</a></li>
                                </ul>
                            </div>
                            <div class="widget-content tab-content">
                                <div id="tab1" class="tab-pane active">
                                    <?php
                                    $id_usuario = $_SESSION['id'];
                                    $result1 = mysqli_query(conectar(), "SELECT * FROM usuario WHERE id = $id_usuario");
                                    while ($res = mysqli_fetch_array($result1)) {
                                        ?>

                                        <div class="widget-content nopadding">
                                            <table class="table table-bordered data-table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th>Alterar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    echo "<tr>";
                                                    echo "<td>" . $res['nome'] . "</td>";
                                                    echo "<td><a href=\"alterarNome.php?id=$res[id]\" class='btn btn-info'>Alterar</a> ";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td>" . $res['email'] . "</td>";
                                                    echo "<td><a href=\"alterarEmail.php?id=$res[id]\" class='btn btn-info'>Alterar</a> ";
                                                    echo "</tr>";
                                                    echo "<tr>";
                                                    echo "<td>Senha</td>";
                                                    echo "<td><a href=\"alterarSenha.php?id=$res[id]\" class='btn btn-info'>Alterar</a> ";
                                                    echo "</tr>";
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div id="tab2" class="tab-pane">
                                    <div class="widget-content nopadding">
                                        <table class="table table-bordered data-table">
                                            <thead>
                                                <tr>
                                                    <th>Disciplina</th>
                                                    <th>Visualizar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                while ($res = mysqli_fetch_array($result)) {
                                                    $id_disciplina = $res['id'];

                                                    echo "<tr>";
                                                    echo "<td>" . $res['nome'] . "</td>";
                                                    ?>
                                                <td> 
                                                    <form id='<?php echo "$id_disciplina"; ?>' name="<?php echo "$id_disciplina"; ?>" method="post" onsubmit="return chk('<?= $id_disciplina ?>')" >
                                                        <input type="hidden" id="id_disciplina<?= $id_disciplina ?>" value="<?php echo "$id_disciplina"; ?>" >
                                                        <input type="submit" class='btn btn-info' value="Visualizar">
                                                        <p id="msg2<?= $id_disciplina ?>" class="msg2"></p>
                                                    </form>                         
                                                </td>
                                                <?php
                                                echo "</tr>";
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include('../rodape.php') ?>
        
        <script src="../Estilo/js/jquery.ui.custom.js"></script> 
        <script src="../Estilo/js/jquery.gritter.min.js"></script> 
        <script src="../Estilo/js/jquery.peity.min.js"></script> 
        <script src="../Estilo/js/maruti.js"></script>
        <script src="../Estilo/js/maruti.interface.js"></script>
        <script src="../Estilo/js/maruti.popover.js"></script>

        <script src="../Estilo/js/jquery.min.js"></script>
        <script src="../Estilo/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script type="text/javascript">
                                                    function chk(id) {

                                                        var dataObject = {
                                                            id_disciplina: document.getElementById('id_disciplina' + id).value
                                                        };

                                                        $.ajax({
                                                            type: "post",
                                                            url: "../../Controller/ctrl_perfil.php",
                                                            data: dataObject,
                                                            cache: false,
                                                            success: function (phtml) {
                                                                $('#msg2' + id).html(phtml);
                                                            }

                                                        });
                                                        return false;
                                                    }
        </script>
    </body>
</html>