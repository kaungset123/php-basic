<?php

// ' fread '  VS   ' file_get_contents() '
// fread ==> return binary data .  limited character
// file_get_contents() ==> return String data  .  NO Limit



function readMyFile($file){

    // if(file_exists($file)){
    //     $handle = fopen($file,'r');
    //     $size = filesize($file);
    //     $result = fread($handle,$size);
    //     echo $result;
    // }else{
    //     echo "File doesn't exist.";
    // }


    // SAME RESULT

    if(file_exists($file)){
        $result = file_get_contents($file);
        echo $result;
    }else{
        echo "File doesn't exist.";
    }

}

readMyFile("hh.txt");