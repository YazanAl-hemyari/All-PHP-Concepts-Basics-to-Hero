<?php

$num = 20;

switch($num){
    case 10:
        echo "The value is 10";
        break;
    case 20:
        echo "The value is 20";
        break;
    case 30:
        echo "The value is 30";
        break;
    case 40:
        echo "The value is 40";
        break;
    default:
        echo "The value is not numeric";
}
echo "<br>";echo "<br>";
$color ="blue";
switch($color){
    case "red":
        echo "Red!";
        break;
    case "blue":
        echo "Blue!";
        break;
    case "green":
        echo "Green!";
        break;
    default:
        echo "its not a color!";
}
echo "<br>";echo "<br>";
$year = 2019;
switch (($year-4) % 12){
case  0: $zodiac= 'Rat'; break;
case  1: $zodiac= 'Ox';break;
case  2: $zodiac= 'Tiger';break;
case  3: $zodiac= 'Rabit';break;
case  4: $zodiac= 'Dragon';break;
case  5: $zodiac= 'Snake';break;
case  6: $zodiac= 'Horse';break;
case  7: $zodiac= 'Goat';break;
case  8: $zodiac= 'Monkey'; break; 
case  9: $zodiac= 'Rooster';break;
case 10: $zodiac= 'Dog';break;
case 11: $zodiac= 'Pig';break;
}

echo"{$year} is the year of the {$zodiac}";
echo "<br>";echo "<br>";

$contact="Phone";

switch ($contact){
    case "Phone":
        echo "0932980";
        break;
    case "Email":
        echo "amrsarea@gmail.com";
        break;
    case "Skype":
        echo "adlakdj";
        break;
    default:
}

echo "<br>";echo "<br>";

$user="Student";

switch ($user){
    case "Student":
        echo "Welcome student";
        break;
    case "Admin":
        echo "Welcome admin";
        break;
    case "Teacher":
        echo "Welcome teacher";
        break;
    default:
}

echo "<br>";echo "<br>";

$hotel_profile1="1star";
$hotel_profile2="2star";
$hotel_profile3="3star";
$hotel_profile4="4star";
$hotel_profile5="5star";

switch ($hotel_profile5){
    case "1star":
        echo "hotal 1star";
        break;
    case "2star":
        echo "hotal 2star";
        break;
    case "3star":
        echo "hotal 3star";
        break;
        
    case "4star":
        echo "hotal 4star";
        break;
    case "5star":
        echo "hotal 5star";
        break;

    default:
}

echo "<br>";echo "<br>";

$hotel_profile1="1star";
$hotel_profile2="2star";
$hotel_profile3="3star";
$hotel_profile4="4star";
$hotel_profile5="5star";

switch ($hotel_profile2){
    case "1star":
    case "2star":
    case "3star":
        echo "hotal 1star";
        break;
        
    case "4star":
        echo "hotal 4star";
        break;
    case "5star":
        echo "hotal 5star";
        break;
        
    default:
}

?>