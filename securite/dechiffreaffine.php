<?php
//la fonction decrypeaffine va chercher 
Function posalpha($lettre)
{
       
       $alpha=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
       $posalpha=0;
    for($i=0;$i<count($alpha);$i++)
    {
     $tempo=$alpha[$i];
     if ($lettre==$tempo)
         {
             $posalpha=$i;
         }
	/*else 
	     {
			 echo "il n'existe pas dans l'alphabet";
		 }*/

    }
	return $posalpha;

}
Function Posnum($position)
    {

         $alpha=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
         $posnum=$alpha[$position];// A=0
         return $posnum;
    }
function decryptageaffine($msg,$clea,$cleb)
{
	$e=0;
$InvA=InvA($clea);
for($i=0;$i<strlen($msg);$i++)
{ 
     $tmp=$msg{$i};
     $x=posalpha($tmp);
     $x=($InvA*($x-$cleb))%26;
     echo Posnum($x); 

}

}
// cette fonction retourne l'inverse de Clea obligatoire pour pouvoir decrypter
function InvA($clea)
{ $Inva=0;
	
for($i=0;$i<26;$i++)
{
if((($clea*$i)%26)==1)
$Inva=$i;
}
return $Inva;

}
/*if (isset($_POST['message'])&&isset( $_POST['coeffa'])&&isset( $_POST['coeffb']))
{
echo "le message crypté est:".$_POST['message1']."<html><br></html>"."le message clair est : ";
decryptageaffine($_POST['message'],$_POST['coeffa'],$_POST['coeffb']);
}
//decryptageaffine("lhdt",17,3);*/
?>