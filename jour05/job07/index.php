<?php
$str= $_GET["str"];

function longueur($str) {
    for($i=0; isset($str[$i]);$i++){
        if($str[$i]=== " "){
            return true;
        }
    }
    return true;
}

function gras ($str) {
    $alph =["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    for($i=0;isset($str[$i]);$i++){
       
        if($_GET['fonction']==='gras'){
           
            for($j=0;isset($alph[$j]);$j++){
                if ($str[$i]==$alph[$j])
                {
                    
                    if($i === 0 && longueur($str) === true){
                        echo"<b>";

                    }
                    elseif (longueur($str) === true && $str[$i-1] === " " && $i != 0){
                        echo "<b>";
                    }
                }
                else
                {
                    if (  $str[$i] === " " ){
                       
                        echo '</b>';
                    }  
                }
            }
          echo $str[$i];
        }
        
    }
   
}

function cesar ($str, $decalage=2){
    $min= ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
    $alph =["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    for($i=0;isset($str[$i]);$i++){
       if($_GET['fonction']=='cesar'){
                for($j=0;isset($min[$j]);$j++){
                    
                   if ($str[$i]==$min[$j] && isset($min[$j+$decalage])==true){
                       echo $min[$j + $decalage];
                      
                   }
                //    elseif($min[$j+$decalage]>="z"){
                //        $min[$j+$decalage]=$min[0];
                //    }
                }
               for($k=0;isset($alph[$k]);$k++){
                if ($str[$i]==$alph[$k] && isset($alph[$k+$decalage])==true){
                   echo $alph[$k + $decalage];
                    
                }
                // elseif(){
                //     $alph[$k + $decalage]=$alph[0];
                // }
               }
        if($str[$i]==" "){
            echo "&nbsp";
        }
               
       }
       
    }
}
gras($str);
cesar($str,2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <input type="text" name="str">
        <select name="fonction" >
            <option value="">--choisissez une option--</option>
            <option value="gras">Gras</option>
            <option value="cesar">Cesar</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <input type="submit" value="Envoyer">
    </form>
    
</body>
</html>