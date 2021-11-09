<?php
if(isset($_POST['reset'])){
    unset( $_COOKIE['nbvisites']);
}
// var_dump(!isset($_COOKIE['nbvisites']));
if(!isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites', 0,time()+365*24*3600);
    header('Location: index.php');
}
else{
    setcookie('nbvisites', $_COOKIE['nbvisites']+1);
}
//  var_dump($_COOKIE);
echo $_COOKIE['nbvisites'];


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
        <input type="submit" value="reset" name="reset">
    </form>
</body>
</html>