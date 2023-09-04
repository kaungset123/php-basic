<?php

// escaping with header
$str = "There is a need,\n there is a way \n";
header("Content-type:text/plain");
echo $str ;

echo "There is a need,\t\t there is a way";
?>