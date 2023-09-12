<?php


date_default_timezone_set('Asia/Rangoon');
// $ary = getdate();
// echo "<pre>" . print_r($ary,true) . "</pre>";
// echo $ary["wday"];


// a = am , A =AM , p = pm , P = PM 
// d = day of a month leading zero
// j = day of a no leading zero
// D = day of a week (3 letter)
// l = day of a week (full format)
// F = month
// h = 12 hour format
// H = 24 hour format
// g = 12 hour format no leading zero
// G = 24 hour format no leading zero
// i = minute
// s = second
// L = leap year or not
// m = month of year
// M = month of year (letter)
// m = month of year leading zero
// r = format time
// U = time stamp
// Y = year full
// y = year two digit
// z = day of year pass
// Z = GMT 

$date = date('h-m-s',time());
echo $date;