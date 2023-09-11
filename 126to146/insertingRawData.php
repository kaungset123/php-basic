<?php
include("databaseConnection.php");

function passGenerate($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}


$users = json_decode(file_get_contents("users.json"));
// errDebugger($users);

/*
foreach($users as $user){
    $pass = PassGenerate($user->password);
    $qry = "INSERT INTO users VALUES ($user->id,'$user->name',$user->creator,'$user->email','$pass')";
    mysqli_query(dbConnect(),$qry)
}
*/

/*
$subjects = json_decode(file_get_contents("subjects.json"));
foreach($subjects as $subject){
    $qry = "INSERT INTO subjects (name) VALUES ('$subject->name') ";
    mysqli_query(dbConnect(),$qry);
}
*/

