<?php
 
 // whenever you call the function , it will show the  value of $var as ' 1 '
 // because all the data in function are cleared from main memory anytime after you call the function
 // so it will always show ' 1 ' whenever you call it

 function myfun(){
    $var = 0;
    $var++;
    echo $var;
 }
 myfun();
 echo "<br>";
 myfun();
 echo "<br>";
 myfun();
 echo "<br>";
 myfun();
 echo "<br>";

echo "<br><br>";

//  the value of variable name with ' static ' will be kept in main memory whenever you call this function
// so the value with  increase by '1' whener you call it

 function Calcium(){
    static $num ;
    $num++;
    echo $num;
 }
 Calcium();
 echo "<br>";
 Calcium();
 echo "<br>";
 Calcium();
 echo "<br>";
 Calcium();
 echo "<br>";



 