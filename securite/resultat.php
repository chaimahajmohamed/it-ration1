<?php
include("chiffreaffine.php");
echo"<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
     <meta charset='utf-8'> </head><body>";

echo"<div class='container'><div class='form-group'>";
if(isset($_POST['message'])&& isset( $_POST['coeffa'])&& isset( $_POST['coeffb']))
{
	$msg=$_POST['message'];
	$clea=$_POST['coeffa'];
	$cleb=$_POST['coeffb'];
  //echo $msg." devient ".cryptageaffine($msg,$clea,$cleb);

	echo"</div>";

echo"<form method='POST' action='daffine.php'> ";
echo"<div class='form-group'>

      <label for='cle'>Clé:</label>
	  <br>
      <label for='Coefficient A'>Coefficient A:</label>
	  <br>
      <input type='text' readonly='readonly' class='form-control' id='coeffa'   name='coeffa' value=".$clea.">
	  <br>
	  <label for='Coefficient B'>Coefficient B:</label>
	  <br>
	  <input type='text' readonly='readonly' class='form-control' id='coeffb'   name='coeffb' value=".$cleb.">
  </div>";
  
echo"<div class='form-group'>
      <label for='messageclair'>Message clair:</label>";
       echo "<input type='text' readonly='readonly' class='form-control' id='messageclair'  name='messageclair' value=".$msg."><br></div>";
       echo"<div class='form-group'>
      <label for='message'>Message crypté:</label><br>";
       echo /*"<div class='alert alert-info'><strong>"*/"<input type='text' readonly='readonly' class='form-control' id='message1'  name='message1' value=";
       echo cryptageaffine($msg,$clea,$cleb); 
       echo "><br>";
  echo"</div><button type='submit' value='submit' class='btn btn-default'>Décrypter</button></form></div>";

 echo "</body></html>";
}
?>