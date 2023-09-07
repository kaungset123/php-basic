<?php
$file = "text.txt"; // file path 
$control= fopen($file,'r'); // file opening
$size = filesize($file); // file size
$result= fread($control,$size); // file reading
echo $result;