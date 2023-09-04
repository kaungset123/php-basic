<?php
// "" or blank string  => false
// "0" => false
// null => false
// empty array => false

// $bol = ""; //F
// $bol = "0"; // F
//$bol = "?+:[ofoefajkjfj;a"; // T
// $bol = null; // F
 $bol = array(); // F


echo $bol ? "TRUE" : "FALSE";

