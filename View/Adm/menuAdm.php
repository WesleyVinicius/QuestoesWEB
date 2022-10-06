<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>QuestõesWEB</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="Estilo/css/bootstrap.min.css" />
        <link rel="stylesheet" href="Estilo/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="Estilo/css/fullcalendar.css" />
        <link rel="stylesheet" href="Estilo/css/maruti-style.css" />
        <link rel="stylesheet" href="Estilo/css/maruti-media.css" class="skin-color" />
        
    </head>

    <body>
        <!--top-Header-menu-->
        <div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav">
                <li class="" ><a title="" href="../Usuario/paginaInicial.php"><i class="icon icon-user"></i> <span class="text">Modo Usuário</span></a></li>       
                <li class=""><a title="" href="../../Controller/logout.php"><i class="icon icon-share-alt"></i> <span class="text">Sair</span></a></li>
            </ul>
        </div>

        <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
            <ul>
                <li class="active"><a href="paginaInicialAdm.php"><i class="icon icon-home"></i> <span>Início</span></a> </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Cargos</span> </a>
                    <ul>
                        <li><a href="cadastrarCargo.php">Cadastrar</a></li>
                        <li><a href="listarCargo.php">Listar</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Categorias</span> </a>
                    <ul>
                        <li><a href="cadastrarCategoria.php">Cadastrar</a></li>
                        <li><a href="listarCategoria.php">Listar</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Cursos</span> </a>
                    <ul>
                        <li><a href="cadastrarCurso.php">Cadastrar</a></li>
                        <li><a href="listarCurso.php">Listar</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Disciplinas</span> </a>
                    <ul>
                        <li><a href="cadastrarDisciplina.php">Cadastrar</a></li>
                        <li><a href="listarDisciplina.php">Listar</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Instituições</span> </a>
                    <ul>
                        <li><a href="cadastrarInstituicao.php">Cadastrar</a></li>
                        <li><a href="listarInstituicao.php">Listar</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Organizadoras</span> </a>
                    <ul>
                        <li><a href="cadastrarOrganizadora.php">Cadastrar</a></li>
                        <li><a href="listarOrganizadora.php">Listar</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Provas</span> </a>
                    <ul>
                        <li><a href="cadastrarProva.php">Cadastrar</a></li>
                        <li><a href="listarProva.php">Listar</a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Gerenciar Questões</span> </a>
                    <ul>
                        <li><a href="cadastrarQuestao.php">Cadastrar</a></li>
                        <li><a href="listarQuestao.php">Listar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </body>
</html>