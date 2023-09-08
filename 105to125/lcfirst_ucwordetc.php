<?php


$str = "It is a Long established fact that a reader will be 
distracted by the readable content of a page when looking at 
its layout. The point of using Lorem Ipsum ";


echo lcfirst($str); // only for fistest word
echo "<br><br>";

echo ucwords($str); // for every start character
echo "<br><br>";

echo strtoupper($str); // for every character
echo "<br><br>";

echo strtolower($str); // for every character
echo "<br><br>";

//=====================================================


$char = "/Hello/";


echo strlen($char);
echo "<br><br>";
$var = trim($char,"/"); // both sides trim
echo strlen($var);
echo "<br><br>";


$var_1 = ltrim($char,"/"); // left trim 
echo strlen($var_1);
echo "<br><br>";


$var_2 = rtrim($char,"/"); // left trim 
echo strlen($var_2);
echo "<br><br>";
