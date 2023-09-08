<?php

// Comparing two string

$str_1 = "apple";
$str_2 = "ruler";

$result = strcmp($str_1,$str_2);
echo $result;
echo "<br><br>";


if($result == 0){
    echo "Same string.";
}else{
    echo "Two string are not same.";
}
echo "<hr>";


//==============================================================


## finding index of specified character

$str = "Contrary is popular belief, Lorem Ipsum is not simply random text.
        It has roots in a piece of classical Latin literature from 45 BC, 
        making it over 2000 years old";

echo strpos($str,"is"); // return first occurance // case sensitive
echo "<br><br>";

echo strrpos($str,"is"); // return last occurance // case sensitive
echo "<br><br>";

echo stripos($str,"Is"); // return first occurance // NO case sensitive
echo "<br><br>";

echo strripos($str,"Is"); // return last occurance // NO case sensitive
echo "<br><br>";

echo substr($str,0,25);
echo "<br><br>";
echo substr($str,35,strlen($str)); // to the end of string
echo "<br><br>";

echo str_word_count($str); // count meaningful words (not character)
echo "<br><br>";

echo chunk_split($str,5,">>"); // splitting the string
