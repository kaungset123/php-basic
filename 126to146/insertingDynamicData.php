<?php
include("databaseConnection.php");

$db = dbConnect();
$tutorials = json_decode(file_get_contents("tutorials.json"));

foreach($tutorials as $tutorial){
    $qry = "SELECT name FROM subjects WHERE id=$tutorial->subject_id";
    $result = mysqli_query($db,$qry);
    $name ="";
    foreach($result as $row){
        $name = $row["name"];
    }

    $subjectid = $tutorial->subject_id;
    $creator = $tutorial->creator_id;
    $t = 0;
    for($i = $tutorial->start_id;$i <= $tutorial->end_id;$i++){
        $title = $name . " " . ++$t;
        $qry = "INSERT INTO tutorials (subject_id,title,created_by) VALUES ($subjectid,'$title',$creator)";
        mysqli_query($db,$qry);
    }
}

