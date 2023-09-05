<?php
$car = array("Toyota","Suzuki","Swiss","BMW","Lanbokini");

// for_loop
for($i=0;$i<count($car);$i++){
    echo $car[$i]."<br>";
}

// while_loop
$i=0;
while($i<count($car)){
    echo $car[$i]."<br>";
    $i++;
}

//do_while_loop

$j =0;
do{
    echo $car[$j]."<br>";
    $j++;
}while($j<count($car));




// taking elements from multidimentional array by nested_forloop
$multi_ary = array(
    array ("one","two","three","four","five"),
    array("six","seven","eight"),
    array("nine","ten","eleven","twelve")
);

for($i=0;$i<count($multi_ary);$i++){
    for($j=0;$j<count($multi_ary[$i]);$j++){
        echo $multi_ary[$i][$j]." ";
    }
    echo "<hr>";
}