<?php
error_reporting(E_ALL ^ E_NOTICE);
$bool=false;
include("conectarBase.php");
if ($_POST[nameuser]=="") {
  $bool=true;
  //echo"<script>alert('Usted esta siendo redireccionado a la pagina principal'); window.location='../../login.php';</script>";
  redirect_to("../../index.php?variable=$bool");
}else {
  $insUsuario=mysqli_query($con,"
    INSERT INTO user (chatid,nameuser,userid)
    VALUES('0','$_POST[nameuser]','0')") or die ('ERROR INS-USER: '.mysqli_error($con));
  $id1="SELECT userid FROM user order by userid desc limit 1";
  $ejecutar = $con->query($id1);
  while ($id = $ejecutar->fetch_array()) {
    $id2=$id['userid'];
  }
    redirect_to("../../chat.php?variable2=$id2");
}
function redirect_to($location){
     header('Location:'.$location);
}
 ?>
