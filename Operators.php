<?php

//== equal to,=== identical, compare < > >= <=
// the different between equal and identical 
// ==equal "2"==2 true // type doesnt matter
// ===identical "2"===2 false the type shall match too
// not equal !=
// not identical !==
// = to put value in a var

//LOGICAL OPERATORS 
//&& and
//|| or
//! 
echo (5 % 3)."\n";            // prints 2
echo (5 % -3)."\n";          // prints 2
echo (-5 % 3)."\n";          // prints -2
echo (-5 % -3)."\n";         // prints -2
echo "<br>";echo "<br>";

$a=20;

if (($a % 2) == 1)
{ 
    echo "$a is odd." ;
    echo "<br>";
}
if (($a % 2) == 0)
{ 
    echo "$a is even." ;
    echo "<br>";
}

echo "<br>";echo "<br>";

echo "<h3>Postincrement</h3>";
$a = 5;
echo "Should be 5: " . $a++ . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Preincrement</h3>";
$a = 5;
echo "Should be 6: " . ++$a . "<br />\n";
echo "Should be 6: " . $a . "<br />\n";

echo "<h3>Postdecrement</h3>";
$a = 5;
echo "Should be 5: " . $a-- . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";

echo "<h3>Predecrement</h3>";
$a = 5;
echo "Should be 4: " . --$a . "<br />\n";
echo "Should be 4: " . $a . "<br />\n";
echo "<br>";echo "<br>";

$x= 10;
$y= "10";

var_dump($x==$y);
echo "<br>";
var_dump($x===$y);
echo "<br>";
var_dump($x!=$y);
echo "<br>";
var_dump($x!==$y);
echo "<br>";
var_dump($x<>$y);//not equal
echo "<br>";
var_dump($x>$y);
echo "<br>";
var_dump($x<$y);
echo "<br>";
var_dump($x<=$y);
echo "<br>";
var_dump($x>=$y);
echo "<br>";echo "<br>";

//Arithmetic operators

$x= 1;
$y= 7;

echo $x+$y;
echo "<br>";
echo $x-$y;
echo "<br>";
echo $x*$y;
echo "<br>";
echo $x%$y;
echo "<br>";
echo $x/$y;
echo "<br>";echo "<br>";

//logical operators

$x=100;
$y=80;

if($x == 100 and $y==80){// both must be true
    echo "Hello World!";
    echo "<br>";
}
if($x == 100 or $y==50){
    echo "Hello World!1";
    echo "<br>";
}
if($x == 100 xor $y==50){// most only be one true
    echo "Hello World!2";
    echo "<br>";
}
if($x == 100 && $y==80){
    echo "Hello World!3";
    echo "<br>";
}
if($x == 100 || $y==50){
    echo "Hel lo World!4";
    echo "<br>";
}

echo "<br>";echo "<br>";

//String Operators

$str1="Amr";
$str2=" Sarea";

echo $str1.$str2;
echo "<br>";
echo $str1;
echo "<br>";
echo $str2;
echo "<br>";echo "<br>";

$str3="Amr";
$str4=" Sarea";
$str3.=$str4;// means $str3=$str3.$str4

echo $str3;

echo "<br>";echo "<br>";

//array operators
// union of x and y
$x=array("a"=>"red","b"=>"green");
$y=array("c"=>"blue","d"=>"yellow");

print_r($x+$y);// they merged together
echo "<br>";echo "<br>";
//Equality check if it is equal

$x=array("a"=>"red","b"=>"green");
$y=array("c"=>"blue","d"=>"yellow");
var_dump($x==$y);
echo "<br>";echo "<br>";

//Identity check if it is identical

$x=array("a"=>"red","b"=>"green");
$y=array("c"=>"blue","d"=>"yellow");
var_dump($x===$y);
echo "<br>";echo "<br>";

//Inequality

$x=array("a"=>"red","b"=>"green");
$y=array("c"=>"blue","d"=>"yellow");
var_dump($x!=$y);
echo "<br>";echo "<br>";

//Mixed Operators

$num10=2;
$num11=1;
$num12=10;
$num13=9;
$num1=null;

if (($num10>$num11)||($num12>$num13)) {
    echo "num10 greater than num11 ";
    echo "<br>";
    echo "num12 greater than num13 ";
    echo "<br>";
}
if (($num10>$num11)&&($num12>$num13)) {
    echo "num10 greater than num11 ";
    echo "<br>";
    echo "num12 greater than num13 ";
    echo "<br>";
}
if ((isset($num10))&&(isset($num13))) {
    echo "LOL";
    echo "<br>";
}
if (!isset($num1)){
    $num1=9;
    echo $num1;
    echo "<br>";
}
if (!empty($num1)){
    $num1=90;
    echo $num1;
    echo "<br>";
}
if (is_numeric($num1)){
    $num1=1000;
    echo $num1;
    echo "<br>";
}
if (!is_null($num1)&&is_numeric($num1)){
    $num1=10000;
    echo $num1;
    echo "<br>";
}
?>