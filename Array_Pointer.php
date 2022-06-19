<?php

$names = array("foot", "bike", "car", "plane","Boat");
Echo "current pointer: ".current($names)."<br>"; // $mode = 'foot';Return the current element in an array
Echo "current pointer: ".next($names)."<br>";    
Echo "current pointer: ".next($names)."<br>";    // $mode = 'car';
Echo "current pointer: ".next($names)."<br>"; 
Echo "current pointer: ".next($names)."<br>"; 
Echo "current pointer: ".reset($names)."<br>";//Set the internal pointer of an array to its first element
Echo "current pointer: ".next($names)."<br>";//Advance the internal pointer of an array
Echo "current pointer: ".next($names)."<br>";//Advance the internal pointer of an array
Echo "current pointer: ".current($names)."<br>";
Echo "current pointer: ".prev($names)."<br>";    // $mode = 'bike';Rewind the internal array pointer
Echo "current pointer: ".end($names)."<br>";     // $mode = 'plane'; Set the internal pointer of an array to its last element
echo "<br>";echo "<br>";


Echo "current pointer: ".reset($names)."<br>";

while ($name = current($names)){
    echo "$name : <br>";
    next($names);
}

echo "<br>";echo "<br>";

Echo "current pointer: ".current($names)."<br>";

Echo "current pointer: ".reset($names);

?>