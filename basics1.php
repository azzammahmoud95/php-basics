
<?php 
$name = "azzam";
$position = "junior developer";
$github_url = "https://github.com/azzam";
// first method
echo "My name is " . $name . " and position is " . $position . " please check my github account " . $github_url . "<br />";
// second method
echo "My name is {$name} and position is {$position} please check my github account {$github_url} <br />";
// third method
$str = "My name is ";
$str .= $name;
$str .= " and position is ";
$str .= $position;
$str .= " please check my github account ";
$str .= $github_url;
echo  $str; 

// fourth method
$arr = array(" <br>My name is ", $name, " and position is ", $position, " please check my github account " , $github_url);
$string  = join(" " ,$arr );
echo  $string;  
 ?>