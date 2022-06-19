<?php

//Syntax if(condition){statement}
$num = 200;
if($num <100)//smaller than, > bigger than
{
    echo "$num is smaller than 100";
    echo"<br>";
}
    
else{
    echo "$num is bigger than 100" ;
    echo"<br>";
}

if($num %2== 0)//smaller than, > bigger than
{
    echo "$num is even";
    echo"<br>";
}

else{
    echo "$num is odd";
    echo"<br>";
}

$num1= 2;
$num2= 1;

if($num1>$num2){
    echo "$num1 is bigger than $num2";
    echo "<br>";
}
else{
    echo "$num1 is not bigger than $num2";
    echo "<br>";
}

$new_visitor=true;// you can use boolean expression

if($new_visitor){
    echo "<h1>Welcome New Visitor</h1>";
    echo "<br>";
}
else{
    echo "<h1>Welcome Back!</h1>";
    echo "<br>";
}

$user_status=false;// you can use boolean expression

if($user_status){
    echo "<h1>User currently offline</h1>";
    echo "<br>";
}
else{
    echo "<h1>User online!</h1>";
    echo "<br>";
}

$num3= 2;
$num4= 4;
$sum= 0;
if($num4>0){
    $sum= $num3/$num4;// any var defined in the if, stays in the if statement, so always define vars outside the if statement
    echo "<h1>Sum : $sum</h1>";
    echo "<br>";
}
else{
    echo "<h1>You cant Divide By zero(0)</h1>";
    echo "<br>";
}

$num5= 2;
$num6= 2;

if ($num5>$num6) {
   echo "<h1>$num5</h1>" ;
   echo "<br>";
}
elseif ($num5<$num6) {// if statement in an if statement
    echo "<h1>$num6</h1>" ;
    echo "<br>";
}
else{
    echo "<h1>Same Number</h1>";
    echo "<br>";
}

echo "<br>";echo "<br>";

$User_basic=true;
$User_Advance= False;
$User_Admin= False;

if ($User_Admin) {
    echo "<h1>Welcome Admin</h1>" ;
    echo "<br>";
}
elseif ($User_Advance) {// if statement in an if statement
    echo "<h1>Welcome Advance User</h1>" ;
    echo "<br>";
}
else{
    echo "<h1>GET OUTTT!!!</h1>";
    echo "<br>";
}


?>