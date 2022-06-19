<?php

function sum($x,$y) {
    settype($x,"int");
    settype($y,"int");
    $result= $x+$y."<br>";
    return $result;
}// there is two ways to return values
$result1=sum(4,5);//1
echo $result1;
echo sum(2,3); //2
$result2 = sum(5,$result1);
echo $result2;

echo "<br>";

function sum1($x,$y) {
    if ($x<$y) {
        return "x<y <br>";
    }
    else{
        return "x>y <br>";
    }
}

$result3=sum1(5,4);
echo $result3;

echo "<br>";echo "<br>";

function check($num) {
    switch($num){
        case 0:
            return "Zero";
        case 1:
            return "One";
        case 2:
            return "Two";
    }
}

$result4=check(2);
echo $result4;

echo "<br>";echo "<br>";

function myName2($first_name,$salary,$address) {
    return "My name is: ".$first_name ."$salary$"." the address: $address<br>";
}
$name1=myName2("amr",1000,"yemen");
$name2=myName2("ahmed",200,"saudi");//empty string
$name3=myName2("bob",2,"USA");

echo $name1;
echo $name2;
echo $name3;

// you can return one value only but u can use arrays if u want to return many values
?>