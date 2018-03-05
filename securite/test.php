<?php
include("caffine.php");
if(isset($_POST['message'])&& isset( $_POST['clea'])&& isset( $_POST['clea']))
    {
	     echo "le message clair est :".$_POST['message']."<html><br></html>"."le message chiffre : ";
         affine($_POST['message'],$_POST['clea'],$_POST['cleb']);
    }

?>
<html>
<style>/* General Styles */
html{
   background:url(http://phutora.com/img/friends3.jpg) no-repeat;
   background-size: cover;
   height:100%;
   background-color: #000;
}
* {
   box-sizing:border-box;
   -webkit-box-sizing:border-box;
   -moz-box-sizing:border-box;
   -webkit-font-smoothing:antialiased;
   -moz-font-smoothing:antialiased;
   -o-font-smoothing:antialiased;
   font-smoothing:antialiased;
   text-rendering:optimizeLegibility;
}
body {
   color: #C0C0C0;
   font-family: Arial, san-serif;
}
</html>