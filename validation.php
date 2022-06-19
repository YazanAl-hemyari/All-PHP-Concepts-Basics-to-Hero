<?php


$num1="    ";

if(!isset($num1)||empty($num1)){
    echo "Error!";
}
else{
    echo "Thanks!";
}
echo "<br>";
$num=trim($num1);// so hackers cant use spaces 

if(!isset($num)||empty($num)){
    echo "Error!";
}
else{
    "Thanks!";
}

echo "<br>";echo "<br>";

$num2="0";
$str = trim($num2);
if(!isset($str)||empty($str)&&is_integer($num1)){// so we make it pass 0 as int cuz php always thinks it is empty
    echo "Error!";
}
else{
    echo "Thanks!";
}
echo "<br>";echo "<br>";

$num3 =  0;
$num4 = false;
if ($num3==$num4) {
    echo "num3 == num4 => true";
}
else{
    echo "num3 == num4 => false";
}
echo "<br>";echo "<br>";

$num3 =  2;
$num4 = true;
if ($num3==$num4) {
    echo "num3 == num4 => true";
}
else{
    echo "num3 == num4 => false";
}
echo "<br>";echo "<br>";

$num3 =  0;
$num4 = false;
if ($num3===$num4) {
    echo "num3 === num4 => true";
}
else{
    echo "num3 === num4 => false";
}
echo "<br>";echo "<br>";

$num3 =  0;
$num4 = null;
if ($num3===$num4) {
    echo "num3 === num4 => true";
}
else{
    echo "num3 === num4 => false";
}
?>