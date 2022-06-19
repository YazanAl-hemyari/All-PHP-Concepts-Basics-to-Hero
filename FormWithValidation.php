<?php 
require_once 'check_page.php';
require_once 'form_function.php';

if(isset($_POST["submit"])){
  $username = trim($_POST["name"]);
   
  $email =trim($_POST["email"]);
        echo "<br>";

  $password= trim( $_POST["password"]);
        echo "<br>";
    if ($_POST["name"]=="admin"&& $_POST['password']=="admin") {
        function_redirect("admin.php");
    }
        
        if(!is_exist($username)){
            $array_error["name"]= "Please enter your username again";
        }
        if(!is_exist($password)){
            $array_error["password"]= "Please enter your password again";
        }
        if(!is_exist($email)){
            $array_error["email"]= "Please enter your Email again";
        }
        if(min_value($username, 4)){
            $array_error["name"]="too small";
        }
        
}
else{
    $username="";
    $email="";
    $password="";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

    <form action="FormWithValidation.php" method="post">
       Name:    <input type="text" name="name" value=""><br>
       E-mail:  <input type="email" name="email" value=""><br>
       Password:<input type="password" name="password" value=""><br>
       <input type="submit" name="submit"><br>
    </form>
</body>
</html>