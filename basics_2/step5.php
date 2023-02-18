<?php
function numberConverter(string $number){
    switch($number){
        case 'zero' :
            return 0;
        case 'one':
            return 1;   
        case 'two':
            return 2;
        case 'three':
            return 3;
        case 'four':
            return 4;
        case 'five':
            return 5;
        case 'six':
            return 6;
        case 'seven':
            return 7;
        case 'eight':
            return 8;
        case 'nine':
            return 9;
         default:
             return 'invalid number';
    }
}
 echo numberConverter("five");
 echo numberConverter("zero");
 echo numberConverter("short");
 echo numberConverter("lol");
?>