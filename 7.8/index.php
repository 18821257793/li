<?php

function flower($n){
    if($n<100||$n>999){
    return false;
    }
    //2,获的个十百位
    $b = floor($n/100);
    $s = floor($n/10%10);
    $g = floor($n%10);
    $sum = $b*$b*$b+$s*$s*$s+$g*$g*$g;
    //判断立方是否和数字本身相等
    if($n == $sum){
        return true;
    }
    return false;
}
$result = flower(153);

function quickSort($arr){

}

?>