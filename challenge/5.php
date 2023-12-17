<?php

$a = "sib 100$";
 $z = strpos($a,"$");
if($z == ""){
    echo "!";
}else{
    $rev = $z -1;
    for($i = $z  -1; $i>0 ; $i--){
        if($a[$i] == " " || $a[$i] % 1 !=0){
            break;
        }else{
            $rev--;
        }
    }
    for($i = $rev ; $i<$z ; $i++){
        echo $a[$rev];
        $rev++;
    }
    echo "$";
}
?>