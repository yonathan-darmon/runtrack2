<?php
if (isset($_POST['deco'])){
    unset($_COOKIE['prenom']);
}
if(isset($_POST['connexion'])){
    setcookie('prenom',$_POST['prenom'],time()+365*25*3600);
    header('Location: index.php');
}
// var_dump($_COOKIE);

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
    <?php
    if(!isset($_COOKIE['prenom'])){
        echo '<form action="#" method="post">
        <input type="text" name="prenom">
        <input type="submit" value="connexion" name="connexion">
    </form>';
    }
    else {
        echo 'Bonjour ' . $_COOKIE['prenom'];
        echo '<br/> <form action="#" method="post">
        <input type="submit" value="deco" name="deco">
        </form>';
    }
    ?>
</body>
</html>
