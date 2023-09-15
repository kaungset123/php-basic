<?php
require_once "sysgem/db_hacker.php";

function insertPost($title,$type,$writer,$content,$imglink){
    $created_at = getTimeNow();
    $db = dbConnect();
    $qry = "INSERT INTO post (title,type,writer,content,imglink,created_at)
            VALUES ('$title',$type,'$writer','$content','$imglink','$created_at')";            
            $result = mysqli_query($db,$qry);

            return $result;
}

function getAllPost($type){
    $db = dbConnect();
    $qry = "";
    if($type == 1){
        $qry = "SELECT * FROM post WHERE type=$type";
    }else{
        $qry = "SELECT * FROM post";
    }

    $result =mysqli_query($db,$qry);
    return $result;
}

function getSinglePost($pid){
    $db = dbConnect();
    $qry = "SELECT * FROM post WHERE id=$pid";
    $result = mysqli_query($db,$qry);
    return $result;
}