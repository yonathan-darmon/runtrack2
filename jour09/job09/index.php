<?php
$connect= mysqli_connect("localhost","root","","jour08");
$req= mysqli_query($connect, "SELECT * FROM `salles`GROUP BY capacite DESC");
$table = mysqli_fetch_all($req,MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="2px">
    <?php
    echo "<thead><tr>";
    foreach ($table[0] as $key =>$value) {
        echo " <th>$key</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "</tbody>";

    foreach ($table as $key=>$value){
        echo"<tr>";
        foreach ($value as $value2){
            echo "<td>$value2</td>";
        }
        echo"</tr>";
    }
    echo"</tbody>";

    ?>
</table>

</body>
</html>
