<?php
function digitSum($number){
    $sum = 0;
    while($number > 0){
        $sum = $sum + $number % 10;
        $number = floor($number / 10);
    }
    return $sum;
}
echo digitSum(123);
 ?>