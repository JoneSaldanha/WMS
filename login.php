<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/ta.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>WMS - Tuboarte</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
         #vermelho:hover {background-color: #f44336;}
    </style>

</head>
  <body class="login-img-body">
      <div class="container">
      <form  class="login-form" method="post" action="valida.php" style="margin-top: 90px;width: 350px">        
        <div class="login-wrap">
            <img src="assets/img/logo.png" alt="" class="img-responsive" width="310px">
            <br><br>
            <div class="form-group label-floating has-danger">
                  <label  style="color: black;font-size: 16px;font-weight: bold;">Usuario</label>
                  <input  class="form-control" style='color: black' name="usuario" type="text" value='' autofocus>
              
              <br>
                  <label style="color: black;font-size: 16px;font-weight: bold;">Senha</label>
                  <input name='senha' type="password" class="form-control">
              <br>
            </div>
            <input type="submit"  class="btn btn-lg btn-danger btn-block" value="Entrar" />
        </div>
      </form>
    </div>
  </body>
  </html>