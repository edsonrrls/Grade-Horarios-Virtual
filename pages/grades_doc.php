<?php
    include("conexao.php");

    $consulta = "SELECT * FROM grade JOIN professor on grade.cod_prof = professor.cod_prof";
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



    <title>Listagem de Professores</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

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

<style>
.btn-circle{
    width: 25px;
    height: 20px;
    padding: 0px;
    border-radius: 5px;
    text-align: center;
    font-size: 14px;
    line-height: 0;
}
</style>

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
                    <h1 class="page-header">DOCUMENTOS - GRADES</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Listagem de grades cadastradas
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                            <table width="100%" class="table table-striped table-bordered table-hover" id="professor">
                                <thead>
                                    <tr>
                                        <th>Cód.</th>
                                        <th>Professor</th>
                                        <th>Regime</th>
                                        <!-- <th>Categoria</th> -->
                                        <th>Curso</th> 
                                        <th>Semestre</th> 
                                        <!--<th>Ano</th> 
                                        <th>Data</th> -->
                                        <th></th>
                                                                                 
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while ($dado = $con->fetch_array()){ ?>                                
                                    <tr class="odd gradeX">                                    
                                        <td><?php echo $dado["cod_grade"]; ?></td>
                                        <td><?php echo $dado["nome_prof"]; ?></td>
                                        <td><?php echo $dado["regime"]; ?></td> 
                                        <!-- <td><?php echo $dado["categoria"]; ?></td> -->
                                        <td><?php echo $dado["curso"]; ?></td> 
                                        <td><?php echo $dado["semestre"]; ?></td>
                                        <!-- <td><?php echo $dado["ano"]; ?></td>
                                        <td><?php echo $dado["validade"]; ?></td>  -->
                                        <td>
                                        <center>
                                        <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#info" data-whatevercod="<?php echo $dado["cod_grade"]; ?>" 
                                        data-whatevernome="<?php echo $dado["cod_prof"]; ?>" 
                                        data-whateveregime="<?php echo $dado["regime"]; ?>" 
                                        data-whatevercurso="<?php echo $dado["curso"]; ?>"
                                        data-whateversemestre="<?php echo $dado["semestre"]; ?>"
                                        data-whatevercategoria="<?php echo $dado["categoria"]; ?>"
                                        data-whateverano="<?php echo $dado["ano"]; ?>"
                                        data-whatevervalidade="<?php echo $dado["validade"]; ?>"
                                        >PDF
                                        </button>
                                        </td>                                                                         
                                    </tr>                     
                                <?php }?>                                    
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        
                        </div>
                        <!-- /.panel-body -->
                    </div>                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->

                <div class="panel-body">

                    <!-- Modal -->
                    <div class="modal fade" id="info" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Gerar documento PDF</h4>
                                </div>
                                <div class="modal-body">
                                    
                                    <form role="form" method="POST" action="grade_pdf.php">

                                        <input type="hidden" name="cod_grade" id="recipientcod">
                                        <input type="hidden" name="cod_prof" id="recipientnome">
                                        <input type="hidden" name="regime" id="recipientregime">
                                        <input type="hidden" name="curso" id="recipientcurso">
                                        <input type="hidden" name="semestre" id="recipientsemestre">
                                        <input type="hidden" name="ano" id="recipientano">
                                        <input type="hidden" name="categoria" id="recipientcategoria">
                                        <input type="hidden" name="validade" id="recipientvalidade"> 
 
                                        <button type="submit" class="btn btn-outline btn-danger btn-lg btn-block">Gerar documento PDF</button>
                                </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>                                    
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                </div>

            </div>
            <!-- /.row -->
            
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

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#professor').DataTable({
                        "language": {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    });
    </script> 

    <script type="text/javascript">

    $('#info').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      var recipientcod = button.data('whatevercod')
      var recipientnome = button.data('whatevernome')
      var recipientregime = button.data('whateveregime')
      var recipientcurso = button.data('whatevercurso')
      var recipientsemestre = button.data('whateversemestre')
      var recipientcategoria = button.data('whatevercategoria')
      var recipientano = button.data('whateverano')
      var recipientvalidade = button.data('whatevervalidade')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)      
      modal.find('#recipientcod').val(recipientcod)
      modal.find('#recipientnome').val(recipientnome)
      modal.find('#recipientregime').val(recipientregime)
      modal.find('#recipientcurso').val(recipientcurso)
      modal.find('#recipientsemestre').val(recipientsemestre)
      modal.find('#recipientcategoria').val(recipientcategoria)
      modal.find('#recipientano').val(recipientano)
      modal.find('#recipientvalidade').val(recipientvalidade)
    });

    </script> 

    <script type="text/javascript">

    $('#delete').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      var recipientcod = button.data('whatevercod')
      var recipientnome = button.data('whatevernome')
      var recipientfone = button.data('whateverfone')
      var recipientemail = button.data('whateveremail')
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)      
      modal.find('#recipientcod').val(recipientcod)
      modal.find('#recipientnome').val(recipientnome)
      modal.find('#recipientfone').val(recipientfone)
      modal.find('#recipientemail').val(recipientemail)
    });

    </script>

</body>

</html>
