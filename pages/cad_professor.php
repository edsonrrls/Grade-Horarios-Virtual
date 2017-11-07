<?php
include ("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro de Professor</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css"> 
    a {
        color: #555;
    }
    a.nounderline:link 
    { 
     text-decoration:none; 
    }
    .panel-heading{
        border-radius: 0px;
    }

    .panel{
        border-radius: 0px;
    }
    .btn-group-lg>.btn, .btn-lg{
        border-radius: 0px;
    } 
    .page-header{
        color: #b9b9b9;
    }
    .btn {
        border-radius: 0px;
    }
    .form-control {
        border-radius: 0px;
    }
    .panel-default>.panel-heading {
        background-color: #e7e7e7;
    }
    .page-header {
        border-bottom: 1px solid #999;
    }
    </style>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Grade de Horários Virtual 0.17</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil do usuário</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opções</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Encerrar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Painel Principal</a>
                        </li>
                        <li>
                            <a><i class="fa fa-plus fa-fw"></i> Cadastros<span class="fa arrow"></span></a>
                            
                                <li>
                                    <a href="cad_professor.php">Professor</a>
                                </li>
                                <li>
                                    <a href="cad_disciplina.php">Disciplina</a>
                                </li>
                                <li>
                                    <a href="cad_horario.php">Horário</a>
                                </li>
                                <li>
                                    <a href="cad_grade.php">Grade (Cabeçalho)</a>
                                </li>
                                <li>
                                    <a href="cad_hora_aula.php">Hora - Aula (Corpo)</a>
                                </li>                            
                            
                        </li>

                         <li>
                            <a><i class="fa fa-file-text fa-fw"></i> Relatórios<span class="fa arrow"></span></a>
                            
                                <li>
                                    <a href="professores.php">Professor</a>
                                </li>
                                <li>
                                    <a href="disciplinas.php">Disciplina</a>
                                </li>
                                <li>
                                    <a href="horarios.php">Horário</a>
                                </li>
                                <li>
                                    <a href="grades.php">Grade</a>
                                </li>
                            
                        </li>
                        
                       

                        <li>
                            <a href="grades_doc.php"><i class="fa fa-table fa-fw"></i> Grade</a>
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">CADASTRO DE PROFESSOR</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Insira as informações para cadastro:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="processa_cad_prof.php">
                                        <div class="form-group">
                                            <label>Nome:</label>
                                            <input class="form-control" required="" name="nome">
                                            <p class="help-block">Digite o nome completo.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Telefone:</label>
                                            <input class="form-control" maxlength="11" placeholder="Somente números" required="" name="fone">
                                            <p class="help-block">Digite o número 9 antes do número de telefone.</p>
                                        </div>
                                        <div class="form-group">
                                            <label>E-Mail:</label>
                                            <input class="form-control" type="email" placeholder="email@examplo.com" required="" name="email">
                                            <p class="form-control-static">Digite um e-mail existente.</p>
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn btn-outline btn-primary">Cadastrar</button>
                                        <button type="reset" class="btn btn btn-outline btn-danger">Cancelar</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">  
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
