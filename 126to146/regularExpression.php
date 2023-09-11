<?php

$var = "Brighter Myanmar";

// $bol = preg_match("/Bri/",$var);
$bol = preg_match("/^Bri/",$var);  //firstest word
$bol = preg_match("/^Bri/",$var);  //lastest word
$bol = preg_match("/^mar$/",$var);  //exactly 'mar'

echo $bol ? "True" : "False";