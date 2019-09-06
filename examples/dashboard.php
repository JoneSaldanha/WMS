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
                     <li class="nav-item active  ">
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
                         <!-- <form class="navbar-form has-danger">
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
                                 <a class="nav-link" href="" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <i class="material-icons">person</i>
                                     <p class="d-lg-none d-md-block">
                                         Account
                                     </p>
                                 </a>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                     <!-- <a class="dropdown-item" href="#">Profile</a>
                                              <a class="dropdown-item" href="#">Settings</a> -->
                                     <!-- <div class="dropdown-divider"></div> -->
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
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <a data-toggle="modal" data-target="#cadItemModal">
                                 <div class="card card-stats">
                                     <div class="card-header card-header-success card-header-icon">
                                         <div class="card-icon">
                                             <i class="material-icons">add</i>
                                         </div>
                                         <p class="card-category">Controle</p>
                                         <h3 class="card-title">Cadastrar</h3>
                                     </div>
                                     <div class="card-footer">
                                         <div class="stats">
                                             <i class="material-icons">add</i>Cadastrar Itens no Estoque
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <a data-toggle="modal" data-target="#cadEndModal">
                                 <div class="card card-stats">
                                     <div class="card-header card-header-primary card-header-icon">
                                         <div class="card-icon">
                                             <i class="material-icons">add</i>
                                         </div>
                                         <p class="card-category">Controle</p>
                                         <h3 class="card-title">Endereços</h3>
                                     </div>
                                     <div class="card-footer">
                                         <div class="stats">
                                             <i class="material-icons">add</i>Cadastrar Endereços do Estoque
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>
 
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <a data-toggle="modal" data-target="#saidaModal">
                                 <div class="card card-stats">
                                     <div class="card-header card-header-danger card-header-icon">
                                         <div class="card-icon">
                                             <i class="material-icons">call_made</i>
                                         </div>
 
                                         <p class="card-category"> Controle </p>
                                         <h3 class="card-title"> Saida </h3>
                                     </div>
 
                                     <div class="card-footer">
                                         <div class="stats">
                                             <i class="material-icons">call_made</i> Lançar Saida de Materiais
                                             <!-- <a href="#pablo">Get More Space...</a> -->
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>
 
                         <div class="col-lg-3 col-md-6 col-sm-6">
                              <a data-toggle="modal" data-target="#entradaModal">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-success card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">call_received</i>
                                          </div>
                                          <p class="card-category">Controle</p>
                                          <h3 class="card-title">Entrada</h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">call_received</i> Lançar Entradas no Estoque
                                          </div>
                                      </div>
                                  </div>
                              </a>
                          </div>
 
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <a href="estoque.php">

                                 <div class="card card-stats">
                                     <div class="card-header card-header-danger card-header-icon">
                                         <div class="card-icon">
                                             <i class="material-icons">store</i>
                                         </div>
                                         <p class="card-category">Consulta</p>
                                         <h3 class="card-title">Estoque</h3>
                                     </div>
                                     <div class="card-footer">
                                         <div class="stats">
                                             <i class="material-icons">store</i> Listar Matériais
                                         </div>
                                     </div>
                                 </div>
 
                             </a>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6">
                             <a href="registros.php">
                                 <div class="card card-stats">
                                     <div class="card-header card-header-info card-header-icon">
                                         <div class="card-icon">
                                             <i class="material-icons">format_list_bulleted</i>
                                         </div>
                                         <p class="card-category">Consulta</p>
                                         <h3 class="card-title">Registros</h3>
                                     </div>
                                     <div class="card-footer">
                                         <div class="stats">
                                             <i class="material-icons">format_list_bulleted</i> Registros de Entrada e Saida
                                         </div>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
 
             <!-- <div class="row">
                              <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-success card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">content_copy</i>
                                          </div>
                                          <p class="card-category">Entrada e Saida</p>
                                          <h3 class="card-title">
                              <small>Controle</small>
                            </h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons text-danger">warning</i>
                                               <a href="#pablo">Get More Space...</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-warning card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">store</i>
                                          </div>
                                          <p class="card-category">Consulta</p>
                                          <h3 class="card-title">$34,245</h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">date_range</i> Last 24 Hours
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-danger card-header-icon">
                                          <div class="card-icon">
                                              <i class="material-icons">info_outline</i>
                                          </div>
                                          <p class="card-category">Fixed Issues</p>
                                          <h3 class="card-title">75</h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">local_offer</i> Tracked from Github
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-lg-3 col-md-6 col-sm-6">
                                  <div class="card card-stats">
                                      <div class="card-header card-header-info card-header-icon">
                                          <div class="card-icon">
                                              <i class="fa fa-twitter"></i>
                                          </div>
                                          <p class="card-category">Followers</p>
                                          <h3 class="card-title">+245</h3>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">update</i> Just Updated
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div> -->
             <!--<div class="row">
                              <div class="col-md-4">
                                  <div class="card card-chart">
                                      <div class="card-header card-header-success">
                                          <div class="ct-chart" id="dailySalesChart"></div>
                                      </div>
                                      <div class="card-body">
                                          <h4 class="card-title">Daily Sales</h4>
                                          <p class="card-category">
                                              <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">access_time</i> updated 4 minutes ago
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="card card-chart">
                                      <div class="card-header card-header-warning">
                                          <div class="ct-chart" id="websiteViewsChart"></div>
                                      </div>
                                      <div class="card-body">
                                          <h4 class="card-title">Email Subscriptions</h4>
                                          <p class="card-category">Last Campaign Performance</p>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">access_time</i> campaign sent 2 days ago
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="card card-chart">
                                      <div class="card-header card-header-danger">
                                          <div class="ct-chart" id="completedTasksChart"></div>
                                      </div>
                                      <div class="card-body">
                                          <h4 class="card-title">Completed Tasks</h4>
                                          <p class="card-category">Last Campaign Performance</p>
                                      </div>
                                      <div class="card-footer">
                                          <div class="stats">
                                              <i class="material-icons">access_time</i> campaign sent 2 days ago
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div> -->
             <!-- <div class="row">
                                  <div class="col-lg-6 col-md-12">
                                      <div class="card">
                                          <div class="card-header card-header-tabs card-header-primary">
                                              <div class="nav-tabs-navigation">
                                                  <div class="nav-tabs-wrapper">
                                                      <span class="nav-tabs-title">Tasks:</span>
                                                      <ul class="nav nav-tabs" data-tabs="tabs">
                                                          <li class="nav-item">
                                                              <a class="nav-link active" href="#profile" data-toggle="tab">
                                                                  <i class="material-icons">bug_report</i> Bugs
                                                                  <div class="ripple-container"></div>
                                                              </a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="#messages" data-toggle="tab">
                                                                  <i class="material-icons">code</i> Website
                                                                  <div class="ripple-container"></div>
                                                              </a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="#settings" data-toggle="tab">
                                                                  <i class="material-icons">cloud</i> Server
                                                                  <div class="ripple-container"></div>
                                                              </a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="card-body">
                                              <div class="tab-content">
                                                  <div class="tab-pane active" id="profile">
                                                      <table class="table">
                                                          <tbody>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="" checked>
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="">
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="">
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                                  </td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="" checked>
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                                  <div class="tab-pane" id="messages">
                                                      <table class="table">
                                                          <tbody>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="" checked>
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                                  </td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="">
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                                  <div class="tab-pane" id="settings">
                                                      <table class="table">
                                                          <tbody>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="">
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="" checked>
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                                                  </td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>
                                                                      <div class="form-check">
                                                                          <label class="form-check-label">
                                                                              <input class="form-check-input" type="checkbox" value="" checked>
                                                                              <span class="form-check-sign">
                                              <span class="check"></span>
                                                                              </span>
                                                                          </label>
                                                                      </div>
                                                                  </td>
                                                                  <td>Sign contract for "What are conference organizers afraid of?"</td>
                                                                  <td class="td-actions text-right">
                                                                      <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                                                          <i class="material-icons">edit</i>
                                                                      </button>
                                                                      <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                                          <i class="material-icons">close</i>
                                                                      </button>
                                                                  </td>
                                                              </tr>
                                                          </tbody>
                                                      </table>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div> -->
             <!-- <div class="col-lg-6 col-md-12">
                                      <div class="card">
                                          <div class="card-header card-header-warning">
                                              <h4 class="card-title">Employees Stats</h4>
                                              <p class="card-category">New employees on 15th September, 2016</p>
                                          </div>
                                          <div class="card-body table-responsive">
                                              <table class="table table-hover">
                                                  <thead class="text-warning">
                                                      <th>ID</th>
                                                      <th>Name</th>
                                                      <th>Salary</th>
                                                      <th>Country</th>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td>1</td>
                                                          <td>Dakota Rice</td>
                                                          <td>$36,738</td>
                                                          <td>Niger</td>
                                                      </tr>
                                                      <tr>
                                                          <td>2</td>
                                                          <td>Minerva Hooper</td>
                                                          <td>$23,789</td>
                                                          <td>Curaçao</td>
                                                      </tr>
                                                      <tr>
                                                          <td>3</td>
                                                          <td>Sage Rodriguez</td>
                                                          <td>$56,142</td>
                                                          <td>Netherlands</td>
                                                      </tr>
                                                      <tr>
                                                          <td>4</td>
                                                          <td>Philip Chaney</td>
                                                          <td>$38,735</td>
                                                          <td>Korea, South</td>
                                                      </tr>
                                                  </tbody>
                                              </table>
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
                     </div>
                 </div>
             </footer>
         </div>
     </div>
 
     <!-- Modal - Cadastro de Item -->
     <div class="modal fade in" id="cadItemModal" tabindex="-1" role="dialog" aria-labelledby="cadItemModal">
         <div class="modal-dialog  modal-lg" role="document">
             <div class="modal-content">
                 <div class="card card-signup card-plain">
                     <div class="modal-header">
                         <h3 class="modal-title text-center" id="myModalLabel"> Cadastro de Produto </h3>
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                             <i aria-hidden="true" class="material-icons">clear</i>
                         </button>
                     </div>
                     <div class="modal-body">
                         <p>
                             <div class="row justify-content-center">
                                 <a class="btn" data-toggle="collapse" href="#collapseRuas" aria-expanded="false" aria-controls="collapseRuas">
                                         Ruas
                                 </a>
                                 <a class="btn" data-toggle="collapse" href="#collapseArmarios"  aria-expanded="false" data-target="#collapseArmarios" aria-controls="collapseArmarios">
                                         Armarios
                                 </a>
                                 <!-- <a class="btn" data-toggle="collapse" href="#collapseEstantes"  aria-expanded="false" data-target="#collapseArmarios" aria-controls="collapseEstantes">
                                         Estantes
                                </a> -->
                             </div>
                         </p>
                         <div class="collapse" id="collapseRuas">
                             <div class="card card-body">
                                 <form class="form" method="POST" id="cadItemRua" >                                
                                     <div class="row has-danger">

                                     </div>
                                     <div class="row has-danger">
                                         <div class="col">
                                             <label for="inputNM">Nome</label>
                                             <input type="text" class="form-control" name="nomeR" placeholder="" required="true">
                                         </div>
                                         <div class="col has-danger">
                                             <label for="inputQT">Quantidade</label>
                                             <input type="number" class="form-control" name="quantidadeR" placeholder="" required="true">
                                         </div>
                                     </div>
                                     <div class="row has-danger">
                                         <div class="col">
                                             <label class="label-control">Numero da Rua</label>
                                             <select id="inputNR" class="form-control" name="n_rua" required="true">
 
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
 
                                             </select>
                                         </div>
                                         <div class="col has-danger">
                                             <label for="inputLD">Lado</label>
                                             <select id="inputLD" class="form-control" name="ladoR" required="true">
 
                                                 <option>A</option>
                                                 <option>B</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="row has-danger">
                                         <div class="col">
                                             <label class="label-control">Prateleira</label>
                                             <select id="inputNA" class="form-control" name="n_prateleiraR" required="true">
 
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
 
                                             </select>
                                         </div>
                                         <div class="col has-danger">
                                             <label for="inputAD">Andar</label>
                                             <select id="inputAd" class="form-control" name="n_andarR" required="true">
 
                                                 <option>1</option>
                                                 <option>2</option>
                                                 <option>3</option>
                                                 <option>4</option>
                                                 <option>5</option>
                                                 <option>6</option>
                                                 <option>7</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="row has-danger">
                                        <div class="col">
                                                <label for="inputOBS">Observação</label>
                                                <input type="text" class="form-control" name="observacaoR" placeholder="" required="true">
                                        </div>
                                     </div>
                                     <div class="modal-footer justify-content-center">
                                         
                                        <button type="submit" class="btn btn-success">Executar</button>
                                        <a class="btn btn-danger" data-toggle="collapse" href="#collapseRuas" aria-expanded="false" data-target="#collapseRuas" aria-controls="collapseRuas">Cancelar</a>

                                     </div>
                                 </form>
                             </div>
 
                         </div>

                         <div class="collapse" id="collapseArmarios">
                             <div class="card card-body">
                                 <form id="cadItemArmario">
                                    <div class="row has-danger">

                                    </div>
                                     <div class="row has-danger">
                                         <div class="col">
                                             <label for="inputCP" class="label-control">Nome</label>
                                             <input type="text" class="form-control" placeholder="" name="nome" required="true">
                                         </div>
                                         <div class="col has-danger">
                                                <label for="inputQT">Quantidade</label>
                                                <input type="number" class="form-control" name="quantidade" placeholder="" required="true">
                                            </div>
                                     </div>
                                     <div class="row has-danger">
                                         <div class="col">
                                                <label for="inputAR" class="label-control">Armario</label>
                                                <select id="inputAR" class="form-control" name="n_armario" required="true">
    
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
    
                                                </select>
    
                                            </div>
                                            <div class="col">
                                                    <label for="inputAN" class="label-control">Andar</label>
                                                    <select id="inputAN" class="form-control" name="n_andar" required="true">
        
                                                        <option selected>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
        
                                                    </select>
        
                                            </div>                                           
                                     </div>
                                     <div class="row has-danger">
                                            <div class="col">
                                                    <label for="inputOBS">Observação</label>
                                                    <input type="text" class="form-control" name="observacao" placeholder="" required="true">
                                            </div>
                                    </div>
                                     <div class="modal-footer justify-content-center">
                                        <button type="submit" class="btn btn-success">Executar</button>
                                        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button> -->
                                        <a class="btn btn-danger" data-toggle="collapse" href="#collapseArmarios" aria-expanded="false" data-target="#collapseArmarios" aria-controls="collapseArmarios">Cancelar</a>
           
                                    </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- Modal - Cadastro de Endereço -->
     <div class="modal fade" id="cadEndModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

     <!-- Modal - Ordem de Saída -->
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
                         <form id="ordSaida" class="form" method="" action="">

                             <div class="row has-danger">

                                <div class="col">
                                    <label class="label-control">Área</label>
                                    <select id="area" class="form-control" name="area" required="true">
                                        <option selected></option>
                                        <option>Ruas</option>
                                        <option>Armarios</option>

                                    </select>
                                </div>                                   
                                          
                             </div>
 
                             <div class="row has-danger">
                                 <div class="col">
                                     <label for="inputOS">Do Setor</label>
                                     <input name="do_setor" type="text" class="form-control" placeholder="" required="true">
                                 </div>
                                 <div class="col has-danger">
                                     <label for="inputOP">Ao Setor</label>
                                     <input name="ao_setor" type="text" class="form-control" placeholder="" required="true">                                                                                                  
                                 </div>
                             </div>

                             <div class="row has-danger">
                                 <div class="col">
                                     <label for="inputOS">Funcionario - Solicitante</label>
                                     <input name="solicitante" type="text" class="form-control" placeholder="" required="true">
                                 </div>
                                 <div class="col has-danger">
                                     <label for="inputOP">Funcionario - Solicitado</label>
                                     <input name="solicitado" type="text" class="form-control" placeholder="" required="true">                                                                                                  
                                 </div>
                             </div>

                            <div id="cloneNodeSaida" class="row has-danger">

                                <div id="cloneNodeCod" class="col-6">
                                    <label for="inputCP">Cod Produto</label>
                                    <input name="cod[]" type="text" class="form-control" placeholder="" required="true">
                                </div>

                                <div id="cloneNodeQuantidade" class="col has-danger">  
                                    <label for="inputQT">Quantidade</label>
                                    <input name="quantidade[]" type="number" class="form-control" placeholder="" required="true">                                             
                                </div>


                                <div id="divBut" class="row">
                                    <div class="col-auto mr-auto">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button id="addCloneNodeSaida" type="button" class="btn btn-fab btn-round btn-success" onclick="cloneNodeAddItemSaida()">
                                                        <i class="material-icons">add</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>                                           
                                    </div>
                                </div>

                                <div class="row justify-content-between">
                                    <div class="col-auto mr-auto">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button id="butRemoveCloneSaida" style="display:none" type="button" class="btn btn-fab btn-round btn-danger">
                                                        <i class="material-icons">remove</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>                                           
                                    </div>
                                </div>

                            </div>



                            <div id="cloneNodeTargetSaida">

                            </div>

                             <div class="row has-danger">
                                 <div class="col">
                                     <label for="inputDT">Data</label>
                                     <input name="data" id="dashDateSaida" type="date" class="form-control" placeholder="" required="true">
                                 </div>
                                 <div class="col has-danger">
                                     <label for="inputNM">Observação</label>
                                     <input name="observacao" type="text" class="form-control" placeholder="" required="true">
                                 </div>                
                             </div>

                             <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-success">Executar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                            </div>
 
                         </form>
                     </div>
 
                     
                 </div>
             </div>
         </div>
     </div>
     <!-- Modal - Ordem de Entrada -->
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
                         <form id="ordEntrada" class="form" method="" action="">

                             <div class="row has-danger">

                                <div class="col">
                                    <label class="label-control">Área</label>
                                    <select id="area" class="form-control" name="area" required="true">
                                        <option selected></option>
                                        <option>Ruas</option>
                                        <option>Armarios</option>

                                    </select>
                                </div>                                   
                                          
                             </div>

                            <div id="cloneNodeEntrada" class="row has-danger">

                                <div id="cloneNodeCod" class="col-6">
                                    <label for="inputCP">Cod Produto</label>
                                    <input name="cod[]" type="text" class="form-control" placeholder="" required="true">
                                </div>

                                <div id="cloneNodeQuantidade" class="col has-danger">  
                                    <label for="inputQT">Quantidade</label>
                                    <input name="quantidade[]" type="number" class="form-control" placeholder="" required="true">                                             
                                </div>


                                <div id="divBut" class="row">
                                    <div class="col-auto mr-auto">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button id="addCloneNodeRuas" type="button" class="btn btn-fab btn-round btn-success" onclick="cloneNodeAddItemEntrada()">
                                                        <i class="material-icons">add</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>                                           
                                    </div>
                                </div>

                                <div class="row justify-content-between">
                                    <div class="col-auto mr-auto">
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <button id="butRemoveCloneEntrada" style="display:none" type="button" class="btn btn-fab btn-round btn-danger">
                                                        <i class="material-icons">remove</i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>                                           
                                    </div>
                                </div>

                            </div>



                            <div id="cloneNodeTargetEntrada">

                            </div>

                             <div class="row has-danger">
                                 <div class="col">
                                     <label for="inputDT">Data</label>
                                     <input name="data" id="dashDateSaida" type="date" class="form-control" placeholder="" required="true">
                                 </div>
                                 <div class="col has-danger">
                                     <label for="inputNM">Observação</label>
                                     <input name="observacao" type="text" class="form-control" placeholder="" required="true">
                                 </div>                
                             </div>

                             <div class="modal-footer justify-content-center">
                                <button type="submit" class="btn btn-success">Executar</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                            </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Scripts DASHBOARD -->
     <script src="../assets/js/dashboard.js"></script>
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
            //  dateSet()
            // cloneNodeAddItem()
            


            setPreventFormDataRegistroSaida()
            setPreventFormDataRegistroEntrada()

            setPreventFormDataItemRua()
            setPreventFormDataItemArmario()

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
        <!-- <script>
         $(document).ready(function() {
             // Javascript method's body can be found in assets/js/demos.js
             setFormDataItemRua();
 
         });
     </script> -->
     <script>
         $(document).ready(function() {
             // Javascript method's body can be found in assets/js/demos.js
             md.initDashboardPageCharts();
 
         });
     </script>
     <script>
         $(document).ready(function() {
             // Javascript method's body can be found in assets/js/demos.js
             md.initDashboardPageCharts();
 
         });
     </script>
 </body>
 
 </html>