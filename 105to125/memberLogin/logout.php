<?php

// session_destroy() and unset is the same
// can use alternatively

session_start();
// session_destroy();
unset($_SESSION['username']);
unset($_SESSION['password']);

header("Location:index.php");

echo "<h1>Logout Page.<br></h1>";
include "links.php";
?>