<?php
$number = 4;
$factorial = 1;
while ($number >= 1){
    $factorial *= $number;
    $number--;
}
echo $factorial;
?>