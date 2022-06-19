<?php

// php htmlentities() Function

// $str="<#$|>";
// echo htmlentities($str);//Convert all applicable characters to HTML entities and help to prevent hackers
// echo "<br>";
// echo html_entity_decode($str);// convert it back

// $str="muhammed & 'Ahmed'";
// echo htmlentities($str,ENT_COMPAT);//will convert the double quotes only to html charater and u can use 2 instead
// echo "<br>";
// echo htmlentities($str,ENT_QUOTES);//will convert the double quotes and single quotes only to html charater and u can use 3 instead
// echo "<br>";
// echo htmlentities($str,ENT_NOQUOTES);//will not convert  the double quotes and the single quotes only to html charater and u can use 0 instead
// echo "<br>";

//  $str="e. I'm";
//  echo htmlentities($str,2,"ISO-8859-2");
//  echo "<br>";
//  echo $str;

// $str="A 'quote' is <b>bold</b>";
// echo htmlentities($str);
// echo "<br>";
// echo htmlentities($str,2);// html entites will protect from activating html tags too
// echo "<br>";
// echo $str;


//Php htmlspecialchars() Function

// $str='This is some <a href=example.php>Click me</a>';
// echo htmlspecialchars($str);//Convert special characters to HTML entities we use it for input protection
// echo "<br>";
// echo $str;

// $str="Muhammed & Essa";
// echo htmlspecialchars($str);
// echo "<br>";

$str='My name is "Muhammed Essa"';
echo htmlspecialchars($str,ENT_QUOTES);// u can also use the php constants
echo "<br>";
echo $str;

//the different between htmlspecialchars and html entities is html entites works with all html entities but the html special entities is for some
?>