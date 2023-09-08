<?php

$file = "decode.json";
$control = fopen($file,'r');
$json = fread($control,filesize($file));

$ary = json_decode($json);

foreach($ary as $key => $value){
    foreach($value as $val){
        echo $val."<br>";
    }
}