<?php
include("databaseConnection.php");

function whileLoopFetch($qq){
    $db = dbConnect();
    $result = mysqli_query($db,$qq);

    if(mysqli_num_rows($result) > 0){
        while($rows = mysqli_fetch_assoc($result)){
            echo "Id  => " . $rows["id"] . "<br>";
            echo "Name  => " . $rows["name"] . "<br>";
            echo "Email  => " . $rows["email"] . "<br>";
            echo "Password  => " . $rows["password"];
            echo "<hr>";
        }
    }
}

$qry = "SELECT * FROM user";
whileLoopFetch($qry);