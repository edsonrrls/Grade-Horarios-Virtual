<?php
include ("conexao.php");

$consulta = "SELECT grade.cod_grade, grade.curso, grade.ano, professor.nome_prof FROM grade JOIN professor on grade.cod_prof = professor.cod_prof";
    $con = $mysqli->query($consulta) or die($mysqli->error);

$consulta2 = "SELECT * FROM horario  ORDER BY hora_inicio";
    $con2 = $mysqli->query($consulta2) or die($mysqli->error);

$consulta3 = "SELECT * FROM disciplina";
    $con3 = $mysqli->query($consulta3) or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro de Hora Aula</title>

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
                    <h1 class="page-header">CADASTRO DE HORA - AULA</h1>
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
                                
                                <form role="form" method="POST" action="processa_cad_hora_aula.php">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                            <label>Grade:</label>
                                            <select class="form-control" required="" name="codgrade">
                                                <option value="">Escolha uma opção</option>
                                                
                                                <?php while ($dado = $con->fetch_array()){ ?>
                                                <option value="<?php echo $dado["cod_grade"]; ?>">
                                                    <?php echo $dado["cod_grade"];?> - <?php echo $dado["nome_prof"]; ?> - <?php echo $dado["curso"]; ?>
                                                </option>                    
                                                <?php } ?>

                                            </select>
                                            <p class="help-block">Escolha a grade de acordo o código da grade e o nome do(a) professor(a).</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Nome da disciplina:</label>
                                            <select class="form-control" required="" name="disc">
                                                <option value="">Escolha uma opção</option>
                                                
                                                <?php while ($disc = $con3->fetch_array()){ ?>
                                                <option value="<?php echo $disc["cod_disc"]; ?>">
                                                    <?php echo $disc["nome_disc"]; ?>                             
                                                </option>                    
                                                <?php } ?> 

                                            </select>
                                            <p class="help-block">Escolha a disciplina da aula.</p>
                                        </div>
                                </div>
                                <!-- /.col-lg-6 (nested) -->


                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label>Hora da aula:</label>
                                        <select class="form-control" required="" name="horario">
                                            <option value="">Escolha um opção</option>

                                            <?php while ($hora = $con2->fetch_array()){ ?>
                                            <option value="<?php echo $hora["cod_horario"]; ?>">
                                                <?php echo $hora["hora_inicio"]; ?> - <?php echo $hora["hora_termino"]; ?> - <?php echo $hora["turno"]; ?>                            
                                            </option>                    
                                            <?php } ?> 

                                        </select>
                                        <p class="help-block">Escolha o horário da aula.</p>
                                    </div>

                                    <div class="form-group">
                                    <label>Dia da semana:</label>
                                        <select class="form-control" required="" name="dia">
                                            <option value="">Escolha um opção</option>
                                            <option value="Segunda-feira">Segunda-feira</option> 
                                            <option value="Terça-feira">Terça-feira</option>
                                            <option value="Quarta-feira">Quarta-feira</option>
                                            <option value="Quinta-feira">Quinta-feira</option>
                                            <option value="Sexta-feira">Sexta-feira</option>
                                            <option value="Sábado">Sábado</option>  
                                        </select>
                                        <p class="help-block">Escolha o dia da samana da aula.</p>
                                    </div>

                                    <button type="submit" class="btn btn btn-outline btn-primary">Cadastrar</button>
                                    <button type="reset" class="btn btn btn-outline btn-danger">Cancelar</button>

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </form>

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
