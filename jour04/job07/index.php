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
    <input type="number" name="largeur" > <p>Largeur</p>
    <input type="number" name="hauteur" > <p>hauteur</p>
    <input type="submit" value="entrer">
</form>
<?php
for ($i=0;$i<=$_GET['hauteur']-1;$i++){
    $j=$_GET['hauteur'];
    while ($j<=$_GET['hauteur'] && $j>=0){
        echo
        $j--;
    }
    echo'/'.'<br/>';
}
for($j=0;$j<=$_GET['hauteur']-1; $j++) {
    echo '|';
    for ($i=0;$i<=$_GET['largeur']-1;$i++){
        if($j==$_GET['hauteur']-1){
        echo '_';
    }
    }
    for ($k=0;$k<$_GET['largeur']*2;$k++){
        if ($j<$_GET['hauteur']-1){

        echo '&nbsp';
    }
    }
    echo '|' . '<br/>';

}


?>
</body>
</html>