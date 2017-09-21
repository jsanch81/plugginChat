<?php
$servidor="localhost";
$usuario="jsanch";
$clave="9708";
$base="chat";
$con=mysqli_connect($servidor,$usuario,$clave) or die ('ERROR AL CONECTAR');
mysqli_select_db($con,$base);
function formatearFecha($fecha){
  return date('g:i a', strtotime($fecha));
}
 ?>
