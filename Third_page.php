<!DOCTYPE html>
<html>
<head>
<title>Third Page</title>
</head>
<body>
<h1>This is a Heading</h1>

<?php 
$page_name="next page";
$page_id=2;
$employee_name="amr & sarea";
?>

<a href="Forth_page.php?id=
<?php echo $page_id;?>&employee_name=<?php echo urlencode($employee_name);
// encode string you can also 
//use rawurlencode which is used for 
//path and input and output from an operation 
//system but the urlencode 
//is used for search path and database
//rawurlencode %20
//urlencode +?>
"><?php echo $page_name;?>
</a>
<br><br>
<?php 
$name1="muhammed Essa";
$job="PHP developer";
$path="/employee/".$name1.$job;
echo $path="/employee/".urlencode($name1).urlencode($job);
echo "<br>";
echo $path="/employee/".rawurlencode($name1).rawurlencode($job);
echo "<br>";
echo $path="/employee/".rawurlencode($name1).urlencode($job);
?>
<p>This is a Paragraph</p>
</body>
</html>
