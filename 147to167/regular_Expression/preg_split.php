<?php

// $str ="There is a need, there is a way!";

// $ary = preg_split("/[\s]/",$str);
// echo "<pre>".print_r($ary,true) . "</pre>";

// $var ="There is a need, there is a way!";
// $result =preg_split("//",$var,40,PREG_SPLIT_NO_EMPTY);
// echo "<pre>".print_r($result,true) . "</pre>";

// $var ="There is a need, there is a way!";
// $result =preg_split("//",$var,40,PREG_SPLIT_DELIM_CAPTURE);
// echo "<pre>".print_r($result,true) . "</pre>";

$var ="There is a need, there is a way!";
$result =preg_split("//",$var,40,PREG_SPLIT_OFFSET_CAPTURE);
echo "<pre>".print_r($result,true) . "</pre>";





