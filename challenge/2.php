<?php

$a = array(8,7,5,4,6);

for($i = 0 ; $i<count($a) ; $i++){
    for($i2 = 0 ; $i2<count($a) ; $i2++){
        if($a[$i]<$a[$i2]){
            $temp = $a[$i2];
            $a[$i2] = $a[$i];
            $a[$i] = $temp;
        }
    }
}
foreach($a as $b){
    echo $b." ";
}
?>