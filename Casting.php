<?php
//there is two type of casting
//one
// settype($foo,"array");//Set the type of a variable
// settype($foo,"bool");
// settype($foo,"boolean");
// settype($foo,"float");
// settype($foo,"int");
// settype($foo,"integer");
// settype($foo,"null");
// settype($foo,"object");
// settype($foo,"string");

//two
// $foo=(array)$foo;
// $foo=(binary)$foo;
// $foo=(bool)$foo;
// $foo=(boolean)$foo;
// $foo=(double)$foo;
// $foo=(float)$foo;
// $foo=(int)$foo;
// $foo=(integer)$foo;
// $foo=(object)$foo;
// $foo=(real)$foo;
// $foo=(string)$foo;

// $foo = "0";//String
// var_dump($foo);
// $foo += 2;//PHP will change it integer
// var_dump($foo);
// $foo = $foo + 1.3;// PHP will change it float
// var_dump($foo);
// $foo = 5 + "10 Little";// the output is 15 cuz we overwrite it with 5 + 10
// var_dump($foo);
// $foo1 = "amr" . "10 Small";
// var_dump($foo1);

// echo "<br>";echo "<br>";

// $var="6";
// var_dump($var);
// echo "<br>";
// $var++;
// var_dump($var);
// echo "<br>";echo "<br>";

// $num=6;
// var_dump($num);
// echo "<br>";
// $num = (string)$num;
// var_dump($num);
// echo "<br>";echo "<br>";

// $num1=6;
// $num2=8;
// $num3="8";

// echo gettype($num1);//output the type of var
// echo "<br>";
// echo gettype($num2);
// echo "<br>";
// echo gettype($num3);
// echo "<br>";
// $num3++;
// echo gettype($num3);
// $num4=$num3."Amr";// changed to string cuz we put it next a string
// echo "<br>";
// echo gettype($num4);
// echo "<br>";echo "<br>";

// $num5="9";
// echo gettype($num5) ;
// echo "<br>";
// settype($num5,"integer");
// echo gettype($num5);

// echo "<br>";echo "<br>";
// echo gettype($num5);
// echo "<br>";
// settype($num5,"integer");
// echo gettype($num5);
// echo "<br>";
// $num6=(integer)$num5;
// echo gettype($num5);
// echo "<br>";
// echo gettype($num6);

$num=6;
$num1=8;

settype($num,"string");
/*$num1=*/ (string)$num1;// if i dont call it this type will not work will not work

echo gettype($num);
echo "<br>";
echo gettype($num1);

?>