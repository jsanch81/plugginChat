<?php
  error_reporting(E_ALL ^ E_NOTICE);
  include("libreria/baseDatos/conectarBase.php");
  $id=$_GET['variable2'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <meta name="viewport" content="width=devise-width,user-scalable=no,initial-scale=1.0,maximumscale=1.0">
    <link rel="stylesheet" href="libreria/css/bootstrap.min.css">
    <link rel="stylesheet" href="libreria/css/loginChat.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Shrikhand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
    <script src="js/infinite<a href="http://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a>.js"></script>
    <script type="text/javascript">
      function ajax() {
        var chatBox;
        var req = new XMLHttpRequest();
        chatBox = document.querySelector('#chat');
        req.onreadystatechange = function() {
          if (req.readyState == 4 && req.status == 200) {
            document.getElementById('chat').innerHTML =req.responseText;
            chatBox.scrollTop = chatBox.scrollHeight;
            //$("#chat").animate({ scrollTop: $('#chat')[0].scrollHeight},0);
          }
        }
        req.open('GET','text.php',true);
        req.send();
      }

      setInterval(function(){
        ajax();
      },1000);
    </script>
  </head>
  <body onload="ajax(); document.getElementById('mensaje').focus()">

    <div id="contenedor">
      <h1 class="titulo col-md-offset-4">Chat live</h1>
      <div id="caja-chat">
        <div class="infinite-list">
          <div id="chat" style="width:400px; height:400px; overflow-y: auto; z-index:1; position:fixed;">

          </div>
        </div>
      </div>
      <br>
      <form class="form-chat" method="post" autocomplete="off">
        <input type="text" name="mensaje" id="mensaje" placeholder="Ingrese su mensaje" rows="3" cols="44" maxlength="244">
        <input style="float: right;" id="btn-enviar" type="submit" name="enviar" value="         ">
      </form>
      <?php
        if (isset($_POST['enviar'])) {
          $mensaje = $_POST['mensaje'];
          $cont=0;
          $cont2=0;
          $cont3=0;
          $salida="";
          $length=strlen($mensaje);
          while ($cont<$length) {
            if ($mensaje[$cont]==" ") {
              $cont2=0;
            }
            if ($cont2<50) {
              $salida=$salida.$mensaje[$cont];
              $cont3=$cont;
            }else {
              $salida=$salida."\r\n";
              $cont2=0;
            }
            $cont2=$cont2+1;
            $cont=$cont+1;
          }
          if ($mensaje!=""&&$mensaje!="\r\n") {
            $consulta = "INSERT INTO chat.chat (chatmensaje,userid) VALUES ('$salida','$id')";
            $ejecutar = $con->query($consulta);
            $mensaje=$_POST[''];
          }
          if ($ejecutar) {
            echo "<embed loop='false' hidden='true' autoplay='true'>";
          }
        }
       ?>
    </div>
    <script src="libreria/js/jquery.min.js"></script>
    <script src="libreria/js/bootstrap.min.js"></script>
  </body>
</html>
