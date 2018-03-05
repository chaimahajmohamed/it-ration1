<?php
/*include "functionvigener.php";
if(isset($_POST['message'])&& isset( $_POST['cle']))
{$text=$_POST['message'];
$cle=$_POST['cle'];
$code=vigenere_crypt($_POST['message'],$_POST['cle']);
echo $text." devient ".$code;
}*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <meta charset="utf-8">
     <style type="text/css">
     h2 {color:#27bec4 ;font-weight: bold; font-size:40px;
    }  
    .btn btn-link{
    }
     </style>
    
 </head>
<body>

<div class="container">
  <h2>Chiffre de vigenère</h2>
  <form action="functionvigener.php" method="POST">
    <div class="form-group">
      <label for="message">Message:</label>
   
      <input type="text" class="form-control" id="message"  name="message" placeholder="Entrer le message clair">
    </div>
    
    <div class="form-group">
      <label for="clé">Clé:</label>
	  <br>
      <input type="text" class="form-control" id="cle" name="cle" placeholder="Entrer la  clé"><br>
	  <br>
	  <label for="decalage">Décalage:</label>
	  <br>
      <input type="text" class="form-control" id="decalage" name="cle" placeholder="Entrer la  décalage"><br>
     
<br>
    <button type="submit" class="btn btn-default">Crypter</button>
    <button class="btn btn-defaultt"><a href="decrypt_vigenere.php">Décrypter</a></button>
    <button type="reset" class="btn btn-default">Supprimer</button><br><br>
    <label for="msg2">Message crypté:</label>
     <input type="text" class="form-control" id="msg2" name="msg2" placeholder="Message crypté">

    </div>
    
    
  </form>
  <button type="button" class="btn btn-link"><a href="index.html">Retour</button>
</div>


</body> 
</html>