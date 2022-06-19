<?php

$n = null;
$n1 ="";
$n2 =0;
$n3 ="0";

var_dump($n);// find the data type and put the value
echo "<br>";
var_dump($n1);
echo "<br>";
var_dump($n2);
echo "<br>";echo "<br>";

echo empty($n);// check if the var is empty using boolean
echo "<br>";
echo empty($n1);
echo "<br>";
echo empty($n2);
echo "<br>";
echo empty($n3);
echo "<br>";echo "<br>";

echo isset($n)." = null";//check if the var has a value
echo "<br>";
echo isset($n1)." = empty string";
echo "<br>";
echo isset($n2)." = 0";
echo "<br>";
echo isset($n3)." = 0 in a string";
echo "<br>";echo "<br>";

echo is_null($n)." = null";//check if the var is null
echo "<br>";
echo is_null($n1)." = empty string";
echo "<br>";
echo is_null($n2)." = 0";
echo "<br>";
echo is_null($n3)." = 0 in a string";

//empty "",null,0,"0"

?>