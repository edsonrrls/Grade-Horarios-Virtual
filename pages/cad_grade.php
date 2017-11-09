<?php
include ("conexao.php");

$consulta = "SELECT * FROM professor";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cadastro da Grade</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Footer Customizado -->
    <link rel="stylesheet" href="../dist/css/demo.css">
    <link rel="stylesheet" href="../dist/css/footer-distributed-with-address-and-phones.css">
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
    .btn {
        border-radius: 0px;
    }
    .form-control {
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
    .page-header {
        border-bottom: 1px solid #999;
    }
    .footer-distributed {
        margin-top: 0px;
        background-color: #e7e7e7;
    }
    .footer-distributed .footer-company-name {
        color: #555;
    }
    .sidebar ul li a.active {
        background-color: #e7e7e7;
    }
    .sidebar .sidebar-search {
        padding: 0px;
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
                    <h1 class="page-header">CADASTRO DE GRADE - Cabeçalho</h1>
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
                                
                                <form role="form" method="POST" action="processa_cad_grade.php">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nome do professor:</label>
                                            <select class="form-control" name="professor" required="">
                                                <option value="">Escolha uma opção</option>
                                                <?php while ($dado = $con->fetch_array()){ ?>
                                                <option value="<?php echo $dado["cod_prof"]; ?>">
                                                    <?php echo $dado["nome_prof"]; ?>
                                                </option>   
                                                <?php } ?>                                             
                                            </select>
                                            <p class="help-block">Escolha o nome do professor.</p>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Regime: </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="regime" id="optionsRadiosInline1" value="Hora Aula" checked>Hora Aula
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="regime" id="optionsRadiosInline2" value="RJI">RJI
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="regime" id="optionsRadiosInline3" value="Jornada">Jornada
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Categoria:</label>
                                            <input class="form-control" required="" name="categoria">
                                            <p class="help-block">Digite o nome da categoria do professor.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Validade a partir de:</label>
                                            <input type="date" class="form-control" name="validade" required="">
                                            <p class="help-block">Data de validade da grade.</p>
                                        </div>
                                        
                                        
                                    </div>

                                    <div class="col-lg-6">   
                                        <div class="form-group">
                                            <label>Nome do Curso:</label>
                                            <select class="form-control" required="" name="curso">
                                                <option value="">Escolha uma opção</option>
                                                <option value="Biocombustíveis">Biocombustíveis</option>
                                                <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                                                <option value="Gestão Empresarial">Gestão Empresarial</option>                                                
                                            </select>
                                            <p class="help-block">Escolha o curso da grade.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Semestre: </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="semestre" id="optionsRadiosInline4" value="1 Semestre" checked>1º Semestre
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="semestre" id="optionsRadiosInline5" value="2 Semestre">2º Semestre
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label>Ano:</label>
                                            <select class="form-control" required="" name="ano">
                                                <option value="">Escolha uma opção</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option> 
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>                                               
                                            </select>
                                            <p class="help-block">Escolha o ano vigente da grade.</p>
                                        </div> 

                                        <button type="submit" class="btn btn btn-outline btn-primary">Cadastrar</button>
                                        <button type="reset" class="btn btn btn-outline btn-danger">Cancelar</button>
                                       
                                    </div>

                                </form>
                               
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

    <footer class="footer-distributed">

                <div class="footer-left">
                </div>

                <div class="footer-center">

                    <div>
                        <span>Av. Prestes Maia, 1764 </span>Jd. Ipanema, Araçatuba/SP
                    </div>
                    <div>
                        (18) 3625-9917
                    </div>

                    <div>
                    
                        <a href="mailto:support@company.com">falecom@fatecaracatuba.edu.br</a>
                    </div>

                        <a href="http://fatecaracatuba.edu.br/site/"><i class="fa fa-facebook"></i></a>
                        <a href="https://github.com/edsonrrls/Grade-Horarios-Virtual"><i class="fa fa-github"></i></a>
                </div>

                <div class="footer-right">

                    <img src="fatec.png" width="200px">

                    <p class="footer-company-name">Grade Horários Digital &copy; 2017
                    <br>Edson Asêncio Leal
                    <br>Lucilena de Lima</p>
                    
                </div>

            </footer>

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
