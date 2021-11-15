<?php
$str="Certaines choses changent, et d'autres ne changeront jamais.";
for($i=0;isset($str[$i]);$i++);
for($j=1; $j<=$i-2;$j++){
    echo $str[$j];
}
echo $str[$i-1];
echo $str[0];
?>