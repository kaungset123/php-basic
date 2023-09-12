<?php

// alpha = character only both small and capital

$var = "th  is12  3is748    my8%^&&var";

// $result = preg_replace('/[[:alpha:]]/',"$",$var); // replaciing all character with $
// $result = preg_replace('/[[:digit:]]/'," ",$var); // replacing the digit with a blank
// $result = preg_replace('/[[:alnum:]]/',"",$var); // replacing all char and digit with blank
$result = preg_replace('/[[:space:]]/',"_LOL_",$var); // replacing each space with __

echo $result;

// $result = preg_match('/\s/',$var); // if space involve in string
// echo $result ? "True" : "False";