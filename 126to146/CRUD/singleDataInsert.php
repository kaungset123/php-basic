<?php
include("databaseConnection.php");

## inserting data 
function insertData($qq){
    $db = dbConnect();
    $result = mysqli_query($db,$qq);
    echo $result > 0 ? "Data inserted successfully  " . mysqli_insert_id($db): "Data insert failed !";
}


## password hash function ##
function passGenerate($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}
$pass = passGenerate(12345);
$qry = "INSERT INTO user VALUES (0,'pessi','pessi@gmail.com','$pass','')";
insertData($qry);

echo "<br>";

## inserting data by verifing the user name ##

function insertUniqueData($name,$email,$pass){
    $db = dbConnect();
    $quary= "SELECT * FROM user WHERE name='$name'";
    $unique = mysqli_query($db,$quary);
    if(mysqli_num_rows($unique) > 0) {
       echo "This username is already exist.";
    }else{
        $qs = "INSERT INTO user (name,email,password) 
        VALUES 
        ('$name','$email','$pass')
            ";
        $result = mysqli_query($db,$qs);
        echo $result > 0 ? "Data inserted successfully  " . mysqli_insert_id($db): "Data insert failed !";
    }
}
$pass = passGenerate(13567);
insertUniqueData("Shark","shark@gmail.com","$pass");