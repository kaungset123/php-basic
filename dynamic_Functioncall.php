<?php


// Dynamic function
function premier(){
    echo "This is also a coffee name";
}
$coffee = "premier"; // assigning function's name('premier') to $coffee 
$coffee(); // similar to 'premier()'





// checking function  exit or not with  ' function_exists() '

function toyota(){
    echo "I'm from Japan";
}

$car = "toyta";   // assigning function with ' wrong spelling '

$bol = function_exists($car);   // this function return true or false
if($bol){
    $car(); // If ture we will process this function
}else{
    echo "This function doesn't exit.";  // If false
}