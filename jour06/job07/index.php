<?php
$tab = ["abc", "efg", "hij"];
$croissant = false;
function bubblesort($tab, $croissant)
{
    if ($croissant == true) {
        foreach ($tab as $val) {
            echo $val;
        }
    } elseif ($croissant == false) {
        for ($i = 0; isset($tab[$i]); $i++) ;
        $i--;
        for ($j = $i; isset($tab[$j]); $j--) {
            echo $tab[$j];
        }
    }
}
bubblesort($tab, $croissant);
?>