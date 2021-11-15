<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
    if(isset($_GET['submit'])){
        if($_GET['style']=='style1'){
            echo'<link rel="stylesheet" href="style1.css">';
        }
        if($_GET['style']=='style2'){
            echo'<link rel="stylesheet" href="style2.css">';
        }
        if($_GET['style']=='style3'){
            echo'<link rel="stylesheet" href="style3.css">';
        }
    }
    else{
        echo ' <link rel="stylesheet" href="style1.css">';
    }
    ?>
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
    <select name="style" id="style">
        <option value="style1">style1</option>
        <option value="style2">style2</option>
        <option value="style3">style3</option>

    </select>
    <input type="submit" value="submit" name="submit">
</form>

</body>
</html>
