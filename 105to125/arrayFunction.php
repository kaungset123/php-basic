<?php

$ary = array();

echo count($ary)."<br>";

array_push($ary,"One");
array_push($ary,"Two");
array_push($ary,"Three");

echo count($ary)."<br>";
print_r($ary)."<br>";
echo "<br>";

array_pop($ary); // deleting last one
print_r($ary)."<br>";
echo "<br>";

array_shift($ary); // deleting first one
print_r($ary)."<br>";