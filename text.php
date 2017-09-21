<?php
include("libreria/baseDatos/conectarBase.php");
  $consulta = "SELECT * FROM chat.chat INNER JOIN chat.user ON chat.chat.userid=chat.user.userid ORDER BY chat.chatid";
  $ejecutar = $con->query($consulta);
  while ($fila = $ejecutar->fetch_array()):
 ?>
<div id="datos-chat">
  <br>
  <span style="color: #1c62c4"><?php echo $fila['nameuser']; ?>:</span>
  <span style=""><?php echo $fila['chatmensaje']; ?></span>
  <span style="float: right;" style="color: #848484"><?php echo formatearFecha($fila['fecha']); ?></span>
</div>
<?php endwhile; ?>
