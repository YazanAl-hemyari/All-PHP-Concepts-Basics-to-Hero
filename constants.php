<?php

//There is two types of constants// it is case sensitive
define("Note","Amr Sarea",true);// first type(name of the constants, the value of constant, boolean to make it case sensitive)

echo Note;
echo "<br>";
echo note;
echo "<br>";

// the other way to define a constant

const NAME="Amr slow";
echo NAME;

//can be used for numbers too

define("WIDTH",500,true);// first type(name of the constants, the value of constant, boolean to make it case sensitive)

echo WIDTH;
echo "<br>";
echo width;
echo "<br>";

//WIDTH++; constant cannot change the value of it
//echo width;
// u cant define it again


?>