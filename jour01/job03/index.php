<?php
// Les valeurs du tableau
$vrai = true;
$faux = false;
$ent = 3;
$caflotte = 3.5;
$pourecrire = "J'aime les fruits aux sirop";
//Le tableau en html+php
echo '
<table border="2" width = "600px" >
    <thead>
        <tr>
            <th>type</th>
            <th>nom</th>
            <th>valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Boolean</td>
            <td>$vrai</td>
            <td>'. $vrai.'</td>
        </tr>
        <tr>
            <td>Boolean </td>
            <td>$faux</td>
            <td>'. $faux. '</td>
        </tr>
        <tr>
            <td> Integer </td>
            <td>$ent</td>
            <td>'. $ent.'</td>
        </tr>
        <tr>
            <td>Float </td>
            <td>$caflotte</td>
            <td>'. $caflotte .'</td>
        </tr>
        <tr>
            <td>String </td>
            <td>$pourecrire</td>
            <td>'. $pourecrire.'</td>
        </tr>
    </tbody>
</table>
'

?>