<?php
$array_error=array();
function min_value($name,$min) {
   return strlen($name)>=$min ;
}
function max_value($name,$max) {
    return strlen($name)<=$max;
}
function check_value($name,$password,$array_error){
    if(!isset($name)||$name===""){
        $array_error["name"]= "Please enter your name again";
    }
    if(!isset($password)||$password===""){
        $array_error["name"]= "Please enter your password";
    }
    if(!isset($email)||$email===""){
        $array_error["name"]= "Please enter your email again";
    }
}
function is_exist($name){
    return isset($name)&&$name!=="";
}
function error_function($array_error){
 if (!empty($array_error)) {
    echo "Please fix following errors ";
    echo "<br>";
    foreach ($array_error as $n)
          echo $n;
          echo "<br>";
    }
  }
