<?php
function cryptageCesar ($msg,$cle)
{
	$msg=strtoupper($msg);
	//$alpha=strlen($_POST['alpha']);
	//$a=$_POST['alpha'];
$res ='';
//echo "l'alphabet est :".$a."<br>";
//echo "la longueur de l'alphabet est : ".$alpha."<br>";
//echo "le message clair est : " .$msg." <br>"."la clé est : ".$cle."<br>"."le message crypté est :";
	/*$co=ord($a[1]);
	$c=ord($a[$alpha]);*/
for($i=0;$i<strlen($msg);$i++)
{
   $code_ascii =ord($msg[$i]);
   if ($code_ascii==32)
   $res.=" ";
   if ($code_ascii+$cle>=65 && $code_ascii+$cle<=90)
   $res.=chr($code_ascii+$cle);
   else
   $res.=chr($code_ascii-26+$cle);
}
return $res;
}
/*function decryptageCesar ($msg,$cle)
{
	$msg=strtoupper($msg);	
$res ='';
for($i=0;$i<strlen($msg);$i++)
{
   $code_ascii =ord($msg[$i]);
   if ($code_ascii==32)
   $res.=" ";
   if ($code_ascii+$cle>=65 && $code_ascii+$cle<=90)
   $res.=chr($code_ascii-$cle);
   else
   $res.=chr($code_ascii+26-$cle);
}
return $res;
}*/

?>