 <?php
   error_reporting(E_ALL ^ E_NOTICE);
   $variable=$_GET['variable'];
   if ($variable) {
     $variable=false;
     echo"<script>alert('debe de poner un nombre')</script>";

   }
  ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=devise-width,user-scalable=no,initial-scale=1.0,maximumscale=1.0">
    <link rel="stylesheet" href="libreria/css/bootstrap.min.css">
    <link rel="stylesheet" href="libreria/css/loginChat.css">
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-5 col-md-offset-3">
          <div class="">
            <div class="tab-content" id="contenido">
              <div class="tab-pane active" id="login">
                <form class="form-login" type="name" name="frmRegistrase" method="post" action="libreria/baseDatos/registrar.php">
                  <h1 class="titulo col-md-offset-3">Chat live</h1>
                  <br>
                  <input class="form-control" type="text" name="nameuser" placeholder="Ingrese su usuario">
                  <br>
                  <input class="btn btn-lg btn-primary col-md-offset-3" type="submit" value="Guardar Usuario">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="libreria/js/jquery.min.js"></script>
    <script src="libreria/js/bootstrap.min.js"></script>
  </body>
</html>
