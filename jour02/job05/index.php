<?php
for ($i=2;$i<=1000;$i++){
    $multi=0;
    for ($j=1;$j<=$i;$j++){
        if($i%$j==0){
            $multi++;
        }
    }
    if($multi==2){
        echo $i.'<br/>';
    }
}
