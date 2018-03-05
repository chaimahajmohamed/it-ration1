<?php
//la fonction crypterch va chercher la postion de la lettre a crypter dans l'alphabet,applique la formule de cryptage et retourne la lettre crypter
function cryptageaffine($msg,$clea,$cleb)
{
			
			 for($i=0;$i<strlen($msg);$i++)
			    {
				 $tmp=$msg{$i};
                 $x=posalpha($tmp);
                 $y=(($clea*$x)+$cleb)%26;
                 echo Posnum($y);
				 
		        }
				
			
}
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
	 else 
	     {
			 $i++;
		 }

    }
	return $posalpha;

}
Function Posnum($position)
    {

         $alpha=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
         $Posnum=$alpha[$position];// A=0
         return $Posnum;
    }
if (isset($_POST['message'])&&isset( $_POST['coeffa'])&&isset( $_POST['coeffb']))
{
	

echo "le message clair est :".$_POST['message']."<html><br></html>"."le message chiffre : ";
cryptageaffine($_POST['message'],$_POST['coeffa'],$_POST['coeffb']);
}
//echo cryptageaffine("code",17,3);


?>