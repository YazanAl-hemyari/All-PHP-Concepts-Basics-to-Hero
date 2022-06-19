<?php

session_start();

?>
<?php 
echo "</pre>";
print_r($_SESSION);
echo "</pre>";
?>
<?php 
//it will be stored in the server side and it will be encrypded
$_SESSION['name']="muhammed";
$_SESSION['last_name']="Amr";
$myName=$_SESSION['name'];
$myName2=$_SESSION['last_name'];
echo $myName;
echo "<br>";
echo$myName2;

//session_unset(); //remove all the data in the session
//session_destroy();//destroy the session
?>