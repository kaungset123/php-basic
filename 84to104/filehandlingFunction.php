<?php

function readMyFile($file){
    $handle = fopen($file,'r');
    $size = filesize($file);
    $result = fread($handle,$size);
    fclose($handle);
    echo $result;
}

function writeMyFile($file,$data){
    $handle = fopen($file,'w');
    fwrite($handle,$data);
    fclose($handle);
}

function createMyFile($file){
    $handle = fopen($file,'w');
    fclose($handle);
}

function appendMyFile($file,$data){
    $handle = fopen($file,'a');
    fwrite($handle,$data);
    fclose($handle);
}



appendMyFile("text.txt","PHP");