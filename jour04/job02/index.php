<?php
if(isset($_GET)){
var_dump($_GET);
foreach($_GET as $Value);
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
    <form action="#" method="get">
        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="text" name="adresses">
        <input type="submit" value="Envoyer">
    </form>
    <table border="2px" width="25%">
        <thead>
            <tr>
                <th>Arguments</th>
                <th>Valeurs</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($_GET)){
                foreach($_GET as $arg => $value){
                    echo '<tr> <td>' . $arg. '</td>';
                    echo '<td>'. $value. '</td> </tr>';
                }
            }
            ?>

        </tbody>
    </table>
</body>
</html>