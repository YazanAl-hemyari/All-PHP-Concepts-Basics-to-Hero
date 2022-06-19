<?php

// $num = 2;

// // syntax: while(condition){var++}

// while ($num<=10){
//     echo"$num<br>";
//     $num++;
// }
// echo "$num <br>";

$num=1;

while ($num<=4){
    $num2=2;
    while ($num2<=4){// nested while
        echo "$num  $num2<br>"; 
        $num2++;
    }
    $num++;
}

echo "<br>";echo "<br>";

$num=1;

while ($num<=7){// u can use if condition in it
    if ($num==3) {
        echo "$num <br>";
    }
    else{
        echo "Its not three <br>";
    }
    $num++;
}

?>