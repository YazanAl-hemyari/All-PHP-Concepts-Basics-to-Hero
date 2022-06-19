<?php

for ($i = 0; $i < 20; $i++) {
  if ($i==15) {
      continue;// u can use it for skip one element
  }
  echo "$i - ";
}

echo "<br>";echo "<br>";

for ($i = 0; $i < 20; $i++) {
    if ($i%2!=0) {
        continue;// u can use it for skip one element
    }
    echo "$i - ";
}

echo "<br>";echo "<br>";
$num=0;

while ($num<=20) {
    if ($num==13) {
        $num++;
        continue;// u can use it for skip one element
    }
    echo "$num - ";
    $num++;
}
echo "<br>";echo "<br>";
for ($i = 0; $i < 10; $i++) {
    if ($i==3) {
        continue;// u can use it for skip one element
    }
    for ($j = 0; $j < 10; $j++) {
        echo "$i = $j <br>";
    }
}

echo "<br>";echo "<br>";
for ($i = 0; $i < 10; $i++) {
    if ($i==3) {
        continue;// u can use it for skip one element
    }
    for ($j = 0; $j < 10; $j++) {
        if ($j==3) {
            continue;// u can use it for skip one element
        }
        echo "$i = $j <br>";
    }
}

echo "<br>";echo "<br>";
for ($i = 0; $i < 10; $i++) {
    if ($i==3) {
        continue;// u can use it for skip one element
    }
    for ($j = 0; $j < 10; $j++) {
        if ($j%2==0) {
            continue;// u can use it for skip one element, and u can add the number of conti
        }
        echo "$i = $j <br>";
    }
}

?>