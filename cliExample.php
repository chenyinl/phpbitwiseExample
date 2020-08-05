<?php

//echo 32797


$a = array(4,8,16);
$b = 32769;
foreach ($a as $n){
	if(($b&$n) == $n){
		echo $b." has ".$n."\n";
	    //$b = $b^$n;
	}
}
echo "Result: ".$b."\n";

echo 1&4;  //0
echo "\n";

echo "4 and 1: ";
echo 4&1;
echo "\n";

$a = 1^4;
echo "1 remove 4: ".$a;
echo "\n";



$a = 1^4^8^16;
echo $a;
echo "\n";

$a = 10^2;
echo $a;
echo "\n";

$a = 29^4^16^8;
echo $a;
echo "\n";

$a = 2|8;   //add 
echo $a;

echo "\n";
$b = 10|2;
echo $b;

echo "\n";
echo (8&2);

echo "\n";
echo (10&2);
echo "\n";

$c= 4|8|16;
echo $c;
echo "\n";
