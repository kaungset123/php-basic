<?php
include("databaseConnection.php");

## password hash function ##
function passGenerate($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}

function multiInsertData($qry){
    $db = dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result > 0 ? "Data inserted successfully  " . mysqli_insert_id($db): "Data insert failed !";
}


$pass_1 = passGenerate(45678);
$pass_2 = passGenerate(36489);
$pass_3 = passGenerate(54385);
$pass_4 = PassGenerate(47595);

$qry = "INSERT INTO user (name,email,password) VALUES ('Max+','max@gmail.com','$pass_1');";
$qry .= "INSERT INTO user (name,email,password) VALUES ('Stiing+','sting@gmail.com','$pass_2');";
$qry .= "INSERT INTO user (name,email,password) VALUES ('FireDragon','firedragon@gmail.com','$pass_3');";
$qry .= "INSERT INTO user (name,email,password) VALUES ('Lion','lion@gmail.com','');";

// multiInsertData($qry);

//=======================================================================//

function deleteData($id){
    $db = dbConnect();
    $qry = "DELETE FROM user WHERE id='$id'";
    $result = mysqli_query($db,$qry);
    echo $result > 0 ? "Deleted successfully" : "Delete failed!";
}

deleteData(4);