<?php
$str="I'm sorry Dave I'm afraid I can't do that";
$voy=['a', 'A','e', 'E','i', 'I','o','O','u','U','y','Y'];
for ($i=0;isset($str[$i]);$i++){
   foreach($voy as $value){
    if ($str[$i]==$value){
        echo $str[$i];
    }
   }
    
    
}
?>