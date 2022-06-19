<?php

// $num=3;//global var cant be used in a function
// function Mynum() {
//     $num=4;// local var cannot be used outside the function
//     echo "<h1>num inside function is $num </h1>";
// }

// Mynum();
//echo "<h1>num outside function is $num </h1>";
// $num=3;
// function Mynum() {
//     global $num;// with global we made a globle var work inside a function
//     echo "<h1>num inside function is $num </h1>";
// }

// Mynum();
// echo "<h1>num outside function is $num </h1>"
// $num=3;
// function Mynum() {
//     global $num;// with global we made a globle var work inside a function
//     if (isset($num)) {
//         echo "<h1>num inside function is $num </h1>";
//     }
//     $num=6;
//     echo "<h1>num inside function is $num </h1>";
// }

// Mynum();
// echo "<h1>num outside function is $num </h1>"

// $num=3;
// $num1=13;
// function Mynum() {
//     global $num,$num1;// with global we made a globle var work inside a function
//     if (isset($num)&&isset($num1)) {
//         echo "<h1>num inside function is $num </h1>";
//         echo "<h1>num1 inside function is $num1 </h1>";
//     }
//     $num1=6;
//     echo "<h1>num1 inside function is $num1 </h1>";
// }
// Mynum();
 
// echo "<h1>num outside function is $num </h1>";
// echo "<h1>num1 outside function is $num1 </h1>";

// $num="Amr";// the se
// $num1="Sarea";
// function Mynum() {
//     $GLOBALS['num'];
//     $GLOBALS['num1'];// another way using array  
//     $GLOBALS['num1']="Mohsen";
 
// }
// Mynum();

// echo "<h1>num outside function is $num </h1>";
// echo "<h1>num1 outside function is $num1 </h1>";

function Mynum() {
    static $num = 9;// static var save the var value even after it is finished
    echo $num;
    $num++;
}
Mynum(); echo "<br>";
Mynum(); echo "<br>";
Mynum(); echo "<br>";


?>