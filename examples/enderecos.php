<!--
=========================================================
 Material Dashboard - v2.1.1
=========================================================

 Product Page: https://www.creative-tim.com/product/material-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/material-dashboard/blob/master/LICENSE.md)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<?php 

    session_start();

    if(!isset($_SESSION['Status'])){
        header('Location: ../');
        exit();   
    }
    
?>

 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.png">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>
 
     </title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="../assets/css/editDataTables.css">

     <!-- CSS Files -->
     <link href="../assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href="../assets/demo/demo.css" rel="stylesheet" />
 </head>
 
 <body class="">
     <div class="wrapper ">
         <div class="sidebar" data-color="danger" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
             <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
 
          Tip 2: you can also add an image using data-image tag
      -->
             <div class="logo">
                 <a href="dashboard.php" class="simple-text logo-normal">
                     <img src="../assets/img/logo.png" width="220px" alt="">
                 </a>
             </div>
             <div class="sidebar-wrapper">
                 <ul class="nav">
                     <li class="nav-item  ">
                         <a class="nav-link" href="./dashboard.php">
                             <i class="material-icons">dashboard</i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                     <li class="nav-item ">
                         <a class="nav-link" href="./estoque.php">
                             <i class="material-icons">store</i>
                             <p>Estoque</p>
                         </a>
                     </li>
                     <li class="nav-item  ">
                         <a class="nav-link" href="./registros.php">
                             <i class="material-icons">content_paste</i>
                             <p>Registros</p>
                         </a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="./enderecos.php">
                            <i class="material-icons">import_export</i>
                            <p>Endereços</p>
                        </a>
                    </li>
                 </ul>
             </div>
         </div>
         <div class="main-panel">
             <!-- Navbar -->
             <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                 <div class="container-fluid">
                     <div class="navbar-wrapper">
                         <a class="navbar-brand" href="#pablo">
                             <h3 class="title"> WMS - Tuboarte </h3> </a>
                     </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="navbar-toggler-icon icon-bar"></span>
                         <span class="navbar-toggler-icon icon-bar"></span>
                         <span class="navbar-toggler-icon icon-bar"></span>
                     </button>
                     <div class="collapse navbar-collapse justify-content-end">
                         <!-- <form class="navbar-form">
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                      <i class="material-icons">search</i>
                      <div class="ripple-container"></div>
                    </button>
                  </div>
                </form> -->
                         <ul class="navbar-nav">
                             <!-- <li class="nav-item">
                  <a class="nav-link" href="#pablo">
                    <i class="material-icons">dashboard</i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li> -->
                             <!-- <li class="nav-item dropdown">
                  <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="material-icons">notifications</i>
                    <span class="notification">5</span>
                    <p class="d-lg-none d-md-block">
                      Some Actions
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                  </div>
                </li> -->
                             <li class="nav-item dropdown">
                                 <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <i class="material-icons">person</i>
                                     <p class="d-lg-none d-md-block">
                                         Account
                                     </p>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                     <!-- <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div> -->
                                     <a class="dropdown-item" href="../assets/php/fluxo.php?action=sectionDestroy">Log out</a>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </nav>
             <!-- End Navbar -->
             <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card">
                                 <div class="card-header card-header-info">
                                     <h4 class="card-title ">Lista de Endereços</h4>
                                     <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                 </div>
                                 <div class="card-body">
                                     <div class="table-responsive">
                                         <table id="listEndRuas" class="table">
                                             <thead class="">
                                                 <th class="text-center">ID</th>
                                                 <th class="text-center">Identificador</th>
                                                 <th class="text-center">Rua</th>
                                                 <th class="text-center">Lado</th>
                                                 <th class="text-center">Prateleira</th>
                                                 <th class="text-center">Andar</th>                                               
                                                 <th class="text-center">Observaçao</th>
                                                 <!-- <th>Limite</th> -->
                                                 <!-- <th class="text-center">Ações</th> -->
                                             </thead>
                                             <tbody id="listEnderecosRuas">
                                             </tbody>
                                         </table>
                                         <!-- <div class="copyright float-right">
                                            <nav aria-label="Page navigation example text-right">
                                                    <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                            </nav>
                                         </div>
                                         -->
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card">
                                 <div class="card-header card-header-danger">
                                     <h4 class="card-title ">Lista de Endereços</h4>
                                     <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                 </div>
                                 <div class="card-body">
                                     <div class="table-responsive">
                                         <table id="listEndArmarios" class="table">
                                             <thead class="">
                                                 <th class="text-center">ID</th>
                                                 <th class="text-center">Identificador</th>
                                                 <th class="text-center">Armario</th>
                                                 <th class="text-center">Lado</th>
                                                 <th class="text-center">Andar</th>
                                                 <th class="text-center">Observação</th>

                                                 <!-- <th>Limite</th> -->
                                                 <!-- <th class="text-center">Ações</th> -->
                                             </thead>
                                             <tbody id="listEnderecosArmarios">
                                             </tbody>
                                         </table>
                                         <!-- <div class="copyright float-right">
                                            <nav aria-label="Page navigation example text-right">
                                                    <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                            </nav>
                                         </div>  -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card">
                                 <div class="card-header card-header-warning">
                                     <h4 class="card-title ">Lista de Endereços</h4>
                                     <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                 </div>
                                 <div class="card-body">
                                     <div class="table-responsive">
                                         <table id="listEndGaveteiros" class="table">
                                             <thead class="">
                                                 <th class="text-center">ID</th>
                                                 <th class="text-center">Identificador</th>                                                
                                                 <th class="text-center">Gaveteiro</th>
                                                 <th class="text-center">Andar</th>
                                                 <th class="text-center">Container</th>
                                                 <th class="text-center">Observaçao</th>
                                                 <!-- <th class="text-center">Ações</th> -->
                                             </thead>
                                             <tbody id="listEnderecosGaveteiros">
                                             </tbody>
                                         </table>
                                         <!-- <div class="copyright float-right">
                                            <nav aria-label="Page navigation example text-right">
                                                    <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                            </nav>
                                         </div>                                     -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
             <!-- <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card">
                                 <div class="card-header card-header-danger">
                                     <h4 class="card-title ">Lista de Registros - Entrada</h4>
                                 </div>
                                 <div class="card-body">
                                     <div class="table-responsive">
                                         <table class="table">
                                             <thead class="">
                                                 <th>ID</th>
                                                 <th>Área</th>
                                                 <th class="text-center">Itens</th>
                                                 <th>Data</th>
                                                 <th>Observacao</th>
                                                 <th class="text-center">Ações</th>
                                             </thead>
                                             <tbody id="listRegistrosEntrada">
                                             </tbody>
                                         </table>
                                         <div class="copyright float-right">
                                            <nav aria-label="Page navigation example text-right">
                                                    <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                    </ul>
                                            </nav>
                                        </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div> -->
             <footer class="footer">
                 <div class="container-fluid">
                     <!-- <nav class="float-left">
                         <ul>
                             <li>
                                 <a href="https://www.creative-tim.com">Creative Tim/a>
                             </li>
                             <li>
                                 <a href="https://creative-tim.com/presentation">About Us</a>
                             </li>
                             <li>
                                 <a href="http://blog.creative-tim.com">Blog</a>
                             </li>
                             <li>
                                 <a href="https://www.creative-tim.com/license">Licenses</a>
                             </li>
                         </ul>
                     </nav> -->
                     <div class="copyright float-right">
                         &copy; Jaguaribe -
                         <script>
                             document.write(new Date().getFullYear())
                         </script>
                         <!-- , made with <i class="material-icons">favorite</i> by
                         <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web. -->
                     </div>
                 </div>
             </footer>
         </div>
     </div>
    

    <!-- Modal - Edição de Endereços -->
    <div class="modal fade" id="editEndModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">        
                    <div class="container">
                        <div class="row">
                            <div class="col align-self-end">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    <i aria-hidden="true" class="material-icons">clear</i>
                                </button>                  
                            </div>
                        </div>
                    </div>
                    <h3 class="modal-title" id=""> Cadastro de Endereço </h3>
                    <div class="card card-body" id="">
                        <form class="form" method="" id="formCadEnd">
                            <div class="row justify-content-center">
                                <div class="col col-md-4">
                                    <label class="label-control">Área</label>

                                        <select id="inputType" class="form-control" name="inputType" required="true" onchange="showOptionForm()">
                                            <option selected>...</option>
                                            <option value="Ruas" >Ruas</option>
                                            <option value="Armarios">Armarios</option>
                                            <option value="Gaveteiros">Gaveteiros</option>
                                        </select>    

                                </div>                     
                            </div>
                            <div id="divCadEndRuas" style="display:none;margin-top:50px" > 
                                
                                <div class="row has-danger">

                                    <div class="col has-danger">
                                        <label for="">Rua</label>
                                        <input type="number" class="form-control" name="endRua" placeholder="" required="true">
                            
                                    </div>
                                    <div class="col">
                                        <label for="inputNM">Lado</label>
                                        <input type="text" class="form-control" name="endLado" placeholder="" required="true">
                                    </div>
                                    
                                </div> 

                                <div class="row has-danger" style="margin-top:30px">

                                    <div class="col has-danger">
                                        <label for="inputQT">Prateleira</label>
                                        <input type="number" class="form-control" name="endPrat" placeholder="" required="true">
                                    </div>
                                    <div class="col">
                                        <label for="inputNM">Andar</label>
                                        <input type="number" class="form-control" name="endAndar" placeholder="" required="true">
                                    </div>
                                    <!-- <div class="col has-danger">
                                        <label for="inputQT">QNT Máxima de Itens</label>
                                        <input type="number" class="form-control" name="endQntMx" placeholder="" required="true">
                                    </div>
                                    -->
                                </div>                     
                                
                                <!-- <div class="row has-danger" style="margin-top:30px">
                                    
                                    <div class="col">
                                        <label for="inputOBS">Observação</label>
                                        <input type="text" class="form-control" name="endObs" placeholder="" required="true">
                                    </div>
                                </div> -->
                                <!-- <div class="modal-footer justify-content-center">  
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <a class="btn btn-danger" data-toggle="collapse" href="#" aria-expanded="false" data-target="#collapseRuas" aria-controls="collapseRuas">Cancelar</a>
                                </div> -->
                            </div>


                            <div id="divCadEndArmarios" style="display:none;margin-top:50px"> 
                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputNM">Armario</label>
                                        <input type="number" class="form-control" name="endArm" placeholder="" required="true">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputQT">Lado</label>
                                        <input type="text" class="form-control" name="endLado" placeholder="" required="true">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputQT">Andar</label>
                                        <input type="number" class="form-control" name="endAndar" placeholder="" required="true">
                                    </div>
                                </div>
                                
                                <!-- <div class="row has-danger" style="margin-top:30px">
                                    <div class="col">
                                        <label for="inputOBS">Observação</label>
                                        <input type="text" class="form-control" name="" placeholder="" required="true">
                                    </div>
                                </div> -->
                                <!-- <div class="modal-footer justify-content-center">  
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <a class="btn btn-danger" data-toggle="collapse" href="#" aria-expanded="false" data-target="#collapseRuas" aria-controls="collapseRuas">Cancelar</a>
                                </div> -->
                            </div>


                            <div id="divCadEndGaveteiros" style="display:none;margin-top:50px"> 
                                <div class="row has-danger">
                                    
                                    <div class="col has-danger">
                                        <label for="inputQT">Gaveteiro</label>
                                        <input type="number" class="form-control" name="endGvt" placeholder="" required="true">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputQT">Andar</label>
                                        <input type="number" class="form-control" name="endAndar" placeholder="" required="true">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputQT">Container</label>
                                        <input type="number" class="form-control" name="endContainer" placeholder="" required="true">
                                    </div>
                                </div>
                                
                                
                                <!-- <div class="modal-footer justify-content-center">  
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <a class="btn btn-danger" data-toggle="collapse" href="#" aria-expanded="false" data-target="#collapseRuas" aria-controls="collapseRuas">Cancelar</a>
                                </div> -->

                            </div>
                            
                            <div id="divObs" style="display:none;margin-top:30px">
                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputOBS">Observação</label>
                                        <input type="text" class="form-control" name="endObs" placeholder="" required="true">
                                    </div>

                                    <div class="col has-danger">
                                        <label for="inputQT">QNT Máxima de Itens</label>
                                        <input type="number" class="form-control" name="endQntMx" placeholder="" required="true">
                                    </div>                                                                                     
                                </div>
                                <div class="row justify-content-center" style="margin-top:30px">  
                                    <button type="submit" class="btn btn-success">Salvar</button>
                                    <a class="btn btn-danger" data-toggle="collapse" href="#" aria-expanded="false" data-target="#collapseRuas" aria-controls="collapseRuas">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>   
            </div>
        </div>
     </div>
     <!-- Scripts REGISTROS -->
     <script src="../assets/js/enderecos.js"></script>
     <!--   Core JS Files   -->
     <script src="../assets/js/core/jquery.min.js"></script>
     <script src="../assets/js/core/popper.min.js"></script>
     <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
     <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
     <!-- Plugin for the momentJs  -->
     <script src="../assets/js/plugins/moment.min.js"></script>
     <!--  Plugin for Sweet Alert -->
     <script src="../assets/js/plugins/sweetalert2.js"></script>
     <!-- Forms Validations Plugin -->
     <script src="../assets/js/plugins/jquery.validate.min.js"></script>
     <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
     <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
     <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
     <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
     <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
     <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
     <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
     <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
     <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
     <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
     <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
     <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
     <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
     <script src="../assets/js/plugins/fullcalendar.min.js"></script>
     <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
     <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
     <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
     <script src="../assets/js/plugins/nouislider.min.js"></script>
     <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
     <!-- Library for adding dinamically elements -->
     <script src="../assets/js/plugins/arrive.min.js"></script>
     <!--  Google Maps Plugin    -->
     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
     <!-- Chartist JS -->
     <script src="../assets/js/plugins/chartist.min.js"></script>
     <!--  Notifications Plugin    -->
     <script src="../assets/js/plugins/bootstrap-notify.js"></script>
     <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
     <script src="../assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
     <!-- Material Dashboard DEMO methods, don't include it in your project! -->
     <script src="../assets/demo/demo.js"></script>
     <script>
         $(document).ready(function() {
            carregarListaEnd()

             $().ready(function() {
                 $sidebar = $('.sidebar');
 
                 $sidebar_img_container = $sidebar.find('.sidebar-background');
 
                 $full_page = $('.full-page');
 
                 $sidebar_responsive = $('body > .navbar-collapse');
 
                 window_width = $(window).width();
 
                 fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();
 
                 if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                     if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                         $('.fixed-plugin .dropdown').addClass('open');
                     }
 
                 }
 
                 $('.fixed-plugin a').click(function(event) {
                     // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                     if ($(this).hasClass('switch-trigger')) {
                         if (event.stopPropagation) {
                             event.stopPropagation();
                         } else if (window.event) {
                             window.event.cancelBubble = true;
                         }
                     }
                 });
 
                 $('.fixed-plugin .active-color span').click(function() {
                     $full_page_background = $('.full-page-background');
 
                     $(this).siblings().removeClass('active');
                     $(this).addClass('active');
 
                     var new_color = $(this).data('color');
 
                     if ($sidebar.length != 0) {
                         $sidebar.attr('data-color', new_color);
                     }
 
                     if ($full_page.length != 0) {
                         $full_page.attr('filter-color', new_color);
                     }
 
                     if ($sidebar_responsive.length != 0) {
                         $sidebar_responsive.attr('data-color', new_color);
                     }
                 });
 
                 $('.fixed-plugin .background-color .badge').click(function() {
                     $(this).siblings().removeClass('active');
                     $(this).addClass('active');
 
                     var new_color = $(this).data('background-color');
 
                     if ($sidebar.length != 0) {
                         $sidebar.attr('data-background-color', new_color);
                     }
                 });
 
                 $('.fixed-plugin .img-holder').click(function() {
                     $full_page_background = $('.full-page-background');
 
                     $(this).parent('li').siblings().removeClass('active');
                     $(this).parent('li').addClass('active');
 
                     var new_image = $(this).find("img").attr('src');
 
                     if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                         $sidebar_img_container.fadeOut('fast', function() {
                             $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                             $sidebar_img_container.fadeIn('fast');
                         });
                     }
 
                     if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                         var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
 
                         $full_page_background.fadeOut('fast', function() {
                             $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                             $full_page_background.fadeIn('fast');
                         });
                     }
 
                     if ($('.switch-sidebar-image input:checked').length == 0) {
                         var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                         var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
 
                         $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                         $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                     }
 
                     if ($sidebar_responsive.length != 0) {
                         $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                     }
                 });
 
                 $('.switch-sidebar-image input').change(function() {
                     $full_page_background = $('.full-page-background');
 
                     $input = $(this);
 
                     if ($input.is(':checked')) {
                         if ($sidebar_img_container.length != 0) {
                             $sidebar_img_container.fadeIn('fast');
                             $sidebar.attr('data-image', '#');
                         }
 
                         if ($full_page_background.length != 0) {
                             $full_page_background.fadeIn('fast');
                             $full_page.attr('data-image', '#');
                         }
 
                         background_image = true;
                     } else {
                         if ($sidebar_img_container.length != 0) {
                             $sidebar.removeAttr('data-image');
                             $sidebar_img_container.fadeOut('fast');
                         }
 
                         if ($full_page_background.length != 0) {
                             $full_page.removeAttr('data-image', '#');
                             $full_page_background.fadeOut('fast');
                         }
 
                         background_image = false;
                     }
                 });
 
                 $('.switch-sidebar-mini input').change(function() {
                     $body = $('body');
 
                     $input = $(this);
 
                     if (md.misc.sidebar_mini_active == true) {
                         $('body').removeClass('sidebar-mini');
                         md.misc.sidebar_mini_active = false;
 
                         $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
 
                     } else {
 
                         $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
 
                         setTimeout(function() {
                             $('body').addClass('sidebar-mini');
 
                             md.misc.sidebar_mini_active = true;
                         }, 300);
                     }
 
                     // we simulate the window Resize so the charts will get updated in realtime.
                     var simulateWindowResize = setInterval(function() {
                         window.dispatchEvent(new Event('resize'));
                     }, 180);
 
                     // we stop the simulation of Window Resize after the animations are completed
                     setTimeout(function() {
                         clearInterval(simulateWindowResize);
                     }, 1000);
 
                 });
             });
         });
     </script>
 </body>
 
 </html>