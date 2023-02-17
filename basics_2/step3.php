<?php
$var1 = 32;
$var2 = 45;
echo $var1 . ' ' . $var2 ."<br>";
$third = $var1;
$var1 = $var2;
$var2 = $third;

echo $var1 . ' ' . $var2;
 ?>