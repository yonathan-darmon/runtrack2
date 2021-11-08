<?php
  
function occurences($str, $char){
    $compt=0;
    for($i=0;isset($str[$i]);$i++){
         if($char==$str[$i]){
             $compt++;
            
    }
    
}
    return $compt; 
}
?>