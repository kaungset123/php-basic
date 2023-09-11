<?php
include("databaseConnection.php");

## retrieving all row from table ##

echo "<h2>Retrieving all row </h2>";

function executeQuery($qq){
    $db = dbConnect();
   $result = mysqli_query($db,$qq);
   echo "Number of rows ==> " . mysqli_num_rows($result). "<hr>";
   
   if(mysqli_num_rows($result) > 0){
    foreach($result as $item){
        echo "Id ==> " . $item["id"] . "<br>";
        echo "Name ==> " . $item["name"] . "<br>";
        echo "Email ==> " . $item["email"] . "<br>";
        echo "Password ==> " . $item["password"];
        echo "<hr>";
       }
   }
 
}
$qry = "SELECT * FROM user";
executeQuery($qry);

echo "<hr>";


## retriving specified row ##

echo "<h2>Retrieving Specified row </h2>";

function retrieveSingleData($id){
    $qry = "SELECT * FROM user WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    if(mysqli_num_rows($result) > 0){
        foreach($result as $item){
            echo "Id ==> " . $item["id"] . "<br>";
            echo "Name ==> " . $item["name"] . "<br>";
            echo "Email ==> " . $item["email"] . "<br>";
            echo "Password ==> " . $item["password"];
            echo "<hr>";
        }
    }
}
retrieveSingleData(1);



