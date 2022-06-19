<?php

$Salary = array("A"=>"1","M"=>"2","R"=>"3");
echo "The value of A : ".$Salary["A"];
echo "<br>";
echo "The value of M : ".$Salary["M"];
echo "<br>";
echo "The value of R : ".$Salary["R"];
echo "<br>";
$Info = array("Username"=>"Amr","Lastname"=>"Sarea","Email"=>"amrsarea@gmail.com");
echo "The username : ".$Info["Username"];
echo "<br>";
echo "The lastname : ".$Info["Lastname"];
echo "<br>";
echo "The email : ".$Info["Email"];
echo "<br>";
echo "<br>";
echo "<br>";
//multi array
$Data = array(
    array("1 ","amr ","1000"),
    array("2 ","ahmed ","1000"),
    array("3 ","ali ","1000")
);
for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {
        echo $Data[$row][$col];
    };
    echo "<br>";
}
?>