<?php
$array_error = Check_value();
echo "<br>";
error_function($array_error);


function error_function($array_error)
{
    if (!empty($array_error)) {
        echo "Please fix following errors ";
        echo "<br>";
        foreach ($array_error as $n)
            echo $n;
            echo "<br>";
    }}


/**
 * 
 */

function Check_value()
{
    $str="sdfg";
    $str1="  ass";
    $password=trim($str1);
    $name=trim($str);
    $array_error=array();
    if(!isset($name)||$name===""){
        $array_error["name"]="Please enter your name.<br>";
    }
    if(!isset($password)||$password===""){
        $array_error["password"]="Please enter your Password.<br>";
    }
    return $array_error;
}

?>