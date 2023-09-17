<?php
require_once "sysgem/db_hacker.php";

function insertPost($title,$type,$writer,$content,$imglink,$subject){
    $created_at = getTimeNow();
    $db = dbConnect();
    $qry = "INSERT INTO post (title,type,subject,writer,content,imglink,created_at)
            VALUES ('$title',$type,$subject,'$writer','$content','$imglink','$created_at')";            
            $result = mysqli_query($db,$qry);

            return $result;
}

function updatePost($title,$type,$writer,$content,$imglink,$id,$subject){
  
    $db = dbConnect();
    $qry = "UPDATE post SET title='$title',type=$type,subject=$subject,writer='$writer',
            content='$content',imglink='$imglink' WHERE id=$id";

    $result = mysqli_query($db,$qry);
    if($result){
        header("Location:showAllPost.php");
    }else{
        echo "<script>alert('Post Insert Fail')</script>";
    }

}

function getAllPost($type,$start){
    $db = dbConnect();
    $qry = "";
    if($type == 1){
        $qry = "SELECT * FROM post WHERE type=$type LIMIT $start,10";
    }else{
        $qry = "SELECT * FROM post LIMIT $start,10";
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

function getFilteredPost($subject,$type){
    $db=dbConnect();
    $qry = "SELECT * FROM post WHERE subject=$subject AND type=$type ";
    $result = mysqli_query($db,$qry);
    return $result;
}



function getAllSubject(){
    $db = dbConnect();
    $qry = "SELECT * FROM subject ";
    $result = mysqli_query($db,$qry);
    return $result;
}

function getPostCount(){
    $db = dbConnect();
    $qry = "SELECT * FROM post";
    $result = mysqli_query($db,$qry);
    // return $result;
    return mysqli_num_rows($result);
    // while($row = mysqli_fetch_assoc($result)){
    //     echo $row["title"]."<hr>";
    // }
}