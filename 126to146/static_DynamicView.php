<?php
include("databaseConnection.php");

$db = dbConnect();

$qry = "SELECT * FROM tutorials";
$result = mysqli_query($db,$qry);
foreach($result as $item){
    $id = $item["id"];
    $static_view = mt_rand(1000,1000000);
    $unique_view = mt_rand(100,10000);

    $qry = "INSERT INTO tutorial_views VALUES ($id,$static_view,$unique_view)";
    mysqli_query($db,$qry);
}