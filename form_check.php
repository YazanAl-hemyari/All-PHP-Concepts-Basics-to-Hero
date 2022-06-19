<?php
require_once 'form_function.php';
$array_error=array();
error_function($array_error);
$username=trim("lorem");
$password=trim("lorem");
$email=trim("lorem@lorem");

if(!is_exist($username)){
    $array_error["username"]= "Please enter your username again";
}
if(!is_exist($password)){
    $array_error["password"]= "Please enter your password again";
}
if(!is_exist($email)){
    $array_error["email"]= "Please enter your email again";
}
if(!is_exist($username)){
    $array_error["lastName"]= "Please enter your username again";
}
if(min_value($username, 4)){
    $array_error["username"]="too small";
}


?>