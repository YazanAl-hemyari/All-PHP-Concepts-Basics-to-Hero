<?php
$name="amr";
$value="sarea";// the value must be encrypted
$expire=time()+(60*60*24*7);
setcookie($name,$value,$expire);// how to set cookies
//cookies a file that is stored in the user browser make him uniqe
//unset($_COOKIE[$name]); wrong way
//setcookie($name); //so u delete the value of the cookie
//setcookie($name,null);// or this way
setcookie($name,$value,time()-3600);// u delete the cookie using old time
if(isset($_COOKIE[$name])){
    $name2=$_COOKIE[$name];
}
else{
    $name2="";
}
// it print the value of the name
echo $name2;
// echo "<br>";
// print_r($_COOKIE);
 ?>