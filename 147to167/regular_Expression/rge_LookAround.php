<?php

// positive look-ahead ?=
// positive look-behind ?<=
// negative look-ahead ?!
// negative look-behind ?<!

$str = "A1@BC";

## positive look-ahead ?=
// $bol = preg_match('/A(?=B)/',$str); // B follow A ?
// $bol = preg_match('/A(?=\d)/',$str); // any digit follow A ?


## positive look-behind ?<=
// $bol = preg_match('/(?<=B)C/',$str); // C follow B ? // positive look behind
// $bol = preg_match('/(?<=@)B/',$str);


## negative look-ahead ?!
// $bol = preg_match('/@(?!B)/',$str); // B not follow @ ?
// $bol = preg_match('/B(?!\d)/',$str); // any digit not follow B ?


## negative look-behind ?<!
// $bol = preg_match('/(?<!B)C/',$str); // B not follow @ ?
// $bol = preg_match('/(?<!\d)@/',$str); // any digit not follow B ?

// echo $bol ? "ture" : "false";



