<?php
$ptr="/MEH/";
$username="MEH is my name";
if(preg_match($ptr, $username)){//make a regular expression 
    echo "Yes match!";
}
else{
    echo "no match!";
}
echo "<br>";echo "<br>";
$ptr1="/@/";
$email="muhammed.essa";
if(preg_match($ptr1, $email)){//make a regular expression match 
    echo "Yes match!email";
}
else{
    echo "no match!email";
}
echo "<br>";echo "<br>";
$name="Amr";
$dbArray=array("Ahmed","ali","Omer","amr","suhail");
if(in_array($name, $dbArray)){//ask if the element is in an array and it is case sensitive
    echo "Yes found";
}
else{
    echo "not Found";
}

echo "<br>";echo "<br>";
$name1="Amr";
$min=6;
$max=30;
echo strlen($name1);//3
echo "<br>";
if(strlen($name1)<$min){//ask if the element is in an array and it is case sensitive and this condition is to make a length range
    echo "less than 6";
}
else{
    echo "more than 6";
}
echo "<br>";
if(strlen($name1)>$max){//ask if the element is in an array and it is case sensitive
    echo "more than 30";
}
else{
    echo "less than 30";
}

echo "<br>";echo "<br>";

// if(strlen($name1)<$min&&strlen($name1)>$max){//ask if the element is in an array and it is case sensitive
//     echo "less than 6 and less than 30";
// }
// elseif(strlen($name1)<$min&&strlen($name1)>$max){
//     echo "more than 6 and more than 30";
// }

$preValue="";// to make them put value
if(!isset($preValue)||empty($preValue)){
    echo "no value !";
}
else {
    echo "Thanks";
}
?>