<?php

session_start();
if(!isset($_SESSION['username'])){
    header("Location:index.php ");
}

echo "Member Page.<br>";
include "links.php";
?>