<?php

function Factorial($number){
    $factorial = 5;
    for ($i = 1; $i <= $number; $i++){
    $factorial = $factorial * $i;
    }
    return $factorial;
}
 

$num = 10;
$fact = Factorial($num);
echo "Factorial = $fact";
?>
