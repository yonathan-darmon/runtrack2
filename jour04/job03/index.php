<?php
if(isset($_POST)){
var_dump($_POST);
}
$i=0;
foreach($_POST as $value){
    if($value!=""){
     $i++;
    }
}
echo 'il y a '. $i . ' nombre d\'arguments';
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
    <form action="#" method="post">
        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>