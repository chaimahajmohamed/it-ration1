<?php
include "functionvigener.php";
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
if(isset($_POST['message'])&& isset( $_POST['cle']))
{
$text=$_POST['message'];
//$decalage=$_POST['decalage'];
$cle=$_POST['cle'];

echo  "<body><div class='container fluit'> <p class='bg-info'> <b>le message clair est : " .$text." devient ".vigenere_crypt($text,$cle)."</div>";

}
echo "</body></html>";
?>