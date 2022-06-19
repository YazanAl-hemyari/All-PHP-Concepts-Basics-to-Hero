<?php

function myName1($first_name,$second_name,$last_name) {
    $First_one = "My name is: $first_name <br>";
    $First_two = "My name is: $second_name <br>";
    $First_three = "My name is: $last_name <br>";
    return array($First_one,$First_two,$First_three);
}

$names=myName1("amr","mohsen","sarea");
echo"first_one  :".$names[0];
echo"first_two  :".$names[1];
echo"first_three  :".$names[2];

foreach($names as $n){
    echo $n."<br>";
}
// you can return one value only but u can use arrays if u want to return many values
list($one,$two,$three)=myName1("amr","mohsen","sarea");// Assign variables as if they were an array

echo"first_one  :".$one;
echo"first_two  :".$two;
echo"first_three  :".$three;

function operators($num1,$num2,$num3) {
    $sum=$num1+$num2+$num3;
    $mult=$num1*$num2*$num3;
    $div=($num1/$num2)/$num3;
    return array($sum,$mult,$div);
}

$names=operators (10,10,10);
echo"sum  :".$names[0];
echo"multiply  :".$names[1];
echo"divide  :".$names[2];

/* quiz
$nums=operators(10,10,10);
list($n1,$n2,$n3)=$nums;// Assign variables as if they were an array

echo"sum  :".$n1."<br>";
echo"multiply  :".$n2."<br>";
echo"divide  :".$n3."<br>";
*/

?>