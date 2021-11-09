<?php
session_start();
if (isset($_POST['reset'])){
    unset($_SESSION['prenom']);
}
if (!isset($_SESSION['prenom'])){
    $_SESSION['prenom']=[];

}
if(isset($_POST['envoyer'])){
    array_push($_SESSION['prenom'],$_POST['prenom']);
}
foreach($_SESSION['prenom'] as $value){
        echo $value.'<br/>';
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
    <form action="#" method="post">
        <input type="text" name="prenom">
        <input type="submit" value="envoyer" name='envoyer'>
        <input type="submit" value="reset" name="reset">
    </form>
</body>
</html>