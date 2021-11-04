<?php
$str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";//définition de la valeur
var_dump($str); //pour afficher plus simplement le nombre de caractere
//et ensuite la boucle pour afficher un caractere sur deux
for ($i=0; $i<78;$i=$i+2){
    echo $str[$i];
}
     
?>