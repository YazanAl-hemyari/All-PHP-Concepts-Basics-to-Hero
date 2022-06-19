<?php
 $num=12;
 $num1=9;
 $num2=-2; 
 $num3=4.2;
 $num4=-4.8;
 $num5=4.7;
 echo abs($num2);//return postive numbers and float numbers
 echo "<br>";
 echo abs($num3);
 echo "<br>";
 echo ceil($num4);//return the value closest to like, 5.1 = 5, 5.7= 6
 echo "<br>";
 echo floor($num5);//return the value of the least like, 4.9=4
 echo "<br>";
 echo sqrt($num1);//squareroot
 echo "<br>";
 echo decbin($num);//decimal to binary
 echo "<br>";
 echo dechex($num);//decimal to hexadecimal
 echo "<br>";
 echo decoct($num);//decimal to octal
 echo "<br>";
 echo base_convert(10, 10, 2);//first what number second from what finally to what(10 decimal 8 octal 2 binary hex 16)
 echo "<br>";
 echo((10-1-4)*$num)/$num1;
 echo "<br>";
 echo fmod($num, $num1);// the reminder 
 echo "<br>";
 echo pow(8,2);//power
 echo "<br>";
 echo rand(1,100);//random (min, max)
 echo "<br>";
 
 $num6=2;
 $num7=4;
 $n1=2;
 $n2=4;
 
 echo $num6-=$num7;//operators//-2
 echo "<br>";
 echo $num6+=$num7;
 echo "<br>";
 echo $num6*=$num7;
 echo "<br>";
 echo $num6/=$num7;
 echo "<br>";
 
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 
 echo $n1++;
 echo "<br>";
 echo $n1;
 echo "<br>";
 echo $n2++;
 echo "<br>";
 echo $n2;
 echo "<br>";
 echo $n1+=1;
 echo "<br>";
 echo $n1;
 echo "<br>";
 echo $n2+=1;
 echo "<br>";
 echo $n2;
 echo "<br>";
 echo "<br>";
 echo "<br>";
 $n3= 3 + "3";// php is helpful
 echo $n3; 
 echo "<br>";
 //$n3= 3 + "4 dd";//php deleted the characters cuz they are not numbers
 echo $n3; 
 echo "<br>";
 echo "<br>";
 $n4=46.7555555;
 echo round($n4,2);// this means it will take only two number after the dot in a float value ex. 4.5667 =4.57 and u can also make it more or less than 2 in the second value in the function
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 // u cant divid by 0
 $n5= 8/9;
 $n6= 7/4;
 $n7= 7/0;
 
 echo "<br>";
 echo$n5;
 echo "<br>";
 echo$n6;
 echo "<br>";
 echo$n7;
 echo "<br>";
 echo "<br>";
 echo "<br>";
 
 $n8= 5;
 $n9= 7.32;
 $n10="mu";
 
 echo "<br>";
 echo is_numeric($n8); // check if the var is numeric, if it is: the output is 1, if not: left empty 
 echo "<br>";
 echo is_numeric($n9);
 echo "<br>";
 echo is_numeric($n10)."NO";
 echo "<br>";
 echo "<br>";
 echo is_int($n8);//Check if the value is integer
 echo "<br>";
 echo is_int($n9)."NO";
 echo "<br>";
 echo is_int($n10)."NO";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo is_float($n8)."NO";//Check if the value is float
 echo "<br>";
 echo is_float($n9);
 echo "<br>";
 echo is_float($n10)."NO";
 ?>