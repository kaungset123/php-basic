<?php
$file = "writing.txt"; // this file will be created if it doesn't exist when run in browser
$control = fopen($file,'w');
fwrite($control,"I am sent to writing.txt    ");
fclose($control);



