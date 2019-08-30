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

    require_once ("../assets/php/funcoes.php");

    $u = new Functions();

	// if (!isset($_SESSION["logado"]) || $_SESSION["logado"] != TRUE) {
	//     header("Location: Login.php");
	// }
	// else {
	//     echo "<center><h1>Seja bem-vindo usuario de id: ".$_SESSION["id"]."</h1></center>";
  // }

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
                        <li class="nav-item ">
                            <a class="nav-link" href="./dashboard.php">
                                <i class="material-icons">dashboard</i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="./estoque.php">
                                <i class="material-icons">store</i>
                                <p>Estoque</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="./registros.php">
                                <i class="material-icons">list</i>
                                <p>Registros</p>
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
                                <h3>WMS - Tuboarte</h3> </a>
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
                                        <a class="dropdown-item" href="#">Log out</a>
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
                                    <div class="card-header card-header-danger">
                                        <h4 class="card-title ">Lista de Itens - Ruas</h4>
                                        <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-default">
                                                    <th>ID</th>
                                                    <th>COD</th>
                                                    <th>Nome</th>
                                                    <th>Rua</th>
                                                    <th>Lado</th>
                                                    <th>Armario</th>
                                                    <th>Andar</th>
                                                    <th>Quantidade</th>
                                                    <th>Observação</th>
                                                    <th class="text-center">Ações</th>

                                                </thead>
                                                <tbody id="listItensRuas">

                                                    <!---------------------------------------------------------------------------------------------------------------------------------------------------->
                                                    <!------------------------------------------------- Listagem de Itens em Ruas ------------------------------------------------------------------------>
                                                    <!---------------------------------------------------------------------------------------------------------------------------------------------------->
                                                    <!-- <tr>
                                                     <td>1</td>
                                                     <td>Parafuso X</td>
                                                     <td>1</td>
                                                     <td>3</td>
                                                     <td>2</td>
                                                     <td>3</td>
                                                     <td class="td-actions text-center">
                                                         <button type="button" rel="tooltip" class="btn btn-info">
                                                            <i class="material-icons">person</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal">
                                                            <i class="material-icons">add</i>
                                                        </button>
                                                        <button type="button" rel="tooltip" class="btn btn-danger" data-toggle="modal" data-target="#saidaModal">
                                                            <i class="material-icons">remove</i>
                                                        </button>
                                                    </td>

                                                 </tr> -->
                                                </tbody>
                                            </table>
                                            <div class="copyright float-right">
                                                <nav aria-label="Page navigation example text-right ">
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
                </div>
                <!---------------------------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------- Fim da Listagem de Itens em Ruas------------------------------------------------------------------>
                <!---------------------------------------------------------------------------------------------------------------------------------------------------->

                <!---------------------------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------- Listagem de Itens em Armarios -------------------------------------------------------------------->
                <!---------------------------------------------------------------------------------------------------------------------------------------------------->

                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-danger">
                                        <h4 class="card-title ">Lista de Itens - Armarios</h4>
                                        <!-- <p class="card-category"> Here is a subtitle for this table</p> -->
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class=" text-default">
                                                    <th>ID</th>
                                                    <th>Nome</th>
                                                    <th>Armario</th>
                                                    <th>Andar</th>
                                                    <th>Quantidade</th>
                                                    <th>Observação</th>
                                                    <th class="text-center">Ações</th>

                                                </thead>
                                                <tbody>

                                                    <?php

                                                      $allData = $u -> returnItensArmarios();
                                                      // var_dump($allData);
                                                      foreach ($allData as $data) {
                                                        ?>

                                                        <tr>
                                                            <td>
                                                                <?= $data['id']?>
                                                            </td>
                                                            <td>
                                                                <?= $data['nome']?>
                                                            </td>
                                                            <td>
                                                                <?= $data['n_armario']?>
                                                            </td>
                                                            <td>
                                                                <?= $data['n_andar']?>
                                                            </td>
                                                            <td>
                                                                <?= $data['quantidade']?>
                                                            </td>
                                                            <td>
                                                                <?= $data['observacao']?>
                                                            </td>

                                                            <td class='td-actions text-center'>

                                                                <button type='button' rel='tooltip' class='btn btn-success' data-toggle='modal' data-target='#entradaModal'>
                                                                    <i class='material-icons'>add</i>
                                                                </button>
                                                                <button type='button' rel='tooltip' class='btn btn-danger' data-toggle='modal' data-target='#saidaModal'>
                                                                    <i class='material-icons'>remove</i>
                                                                </button>
                                                                <button type='button' rel='tooltip' class='btn btn-warning' data-toggle='modal' data-target=''>
                                                                    <i class='material-icons'>edit</i>
                                                                </button>
                                                            </td>

                                                        </tr>
                                                        <?php
                                                      }
                                                    ?>

                                                            <!-- <tr>
                                                        <td>1</td>
                                                        <td>Parafuso X</td>
                                                        <td>1</td>
                                                        <td>3</td>
                                                        <td>2</td>
                                                        <td>3</td>
                                                        <td class="td-actions text-center">
                                                            <button type="button" rel="tooltip" class="btn btn-info">
                                                           <i class="material-icons">person</i>
                                                       </button>
                                                            <button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal">
                                                                <i class="material-icons">add</i>
                                                            </button>
                                                            <button type="button" rel="tooltip" class="btn btn-danger" data-toggle="modal" data-target="#saidaModal">
                                                                <i class="material-icons">remove</i>
                                                            </button>
                                                        </td>

                                                    </tr> -->
                                                </tbody>
                                            </table>
                                            <div class="copyright float-right">
                                                <nav aria-label="Page navigation example text-right ">
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
                </div>
                <!---------------------------------------------------------------------------------------------------------------------------------------------------->
                <!------------------------------------------------- Fim da Listagem de Itens em Armarios -------------------------------------------------------------------->
                <!---------------------------------------------------------------------------------------------------------------------------------------------------->

                <footer class="footer">
                    <div class="container-fluid">
                        <!-- <nav class="float-left">
             <ul>
               <li>
                 <a href="https://www.creative-tim.com">
                   Creative Tim
                 </a>
               </li>
               <li>
                 <a href="https://creative-tim.com/presentation">
                   About Us
                 </a>
               </li>
               <li>
                 <a href="http://blog.creative-tim.com">
                   Blog
                 </a>
               </li>
               <li>
                 <a href="https://www.creative-tim.com/license">
                   Licenses
                 </a>
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

        <!---------------------------------------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------- Modais das Ordens de Saida, Entrada e Edição ----------------------------------------------------->
        <!--------------------------------------------------------------------- Ruas ------------------------------------------------------------------------->
        <!---------------------------------------------------------------------------------------------------------------------------------------------------->

        <!-- Modal - Ordem de Saída - Ruas -->
        <div class="modal fade in" id="saidaModal" tabindex="-1" role="dialog" aria-labelledby="saidaModal">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-header">
                            <h3 class="modal-title text-center" id="myModalLabel"> Controle de Saida </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i aria-hidden="true" class="material-icons">clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form" method="" action="">

                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputOS">Ordem de Solicitação</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputOP">Ordem de Permissão</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputCP">Cod Produto</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputNM">Observação</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputDT">Data</label>
                                        <input type="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputQT">Quantidade</label>
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-success">Executar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal - Entrada de Produtos - Ruas-->
        <div class="modal fade in" id="entradaModal" tabindex="-1" role="dialog" aria-labelledby="entradaModal">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-header">
                            <h3 class="modal-title text-center" id="myModalLabel"> Controle de Entrada </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i aria-hidden="true" class="material-icons">clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form class="form" method="" action="">

                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputCP">Cod Produto</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputNM">Observação</label>
                                        <input type="text" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputDT">Data</label>
                                        <input type="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputQT">Quantidade</label>
                                        <input type="number" class="form-control" placeholder="">
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-success">Executar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal - Edição de Produtos - Ruas -->
        <div class="modal fade in" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModal" enctype="multipart/form-data">
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="card card-signup card-plain">
                        <div class="modal-header">
                            <h3 class="modal-title text-center" id=""> Editar Produto </h3>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <i aria-hidden="true" class="material-icons">clear</i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formAltIndexRua" class="form" method="POST" id="RegisterValidation" action="">

                                <div class="row has-danger">
                                    <!-- <div class="col-lg-6">

                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">

                                                    <option selected>...</option>
                                                    <option selected disabled>Rua</option>
                                                    <option>Armario</option>

                                                </select>
                                    <input type="text" class="form-control" placeholder="" value="Ruas" disabled>

                                </div> -->
                                    <div class="col">
                                        <label for="inputID">ID</label>
                                        <input type="" class="form-control" name="idPro" id="idPro" placeholder="" required="true" readonly>
                                        <!-- readonly -->
                                    </div>
                                    <div class="col">
                                        <label for="inputID">COD</label>
                                        <input class="form-control" name="codPro" id="codPro" placeholder="" required="true" readonly>
                                    </div>
                                </div>

                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputNM">Nome</label>
                                        <input type="" class="form-control" name="editNome" id="editNome" placeholder="" required="true">
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputQT">Quantidade</label>
                                        <input type="" class="form-control" name="editQuantidade" id="editQuantidade" placeholder="" required="true" disabled>
                                    </div>
                                </div>
                                <div class="row has-danger">
                                    <div class="col">
                                        <label class="label-control">Numero da Rua</label>
                                        <select type="" class="form-control" name="editRua" id="editRua" required="true">

                                            <option type="" value="1">1</option>
                                            <option type="" value="2">2</option>
                                            <option type="" value="3">3</option>
                                            <option type="" value="4">4</option>

                                        </select>
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputLD">Lado</label>
                                        <select type="" class="form-control" name="editLado" id="editLado" required="true">

                                            <option type="" value="A">A</option>
                                            <option type="" value="B" selected>B</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row has-danger">
                                    <div class="col">
                                        <label class="label-control">Armario</label>
                                        <select type="" class="form-control" name="editArmario" id="editArmario" required="true">

                                            <option type="" value="1">1</option>
                                            <option type="" value="2">2</option>
                                            <option type="" value="3">3</option>
                                            <option type="" value="4">4</option>
                                            <option type="" value="5">5</option>

                                        </select>
                                    </div>
                                    <div class="col has-danger">
                                        <label for="inputAD">Andar</label>
                                        <select type="" class="select form-control" name="editAndar" id="editAndar" required="true">

                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row has-danger">
                                    <div class="col">
                                        <label for="inputOBS">Observação</label>
                                        <input type="" class="form-control" name="editObservacao" id="editObservacao" placeholder="" required="true">
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-center">

                                    <button type="submit" class="btn btn-success">Executar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                    <!-- <a class="btn btn-danger" data-toggle="collapse" href="#collapseRuas" aria-expanded="false" data-target="#collapseRuas" aria-controls="collapseRuas">Cancelar</a> -->

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---------------------------------------------------------------------------------------------------------------------------------------------------->
        <!------------------------------------------------- Modais das Ordens de Saida, Entrada e Edição ----------------------------------------------------->
        <!---------------------------------------------------------------- Ruas ------------------------------------------------------------------------------>
        <!---------------------------------------------------------------------------------------------------------------------------------------------------->

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

        <!-- <script>

          $('body').on("click", ".editModalRuas", function() {

            console.log("$('#idPro')", $('#idPro'))
            console.log("$('#codPro')", $('#codPro'))
            console.log("$('#editNome')", $('#editNome'))
            console.log("$('#editRua')", $('#editRua'))
            console.log("$('#editLado')", $('#editLado'))
            console.log("$('#editArmario')", $('#editArmario'))
            console.log("$('#editAndar')", $('#editAndar'))
            console.log("$('#editQuantidade')", $('#editQuantidade'))
            console.log("$('#editObservacao')", $('#editObservacao'))

            $('#idPro').val($(this).parents('tr').find('td').eq(0).text());
            $('#codPro').val($(this).parents('tr').find('td').eq(1).text());
            $('#editNome').val($(this).parents('tr').find('td').eq(2).text());

            $('#editRua').val($(this).parents('tr').find('td').eq(3).text());            
            $('#editLado').val($(this).parents('tr').find('td').eq(4).text());
            $('#editArmario').val($(this).parents('tr').find('td').eq(5).text());
            $('#editAndar').val($(this).parents('tr').find('td').eq(6).text());

            $('#editQuantidade').val($(this).parents('tr').find('td').eq(7).text());
            $('#editObservacao').val($(this).parents('tr').find('td').eq(8).text());

          });

        </script> -->
        <script>
            $(document).ready(function() {
                carregarListaItensRuas()
            });
        </script>
        <script>
            function carregarListaItensRuas() {
                $('#listItensRuas').empty(); //Limpando a tabela
                $.ajax({
                    type: 'post', //Definimos o método HTTP usado
                    dataType: 'json', //Definimos o tipo de retorno
                    url: '../assets/php/jsonListRuas.php', //Definindo o arquivo onde serão buscados os dados
                    success: function(dados) {
                        console.log(dados);
                        for (var i = 0; dados.length > i; i++) {
                            //Adicionando registros retornados na tabela
                            $('#listItensRuas').append('<tr>' + '<td>' + dados[i].id + '</td>' +
                                '<td>' + dados[i].id + dados[i].n_rua + dados[i].lado + dados[i].n_armario + dados[i].n_andar + '</td>' +
                                '<td>' + dados[i].nome + '</td>' +
                                '<td>' + dados[i].n_rua + '</td>' +
                                '<td>' + dados[i].lado + '</td>' +
                                '<td>' + dados[i].n_armario + '</td>' +
                                '<td>' + dados[i].n_andar + '</td>' +
                                '<td>' + dados[i].quantidade + '</td>' +
                                '<td>' + dados[i].observacao + '</td>' +

                                '<td class="td-actions text-center">' +

                                '<button type="button" rel="tooltip" class="btn btn-success" data-toggle="modal" data-target="#entradaModal">' +
                                '<i class="material-icons">add</i>' +
                                '</button>' +

                                '<button type="button" rel="tooltip" class="btn btn-warning" data-toggle="modal" data-target="#saidaModal">' +
                                '<i class="material-icons">remove</i>' +
                                '</button>' +

                                '<button type="button" rel="tooltip" class="btn btn-info" data-toggle="modal" data-target="#editModal" data-whateverid =' + dados[i].id + " " +
                                'data-whatevercod =' + dados[i].id + dados[i].n_rua + dados[i].lado + dados[i].n_armario + dados[i].n_andar + " " +
                                'data-whatevernome =' + dados[i].nome + " " +
                                'data-whateverrua =' + dados[i].n_rua + " " +
                                'data-whateverlado =' + dados[i].lado + " " +
                                'data-whateverarmario =' + dados[i].n_armario + " " +
                                'data-whateverandar =' + dados[i].n_andar + " " +
                                'data-whateverquantidade =' + dados[i].quantidade + " " +
                                'data-whateverobservacao =' + dados[i].observacao + ">" +
                                '<i class="material-icons">edit</i>' +
                                '</button>' +

                                '<button type="button" rel="tooltip" class="btn btn-danger" onClick = "confirmDelIndexRua(' + dados[i].id + ')">' +
                                '<i class="material-icons">delete</i>' +
                                '</button>' +

                                '</td>' +

                                '</tr>');
                        }
                    }
                });
            }
        </script>

        <script type="text/javascript">
            $('#editModal').on('show.bs.modal', function(event) {

                // alert("In Function" );

                var button = $(event.relatedTarget) // Button that triggered the modal         
                var id = button.data('whateverid') // Extract info from data-* attributes
                var cod = button.data('whatevercod')
                var nome = button.data('whatevernome')
                var rua = button.data('whateverrua')
                var lado = button.data('whateverlado')
                var armario = button.data('whateverarmario')
                var andar = button.data('whateverandar')
                var quantidade = button.data('whateverquantidade')
                var observacao = button.data('whateverobservacao')

                console.log(button)

                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                    // modal.find('.modal-title').text('ID ' + recipient)
                modal.find('#idPro').val(id)
                modal.find('#codPro').val(cod)

                modal.find('#editNome').val(nome)
                modal.find('#editRua').val(rua)
                modal.find('#editLado').val(lado)
                modal.find('#editArmario').val(armario)
                modal.find('#editAndar').val(andar)
                modal.find('#editQuantidade').val(quantidade)
                modal.find('#editObservacao').val(observacao)

            })
        </script>
        <script language="Javascript">
            function sucessAltIndexRua() {
                Swal.fire({
                position: 'center',
                type: 'success',
                title: 'Registro Alterado com Sucesso!',
                showConfirmButton: false,
                timer: 1500
                })

            }
        </script>
        <script language="Javascript">

            function confirmDelIndexRua(id) {
                // var resposta = confirm("Deseja remover esse registro?");

                // if (resposta == true) {
                //     window.location.href = "../assets/php/fluxo.php?action=delIndexRua&id="+id;
                // }
                Swal.fire({
                    title: 'Você tem certeza??',
                    text: 'Você não poderá recuperar este registro!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sim, tenho certeza!',
                    cancelButtonText: 'Não, mante-lo'
                }).then((result) => {
                    if (result.value) {
                        Swal.fire(
                            'Deletado!',
                            'O registro foi deletado com sucesso.',
                            'success'
                        )
                        setTimeout(function() {
                            window.location.href = "../assets/php/fluxo.php?action=delIndexRua&id=" + id;
                        }, 1000);

                        // For more information about handling dismissals please visit
                        // https://sweetalert2.github.io/#handling-dismissals
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        Swal.fire(
                            'Cancelado',
                            'O registro foi mantido :)',
                            'error'
                        )
                    }
                })
            }
        </script>

        <script>
            const formLogin = document.getElementById("formAltIndexRua")

            // console.log(formDataLogin.get("editNome"));

            // formDataLogin.append("name","Jonas");
            // console.log(formDataLogin.get("name"));

            formLogin.addEventListener("submit", function(e) {
                e.preventDefault();

                const formDataLogin = new FormData(this);

                fetch('../assets/php/fluxo.php?action=altIndexItemRua', {
                    method: 'POST',
                    body: formDataLogin
                })
                carregarListaItensRuas();
                sucessAltIndexRua();

                
            });
        </script>
        <script>
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
                // });
            });
        </script>
    </body>

    </html>