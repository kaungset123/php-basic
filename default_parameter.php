<?php

// If we don't "set parameter" , function will "show '3' as default value"
// If we set paramter , function will show this parameter eg.5

function doIt($num=3){
    echo "value is =>" . $num;
}
doIt(5);

echo "<br>";

# Return function
 
function cal($num_1){
    return $num_1+3;                
}                                   
echo "Calculation result is " . cal(5);

