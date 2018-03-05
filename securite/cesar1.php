<?php
include("cesar.php");
echo "<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
     <meta charset='utf-8'> </head><body>";

echo"<div class='container'><div class='form-group'>";
if(isset($_POST['message'])&& isset( $_POST['cle']))
{
	$msg=$_POST['message'];
	$cle=$_POST['cle'];
//echo $msg." devient ".cryptagePro($msg,$n);
	echo"</div>";

echo"<form method='POST' action='dcesar.php'> ";
echo"<div class='form-group'>
      <label for='cle'>Clé:</label>
      
      <input type='text' readonly='readonly' class='form-control' id='cle'   name='cle' value=".$cle.">
  </div>";
  echo"<div class='form-group'>
      <label for='messageclair'>Message clair:</label>";
echo "<input type='text' readonly='readonly' class='form-control' id='messageclair'  name='messageclair' value=".$msg."><br>";
  echo"<div class='form-group'>
      <label for='messagecrypte'>Message crypté:</label>";
       echo "<input type='text' readonly='readonly' class='form-control' id='messagecrypte'  name='messagecrypte' value=".cryptageCesar($msg,$cle)."><br>";

  echo"</div><button type='submit' value='submit' class='btn btn-default'>Décrypter</button></form></div></div>";

 echo "</body></html>";
}



?>