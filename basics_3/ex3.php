<?php
function count_word($text, $word){
    $count = 0;
    $words= explode(" ", $text);
    
    $i = 0;
    while($i < count($words)){
        if($words[$i] == $word){
            $count++;
        }
        $i++;
    }
    return $count;
}



$word = "php";
$text = "php is so boring, with php u can not be found";

$count = count_word($text, $word);
echo "The word '{$word}' appears {$count} times in the text: '{$text}'";
?>