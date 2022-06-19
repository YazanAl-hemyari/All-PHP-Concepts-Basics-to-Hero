<?php
require 'check_page.php';
if(isset($_POST["submit"])){
    if(isset ($_POST['name'])&& $_POST['name']!=null){//to fix errors
        echo "Name: ".htmlentities($_POST["name"]);
        echo "<br>";
        if(isset ($_POST['email'])&& $_POST['email']!=null){
        echo "E-mail: ".htmlentities($_POST["email"]);
        echo "<br>";
        }
        if(isset ($_POST['password'])&& $_POST['password']!=null){
        echo "Password: ".htmlentities($_POST["password"]);
        echo "<br>";
        }
        echo "<br>";
        echo "<br>";
        echo '<h1 style="color: blue">'.$welcome_msg="Welcome ".htmlentities($_POST['name'])."</h1>"; 
        echo "<br>";
        echo "<br>";
        if ($_POST["name"]=="admin"&& $_POST['password']==admin) {
        function_redirect("admin.php");
    }
  }
}
?>