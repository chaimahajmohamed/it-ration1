<?php
include("dechiffreaffine.php");
echo "<!DOCTYPE html>
<html >
<head>
  <title>decryptcesar</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
</head>";
if (isset($_POST['message1'])&&isset( $_POST['coeffa'])&&isset( $_POST['coeffb']))
{
	$msg=$_POST['message1'];
	$clea=$_POST['coeffa'];
	$cleb=$_POST['coeffb'];

echo "<body><div class='container'> <p class='bg-info'> <b>le message crypté est:".$msg."<html><br></html>"."le message clair est : ";
decryptageaffine($msg,$clea,$cleb)."</p></b></div>";
}
echo "</body></html>";
?>