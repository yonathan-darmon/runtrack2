<?php
$hauteur= 5;
$largeur=10;
// commençons par le toit

for($i=$hauteur;$i<=$largeur;$i++){
    $espace=$largeur/2;
    while($espace >=0) {
        echo"&nbsp";
        $espace--;
    }
    
    
        for($k=$i;$k>$hauteur;$k--){
           
            echo "-";

    
}
    
    echo '<br/>';
    
    
}
?> 