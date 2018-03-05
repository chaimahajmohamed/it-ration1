<?php

//fonction de chiffrement 

function chiffrage_de_Vigenère($text){

//caractères reconnus par le code
$caract = array ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'Â', 'À', 'É', 'È', 'Ê', 'Ë', 'Ç', 'Î', 'Ï', 'Ù', 'Ô', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'à', 'â', 'é', 'è', 'ê', 'ç', 'ï', 'î', 'û', 'ô', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', ',', ' ', ';', ':', '?', '.', '!', '\'', '<', '>', '$', '£', '%', 'µ', '*', '+', '-');
//on melange les caractères
shuffle($caract);

//creation d'un tableau avec le text
$text_explode = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);

//creation de la clé de cryptage
$clé = array();
$nb_caracteres_clé = count($text_explode);
for($i=0; $i<=$nb_caracteres_clé; $i++) $clé[]= $caract[rand()%count($caract)];

//chiffrement du texte
$code = "";
for($i=0; $i<count($text_explode); $i++) $code = $code . $caract[(array_search($text_explode[$i], $caract)+array_search($clé[$i%count($clé)], $caract))%count($caract)];

//retour des données sous forme de tableau
$chiffrage = array( 'text' => $text, 'clé' => implode($clé), 'code' => $code, 'caract'=> implode($caract));
return $chiffrage;

}

//fonction de déchiffrement 

function dechiffrage_de_Vigenère($text, $clé, $caract){

//creation du tableau de caractères
$caract = preg_split('//', $caract, -1, PREG_SPLIT_NO_EMPTY);

//creation de la clé
$clé = preg_split('//', $clé, -1, PREG_SPLIT_NO_EMPTY);

//creation d'un tableau du text
$text_explode = preg_split('//', $text, -1, PREG_SPLIT_NO_EMPTY);

//dechiffrement du code
$code = "";
for($i=0; $i<count($text_explode); $i++){
$id_caract =  (array_search($text_explode[$i], $caract)-array_search($clé[$i%count($clé)], $caract))%count($caract);
$code = $code . $caract[(($id_caract < 0)?(count($caract)+$id_caract):$id_caract)];
}

//retour du text decodé
return $code;

}

//exemple 

$text = "osffbdwcjfdapsgywjsq";

$codage = chiffrage_de_Vigenère($text);

echo "Chiffrage d'un text : <br /><br /><br />

<strong>Text à chiffrer: </strong><br />
<textarea cols=\"100\" rows=\"5\">".$codage['text']."</textarea>
<br /><br />

<strong>Clé de codage: </strong><br />
<textarea cols=\"100\" rows=\"5\" readonly=\"readonly\">".$codage['clé']."</textarea><br /><br />
<strong>Code:</strong>;<br />
<textarea cols=\"100\" rows=\"5\" readonly=\"readonly\">".$codage['code']."</textarea><br /><br />

<strong>Tableau des caractères:</strong><br />
<textarea cols=\"100\" rows=\"5\" readonly=\"readonly\">".$codage['caract']."</textarea><br />
<br /><hr><br />";

$decodage = dechiffrage_de_Vigenère($codage['code'], $codage['clé'], $codage['caract']);

echo "Déchiffrage d'un text : <br /><br /><br />
<strong>Code:</strong>;<br />
<textarea cols=\"100\" rows=\"5\">".$codage['code']."</textarea><br /><br />
<strong>Clé de codage: </strong><br />
<textarea cols=\"100\" rows=\"5\">".$codage['clé']."</textarea><br /><br />
<strong>Tableau des caractères:</strong><br />
<textarea cols=\"100\" rows=\"5\">".$codage['caract']."</textarea><br /><br />

<strong>Texte déchiffrer: </strong><br />
<textarea cols=\"100\" rows=\"5\" readonly=\"readonly\">".$decodage."</textarea>";

?>