<?php

// ( / , + , % , ! , # ) can be used altenativly
// ^something  => firstest words
// something$ => lastest words
// ^something$ => exactly same
// add (i) at the last => not case sensitivity

$var = "Brighter Myanmar";

// $bol = preg_match("/Bri/",$var);
$bol = preg_match("!^bri!i",$var);  //firstest word
// $bol = preg_match("#mar$#",$var);  //lastest word
// $bol = preg_match("/^mar$/",$var);  //exactly 'mar'

echo $bol ? "True" : "False";

echo "<br>";

// ==========================================================

$str = "a";   

// $result = preg_match("![4-9]!",$str); 
// $result = preg_match("![a-z] | [A-Z]!",$str);
// $result = preg_match("!^[a-e]!",$str); // starting with range character?
// $result = preg_match("![a-e]!",$str); // not having between range = false // having in range = true // only in range
// $result = preg_match("#[^a-e]#",$str); // not having between range = true // having in range = false // beside other
$result = preg_match("#^[^a$]#",$str); // having a in string = false // not having a = true // exactly a=false ****


echo $result ? "Yes" : "No";
echo "<br>";

//=================================================

$word = "bbbbbbb";

$check = preg_match("/p+/",$word); // one or more p = true 
$check = preg_match("/p* && [4-9]+/",$word); //  p is not must but 4to9 if must // '?' can be used alternativly
$check = preg_match("/a{3}/",$word); //  'a pair of three a or more'(i.e 'aaa') // else 'false'
$check = preg_match("/b{2,3}/",$word); // a pair of two or three of 'b'

echo $check ? "Right" : "Wrong";