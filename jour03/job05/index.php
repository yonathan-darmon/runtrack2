<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    'voyelles'=>['a', 'A','e', 'E','i', 'I','o','O','u','U','y','Y'],
    'consonnes'=>['b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z', 'B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z']
];
$comptvoy=0;
$comptcon=0;
for($i=0;isset($str[$i]);$i++){   
    foreach($dic['consonnes'] as $value){
        if($value == $str[$i]){
            $comptcon++;         
        }
        
    }
    foreach($dic['voyelles'] as $value){
        if ($value == $str[$i]){
            $comptvoy++;
        }
    }
}


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
    <header></header>
    <main>
        <table>
            <thead>
                <tr>
                    <th>Consonnes</th>
                    <th>voyelles</th>
                </tr>
            </thead>
            <tbody>
                    <td>
                        <?php
                            echo $comptcon;
                        ?> 
                    </td>
                    <td><?php 
                            echo $comptvoy;
                        ?>
                    </td>
            </tbody>
        </table>
    </main>
    <footer></footer>
    
</body>
</html>