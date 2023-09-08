<?php

//  Default(i.e. empty) is ' false '

$pass = 616874;

$pass=md5($pass,true); // true ==> 16 binary // false(default) ==> 32 hexa
echo "md5 ==> ".$pass."<br>";
$pass = sha1($pass,true); // true ==> 20 binary // false(default) ==> 40 hexa
echo "sha1 ==> ".$pass."<br>";
$pass =crypt($pass,$pass); // use (DES , blowfish) methods
echo "crypt ==> ".$pass."<br>";


// Combining 3 hashing high security

$pass=md5($pass);
$pass=sha1($pass);
$pass=crypt($pass,$pass);
echo "combining 3 hashing ==>".$pass;
