<?php

$amount=2000;
$vat=0.15;

$vatamount=$amount*$vat;
$totalamount=$amount+$vatamount;


echo"vat="."$vatamount<br>";
echo"Totalamount="."$totalamount";

?>