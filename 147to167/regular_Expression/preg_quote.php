<?php

// preg_quote function add / before special char to notice

// $str = "there is a dog behind you!";
// echo $str . "<br>";
// $result = preg_quote($str);
// echo $result;

// setting special char manually
$str = "there is a dog behind you!";
echo $str . "<br>";
$result = preg_quote($str,'e');
echo $result;