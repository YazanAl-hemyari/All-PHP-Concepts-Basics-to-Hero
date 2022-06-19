<?php
$str="Amr Mohsen Sarea";
$str =strtolower($str);//change the UpperCaps to LowCase
echo $str;
echo "<br>";
$str =strtoupper($str);//change the LowCaps to UpperCase
echo $str;

echo "<br>";
echo "<br>";
echo "<br>";

$str = strtolower($str);//change the UpperCaps to LowCaps
$str = ucfirst($str);//change only the first letter to UpperCase
echo $str;
echo "<br>";
$str = lcfirst($str);//change only the first letter to LowerCase
echo $str;
echo "<br>";
$str = ucwords($str);// UpperCase all the first letter of each word 
echo $str;
echo "<br>";
$str =strtolower($str);//change the UpperCaps to LowCase
$str = strrev($str);// reverse the hole string
echo $str;
echo "<br>";
$str = strrev($str);// reverse the hole string
//$str = strlen($str);//Output the number of characters used in the string
echo $str;
echo "<br>";
//$str = strstr($str,"sarea");//finding strings in strings
//echo $str;
//echo "<br>";
$str = str_replace("sarea","slow",$str);// replace
echo $str; 
echo "<br>";
$str1 = " sarea";
echo $str.$str1;
echo "<br>";
echo $str.trim($str1);

?>