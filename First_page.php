<?php
$page_name="First page";

echo"<h2>Welcome in $page_name</h2>";

$page_name1="Second page";

echo'<a href="Second_page.php?id=2">'."$page_name1</a>";
echo "<br>";
echo $_GET["id"];// is an array of variable names and values sent by the HTTP GET method.
echo "<br>";
echo "<pre>";
echo print_r ($_GET);
echo "<pre>";
echo "<br>";
echo $_GET['name'];
?>