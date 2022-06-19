<?php

function employeeInfo($name= "employee",$lastName="Essa")//default value 
{
    $info_employee= "Name is :$name and last Name is :$lastName";
    
    return $info_employee;
}
echo employeeInfo("amr","sarea");echo"<br>";
echo employeeInfo("badr","sarea");echo "<br>";
echo employeeInfo();echo "<br>";
echo employeeInfo("badr",null);echo "<br>";
echo employeeInfo("Ali");echo "<br>";
echo employeeInfo(null,"sarea");echo "<br>";
echo employeeInfo("","sarea");echo "<br>";
?>