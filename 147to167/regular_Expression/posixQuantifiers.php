<?php

## . => character
## \d => is digit ?
## \s => is space ?
## \W => is non-digit ?
## ^$ => empty string

$str ="pap";
// $result = preg_match('/[p.p]/',$str); ## p any one char p

// $result = preg_match('/^.{3}$/',$str); ## exactly three characters

// $result = preg_match('/<b>(.*)<\/b>/',$str); ## zero or more character in bold tag

// $result = preg_match('/p(hp)*/',$str); ##  hp is optional  ,p = true ,peijpioaei=true

// $result = preg_match('/p(hp)+/',$str); ## p=false ph=false php=true phpdnjajj=true

// $result = preg_match('/\d/',$str); ## digit contain in string ? djia7849=true

// $result = preg_match('/\s/',$str); ## space contain=true , space doesn't contain =false

//  $result = preg_match('/\w/',$str); ## work character // special char only =false // combining special char and other=true

//  $result = preg_match('/\W/',$str); ## special char only = true // combinig special char with other=true // char and ditit =false

$result = preg_match('/p\w{2,3}p/',$str); ## p + exactly two character + p

// $result = preg_match('/^$/',$str);

echo $result ? "True" : "False";
