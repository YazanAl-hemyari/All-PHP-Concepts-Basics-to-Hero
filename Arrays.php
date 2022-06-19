<?php
//$numbers=array();// how u make arrays
$names=array("Amr","Mohsen","Sarea");// how to put values in an array
$ages=array(10,3,54);
$Ages=array(10,3, array("A","B","C"));// array in an array
echo $names[0]." ";// how to call an array
echo $names[1]." ";
echo $names[2];
echo "<br>";
echo $ages[0]." ";
echo $ages[1]." ";
echo $ages[2];
echo "<br>";
echo $Ages[0]." ";
echo $Ages[1]." ";
echo $Ages[2][2];// how to call an array in an array
echo "<br>";
echo $names[3] ="slow";// how to put extra values in an array
echo "<br>";
echo $names[8] ="poo";// u can add to any place at the array
echo "<br>";
echo print_r($names);// means print the hole array with where the var is at(its for developers not for user)
echo "<br>";
echo $names[]="lko";// this will add this string after the last var in the array
echo "<br>";
echo "<pre>"; //to make the print_r look nicer
echo print_r($names);
echo "<pre>";
echo "<br>";
echo "<pre>"; //to make the print_r look nicer
echo print_r($Ages);
echo "<pre>";
echo "<br>";

// $name1=[1,2,34,4];//u can create arrays like this/ didnt work for me

// echo $names1[0]." ";// how to call an array
// echo $names1[1]." ";
// echo $names1[2];
// echo "<br>";
?>