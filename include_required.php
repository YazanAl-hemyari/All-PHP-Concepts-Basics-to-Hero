<?php 
//require once Includes and evaluates a specific file. If the code from a file has already been included, it will not be included again.
//include once Includes and evaluates a specific file. If the code from a file has already been included, it will not be included again.
include 'items.html';// to include html or php file if an error happened it will do a warning and will not stop the progress
require 'include_me.php';// the same as include except if an error happened the progress will stop 
 require 'functions_and_vars.php';
$link="<h1>This is include!</h1>";
echo $link;
//echo test("me");// u can use function from other files
echo "<footer>";
include 'include_me.php';
echo"</footer>";
echo "<br>";
echo test1("amr");
echo test2("sarea");
echo test3("slow");
echo $n;// u can also call vars too

?>