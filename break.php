<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>

<?php

for ($i = 0; $i < 10; $i++) {
  
  echo "$i <br>";
if ($i==5) {
      break;// used for breaking the loop
  }
}
echo "<br>";echo "<br>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
		echo "$i <br>";
        if ($i==3&&$j==5) {
        break;// used for breaking the loop
    	}
    }
}
echo "<br>";echo "<br>";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
		echo "$i $j <br>";
        if ($i==3&&$j==5) {
        break;//used for breaking the loop
    	}
    }
}

echo "<br>";echo "<br>";







for ($i = 0; $i < 10; $i++) {
    if ($i==3) {
        break;// u can use it for skip one element
    }
    for ($j = 0; $j < 10; $j++) {

        if ($j==3) {
            break;
			
        }  
		echo "$i $j <br>";
    }
}

?>

</body>
</html>