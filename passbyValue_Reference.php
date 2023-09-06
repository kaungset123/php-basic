<?php

## PASS_BY_VALUE
// two variable are placed in two seperated places in memory
// when these two variable are reassigned
// they will show these new values(i.e. reassigned values) seperatly
// they will not effect each other no more after they are reassigned

$a = 10;
$b = $a;

$a = 15; // reassign of a
$b = 20; // reassign of b

echo "<h2>PASS_BY_VALUE</h2>";
echo "Value of a ==>".$a;
echo "<br>";
echo "Value of b ==>" .$b;
echo "<hr>";

//=====================================================================//

## PASS_bY_REFRENCE
// two values are depending each other
// reassigning of values ' EFFECT ' these value each other


$x = 30;
$y = &$x;

$x=70; // reassign of x
$y=80; // reassign of y

echo "<h2>PASS_BY_REFRENCE</h2>";
echo "Value of a ==>".$x;
echo "<br>";
echo "Value of b ==>" .$y;
echo "<hr>";

//=====================================================================//

## PASS_bY_VALUE in FUNCTION

$age = 10;

function Show($age){
    $age = 20;
    echo "My age in function ==>  " . $age . "<br>";
    
}

echo "<h2>PASS_BY_VALUE in function</h2>";
Show($age);
echo "My age ousite function ==> " . $age;
echo "<hr>";

//=====================================================================//

## PASS_bY_REFRENCE in function

$val = 30;

function View(&$val){
    $val = 90;
    echo "My value in function ==>  " . $val . "<br>";
}

echo "<h2>PASS_bY_REFRENCE in function</h2>";
View($val);
echo "My value ousite function ==> " . $val;
echo "<hr>";