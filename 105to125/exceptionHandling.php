<?php

// texthandling.php is not actually exist
// it will occur error  

$file ="texthandling.php";

if(file_exists($file))
    echo "File exist";
else
    // echo "File doesn't exist";   // show error-message . // echo "hello bro"
   // exit("File doesn't exist");     // show "File doesn't exist" message // Exit and not echo "hello bro" 
    die("File doesn't exist");      // similar to 'exit function'


$control = fopen($file,'r');
echo "hello bro";
echo "<hr>";






