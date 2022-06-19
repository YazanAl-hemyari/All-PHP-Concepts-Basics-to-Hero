<?php 
// if(isset ($_POST['name'])&&isset($_POST['email'])&& isset($_POST['password'])){//to fix errors
// echo htmlentities($_POST["name"]);
// echo "<br>";
// echo htmlentities($_POST["email"]);
// echo "<br>";
// echo htmlentities($_POST["password"]);
// echo "<br>";
// }

if(isset($_POST["submit"])){
    if(isset ($_POST['name'])){//to fix errors
        echo "Name: ".htmlentities($_POST["name"]);
        echo "<br>";
    }
    else{
        echo "Name: no value<br>";
    
    }
    if(isset ($_POST['email'])){
        echo "E-mail: ".htmlentities($_POST["email"]);
        echo "<br>";
    }
    else{
        echo "E-mail: no value<br>";
    }
    if(isset ($_POST['password'])){
        echo "Password: ".htmlentities($_POST["password"]);
        echo "<br>";
    }
    else{
        echo "Password: no value<br>";
    }
}
// else{
//     echo "Name: no value<br>";
//     echo "E-mail: no value<br>";
//     echo "Password: no value<br>";
// }


echo "<pre>";
print_r($_POST);
echo "<pre>";
?>