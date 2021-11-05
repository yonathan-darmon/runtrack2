<?php
// if(isset($_POST)){
// var_dump($_POST);
// }
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
        <input type="text" name="username">
        <input type="text" name="pasword">
        <input type="submit" value="Validation">
    </form>
    <?php
    if($_POST['username']=='John' && $_POST['pasword']=='Rambo'){
        echo 'C\'est pas ma guerre';
    }
    else{
        echo 'Votre pire cauchemar';
    }
    ?>
</body>
</html>