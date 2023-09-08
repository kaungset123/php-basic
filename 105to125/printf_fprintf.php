<?php

// %% = returns a percent sign
// %b = binary number
// %c = the character according to the ASCII value
// %d = signed decimal number(negative,zero or positive)
// %e = scientific nototation using a lowercase (e.g 1.2e+2)
// %E = scientific nototation using a lowercase (e.g 1.2E+2)
// %u = unsigned interger(equal to or greather than zero)
// %f = floating-point number (local setting aware)
// %F = floating-point number (not local setting aware)
// %g = shoter of %e and %f
// %G = shoter of %E and %f
// %o = octal number
// %s = String
// %x = hexadecimal number(lowercase)
// %X = hexadecimal number(uppercase)



$num = 5000000;
$city = "Rangoon";
$val = 1.2;

printf("There %u of people in %s .Double value is %f",$num,$city,$val);

$file = "printTest.txt";
$control = fopen($file,'w');
fprintf($control,"There %u of people in %s .Double value is %f",$num,$city,$val);