<?php
function vigenere_crypt($texteOriginal,$cle)
{
    
    //liste des caractères autorisé
    $caracteres=array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    //longueur du tableau des caractères autorisé
    $longueurTabcaracteres=count($caracteres);
    //initialisation de la variable destinée à contenir le texte codé...
    $texteCode='';
    //initialisation de $j, compteur de la clé
    $j=0;
    //$longueur du texte original
    $longeurTexteOriginal=strlen($texteOriginal);
    //pour chaque lettre du texte original on effectue les calculs ci-dessous
    for($i=0;$i<$longeurTexteOriginal;$i++){
 //récupération des clés du tableau correspondant à la lettre courante du texte original et de la clé
        $key_texteOriginal=array_keys($caracteres,$texteOriginal[$i]);
        $key_cle=array_keys($caracteres,$cle[$j]);
        //Calcul de la correspondance
        $c=($key_texteOriginal[0]+$key_cle[0])%$longueurTabcaracteres;
        $texteCode.= $caracteres[$c];
        // si la clé est plus courte que le texte, on revient au début de la clé.
        $j=(($j<(strlen($cle)-1)) ? $j+1 : 0);
    }
    return $texteCode;
}
/*if(isset($_POST['message'])&& isset( $_POST['cle']))
{$text=$_POST['message'];
$cle=$_POST['cle'];
$code=vigenere_crypt($_POST['message'],$_POST['cle']);
echo $text." devient ".$code;
}*/

?>