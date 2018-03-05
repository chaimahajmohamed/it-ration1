<?php
function decryptageCesar ($msg,$cle)
{
	$msg=strtoupper($msg);	
$res ='';
for($i=0;$i<strlen($msg);$i++)
{
   $code_ascii =ord($msg[$i]);
    if ($code_ascii==32)
  		$res.=" ";	
 	if ($code_ascii>65 && $code_ascii<90)
    $res.=chr($code_ascii-$cle);
	elseif  ($code_ascii==65)
   	    $res.=chr($code_ascii-$cle+26) ;
    elseif ($code_ascii+$cle==90) 
    	$res.=chr($code_ascii-26-$cle); 
}
return $res;
}

?>

