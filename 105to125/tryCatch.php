<?php

//error_reporting(0);   // Hiding Error Warning
##  Try-catch  ##

$myfile = "tryCatch.txt";

try{
    if(file_exists($myfile)){
        echo "File exit.";
    }else{
        throw new Exception("we didn't get file."); // store the message in variable $err
    }
}catch(Exception $err){
    echo $err-> getMessage(); // showing the error message
}