<?php

// phpinfo();// this function will put php info so u can check if u have a problem installing php or problems in the web browser
//there is function u can use to change there values in php
// ini_set("diplay_errors", "on");
// error_reporting(E_ALL);
// php.ini // the ones we edit at the begining and if i am going to sell my product i must turn them off  
// display_error =on
// error_reporting= E_ALL

//there is function u can use to change there values in php
//functions used for debuging
// 1.var_dump
// 2.print_r
// 3.echo 
// 4.gettype
// 5.get_defined_vars returns  an array of all defined variables
// 6.debug_backtrace trace all the code
// $name="amr";
// $name1="sarea";
// $num= 2;
// $num1= 3;
// $person=array("name"=>"Amr","lastname"=>"Sarea","email"=>"amrsarea@gmail.com","job"=>"Programmer");
// var_dump($name);echo "<br>";//Dumps information about a variable
// var_dump($name1);echo "<br>";//Dumps information about a variable
// var_dump($num);echo "<br>";//Dumps information about a variable
// var_dump($num1);echo "<br>";//Dumps information about a variable
// var_dump($person);echo "<br>";echo "<br>";//Dumps information about a variable

function myName(){
    echo "Amr Sarea <br>";
    var_dump(debug_backtrace());
}
echo "<pre>";
myName();
echo "</pre>";
?>