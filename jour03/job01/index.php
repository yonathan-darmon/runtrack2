<?php
$nbre = [200,204,173,98,171,404,459];//définitions du tableau
foreach ($nbre as $number){
    if($number%2==0){
        echo $number . ' est pair <br/>';
    }
    else{
        echo $number . ' est impair <br/>';
    }
}
?>