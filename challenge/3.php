<?php
$x = 3;
$y = 2;
$z = "ali";
echo "\$x1 = array(";
for($i = 1 ; $i<$x ; $i++){
    echo "array(";
    for($i2=0;$i2<$y;$i2++){
        if($i2 == $y-1){
            echo '"' . $z . '"';
        }else{
            echo '"' . $z . '"' . ',';
        }
    }
    if($i == $x-1){
        echo ")";
    }else{
        echo "),";
    }
}
echo ")";
?>