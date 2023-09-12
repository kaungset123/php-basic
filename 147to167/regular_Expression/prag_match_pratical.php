<?php

$var = "php357@gmail.com";
// $result = preg_match("/^\w+@[a-z]{5}+\.[a-z]{3}+\.[a-z]{2}$/",$var);

// echo $result ? "true " : "false" ;

$str = "brighter myanmar copyright @ 2009";
// $check = preg_replace("/[[:digit:]]+/","2023",$str);
// echo $check;


// $check = preg_replace(
//     array('/copyright/i','/[0-9]+/'),
//     array('Computer class','2023'),
//     $str
// );
// echo "<pre>".print_r($check,true) . "</pre>";


// $char="my phone number is 948 595 05";
// $show = preg_replace("/[[:alpha:]]/","",$char);
// $phone = preg_replace("/[[:space:]]/","",$show);
// echo $phone;


$style = "jjdji<span style='color:red;'>premier</span>";
$new = preg_replace("/<span style='color:red;'>(.*)<\/span>/","",$style);
echo $new;

// $str ="AD.skka";
// $bol = preg_match('/([^a-z])+\.[a-z]/',$str); // not small a to z =true // small atoz = false // ""= false
// // $bol = preg_match('/([^a-z]*)/',$str); // not small a to z =true // small atoz = false // ""= ture
// echo $bol ? "true" : "false";
