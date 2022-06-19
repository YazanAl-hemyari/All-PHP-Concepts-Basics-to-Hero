<?php

// $names = array("a"=> "amr","b"=> "mohsen","c"=> "sarea");

// //echo $names[0];
// //array_change_key_case() this function Changes the case of all keys in an array
// print_r(array_change_key_case($names,CASE_UPPER));//to convert array keys to lower case.
// echo"<br>"; 
// echo"<pre>"; 
// print_r(array_chunk($names, 2));//Split an array into chunks
// echo"<pre>"; 
// echo"<br>";
// echo count($names);// count the number of elements in the array
// echo"<br>";
// echo"<br>";
// // echo"<pre>";/ i need foreach
// // print_r(sort($names));
// // echo"<pre>";
// sort($names);// sort the array elements in an alphatical order
// foreach($names as $n){
    
//     echo$n."<br>";
// };
// $arr=array_reverse($names);// sort the array elements in an alphatical order
// foreach($arr as $a){
    
//     echo$a."<br>";
// };
// $names1=array("Amr","Mohsen","Sarea");
// $m= array_search("Sarea", $names1);//search array
// echo $m;
// echo"<br>";
// echo"<br>";
// echo"<br>";
// echo"<br>";

// $names2=array("Amr","Mohsen","Sarea");
// $names3=array("bob","ali","Amr");
// echo"<br>";
// $interArray= array_intersect($names2, $names3);//  this find the duplicate in many arrays

// foreach($interArray as $s){
//     echo $s."<br>";
// };

$names4=array("bob","ali","Amr");
$num5=array(12,3,4,54,6,9);

$max_arr=max($num5);// find the highest number in the array
$min_arr=min($num5);// find the lowest number in the array

echo $max_arr;
echo "<br>";
echo $min_arr;
echo "<br>";

sort($num5);//asending a-z
print_r ($num5);
echo "<br>";
rsort($num5);//desending z-a
print_r ($num5);
echo "<br>";
echo implode("*", $names4);//Join array elements with a string
echo "<br>";
echo "<br>";
echo "<br>";
$stringName = "amr, dsd, uudi";// divide string into elements in an array
print_r (explode(",", $stringName));
echo "<br>";
echo "<br>";
echo in_array(12, $num5);// check if the element in the array(1) or not( )
echo in_array(18, $num5);
?>