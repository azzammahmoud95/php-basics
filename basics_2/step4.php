<?php
function isArmstrong($number){
$sum = 0;
$numberDigits = strlen((string)$number);

$temp = $number;
    while($temp > 0 ){
        $digit = $temp % 10;
        $sum += pow($digit,$numberDigits);
        $temp = $temp / 10;
    }
    
    if($sum == $number){
        return "{$number} is armstrong.";
    }
    else{
        return "{$number} it is not armstrong.";
    };

}
 echo isArmstrong(37);
?>



