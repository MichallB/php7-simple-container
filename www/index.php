<?php
$a = 5;
$b = 7;
echo $a * $b;
echo "<br>";

$test_str = explode("&","abc&defg&hijkl");
$ctr = count($test_str);

for ($i=0; $i < $ctr; $i++) { 
    echo($test_str[$i]."<br>");
}
