<?php

$x = 20;
$y = 30;

// if we want to use a variable in method body 
// we need to declare as 'global' in method body

function cal(){
    global $x;    
    global $y;
    $x=50;
    echo $x . $y;

}

cal($x);