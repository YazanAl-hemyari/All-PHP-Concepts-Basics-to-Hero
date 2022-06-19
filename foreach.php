<?php

// $names=array("amr","ahmed","moh","bob");
// $ages=array(1,2,3,4,5,6);

// foreach ($names as $name){// its used for arrays 
//     echo $name."<br>";
// }

// foreach ($ages as $n){// its used for arrays
//     echo $n."<br>";
// }

$profile=array("F_name"=>"amr","L_name"=>"sarea","Age"=>19 ,"Email"=>"amrsarea@gmail.com","Location"=>"Yemen / Sana'a");// foreach for asso_array

foreach ($profile as $n=>$v){// its used for arrays
    echo "$n => $v <br>";
}

echo "<br>";echo "<br>";

$profile=array("F_name"=>"amr","L_name"=>"sarea","Age"=>19 ,"Email"=>"amrsarea@gmail.com","Location"=>"Yemen / Sana'a");// foreach for asso_array

foreach ($profile as $n=>$v){// its used for arrays
    $keys = str_replace("_", " ", $n);
    echo "$keys => $v <br>";
}

echo "<br>";echo "<br>";

$profile=array("F_name"=>"amr","L_name"=>"sarea","age"=>19 ,"Email"=>"amrsarea@gmail.com","Location"=>"Yemen / Sana'a");// foreach for asso_array

foreach ($profile as $n=>$v){// its used for arrays
    $keys = ucfirst(str_replace("_", " ", $n));
    echo "$keys => $v <br>";
}

echo "<br>";echo "<br>";

$profile=array("F_name"=>"amr","L_name"=>"sarea","age"=>"19" ,"Email"=>"amrsarea@gmail.com","Location"=>"Yemen / Sana'a","Salary"=>3000);// foreach for asso_array

foreach ($profile as $n=>$v){// its used for arrays
    if (is_int($v)) {
        $keys = ucfirst(str_replace("_", " ", $n));
        echo "$keys =>". $v."$<br>"; 
        
    }
    else{
        $keys = ucfirst(str_replace("_", " ", $n));
        echo "$keys =>". $v."<br>"; 
    }
     
}


// echo "<br>";echo "<br>";
// print_r ($profile);

?>