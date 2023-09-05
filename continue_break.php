<?php

// Continue
for($i=0;$i<10;$i++){
    if($i==5){
        echo "now is ".$i."<br>";
        continue;
    }else{
        echo $i."<br>";
    }
}

echo "<br>";

$i=1;
while($i <= 10){
    if($i==3){
        echo "now is ".$i."<br>";
        $i++;
    }else{
        echo $i."<br>";
        $i++;
    }
}