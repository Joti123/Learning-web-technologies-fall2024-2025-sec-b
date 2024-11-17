<?php
$num1=20; 
$num2=40; 
$num3=60;
 {
    if ($num1 >= $num2 && $num1 >= $num3) {
        echo $num1 . " is the largest number.";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        echo $num2 . " is the largest number.";
    } else {
        echo $num3 . " is the largest number.";
    }
}