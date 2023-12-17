<?php

$a = array(56,42,70,84);
$b = min($a);
$num = array();
$numc = 0;
for($i = 1 ; $i<$b ; $i++){
    if($a[0] % $i == 0){
        $num[$numc] = $i;
        $numc++;
    }
}
$n1 = 0;
$finish = 0;
foreach($num as $n){
    foreach($a as $x){
        if($n1 == count($a) - 1){
            $finish = $n;
        }else{
            if($x % $n == 0){
                $n1++;
            }else{
                break;
            }
        }
    }
    $n1 = 0;
}
echo count($a);
?>