<?php
include("databaseConnection.php");

function executeQuery($qq){
    $db = dbConnect();
   $result = mysqli_query($db,$qq);
   echo "Number of rows ==> " . mysqli_num_rows($result). "<hr>";
   
   if(mysqli_num_rows($result) > 0){
    foreach($result as $item){
        echo "Id  => " . $item["id"] . "<br>";
        echo "Name  => " . $item["name"] . "<br>";
        echo "Email  => " . $item["email"] . "<br>";
        echo "Password  => " . $item["password"];
        echo "<hr>";
       }
   }
 
}

// $qry = "SELECT * FROM user WHERE  id>2";
$qry = "SELECT * FROM user  LIMIT 2,3";

ExecuteQuery($qry);