<?php
$_file = "append.txt";
$handle = fopen($_file,'a');
fwrite($handle,"world ");
fclose($handle);