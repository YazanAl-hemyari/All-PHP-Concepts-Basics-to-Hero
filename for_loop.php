<?php

$num=0;

while ($num<=20){// u can use if condition in it
    if ($num %2==0) {
        echo "$num is even <br>";
    }
    else{
        echo "$num is odd <br>";
    }
    $num++;
}

echo "<br>";echo "<br>";

for ($i = 0; $i <= 20; $i++) {
    if ($i %2==0) {
        echo "$i is even <br>";
    }
    else{
        echo "$i is odd <br>";
    }
}


for ($i = 0; $i < 10; $i++) {
    echo "$i <br>";
}

?>