<?php

function myName($name) {
    echo "Amr $name <br>";
}

myName("sarea");
$name = "slow";
myName($name);

echo "<br>";echo "<br>";

function myName1($first_name,$last_name) {
    echo "My name is: $first_name $last_name <br>";
}
myName1("amr","sarea");
myName1("amr","");//empty string
myName1("amr",null);


echo "<br>";echo "<br>";

function myName2($first_name,$salary,$address) {
    echo "My name is: $first_name $salary$ the address: $address<br>";
}
myName2("amr",1000,"yemen");
myName2("ahmed",200,"saudi");//empty string
myName2("bob",2,"USA");
?>