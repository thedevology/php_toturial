<?php
$num1 = 12;
$num2 = 2;
$op="1";
// if($num1==12){
//     echo "d";
// }elseif($num1 == 12){
//     echo "c";
// }else{
//     echo "v";
// }
switch($op){
    case "+":
        echo $num1+$num2;
        break;
    case "-":
        echo $num1-$num2;
        break;
    case "*":
        echo $num1*$num2;
        break;
    case "/":
        echo $num1/$num2;
        break;
    case "%":
        echo $num1%$num2;
        break;
    default:
    echo "not found :(";
}
?>