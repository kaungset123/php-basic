<?php
include("databaseConnection.php");

function updateData($qq){
    $db = dbConnect();
    $result = mysqli_query($db , $qq);
    echo $result > 0 ? "Updated successfully!" : "Update fail!";
}

$qry = "UPDATE user SET name='Vcode' WHERE name='Stiing+'";
// updateData($qry);

$quary = "CREATE TABLE subjects (
        id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT ,
        name VARCHAR(225) UNIQUE NOT NULL ,
        created_at date ,
        updated_at date
)";
$result = mysqli_query(dbConnect(),$quary);
echo $result > 0 ? "table created successfully!" : "table crate fail!";