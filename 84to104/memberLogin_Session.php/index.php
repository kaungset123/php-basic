<?php
session_start();
echo "Home Page.<br>";
include "links.php";

if(isset($_POST['submit'])){
    $user = $_POST['name'];
    $pass = $_POST['password'];

    echo "name is " . $user . "and password is" . $pass;

    if($user == "ksn" && $pass == "123"){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;
        header( "Location:member.php");
    }else{
        echo "you are not a valid user.";
    }
}

?>
<h1>Home Page</h1>
<form action=" "  method="post">
     <input type="text" name="name" placeholder="username"><br><br>
     <input type="password" name="password"><br><br>
     <button type="submit" name="submit">Login</button>
</form>