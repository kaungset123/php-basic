<?php
require_once "sysgem/postgenerator.php";

$data = file_get_contents ("assets/gendata.json");

// echo $data;

$posts= json_decode($data,true);
$types = [1,2];
$i=0;
$writers = ["captain","ironman","spiderman","superman"];
$imglinks =["1694782276_girl.jpg","1694765945_kid.jpg","1694696626_train.jpg","1694707281_gangroad.jpg"];
$subjects = [1,2,3,4];
// "<pre>".print_r($posts,true)."</pre>";

foreach($posts as $post){
    $i++;
    $title = $post["title"];
    $content = $post["content"];
    $type =$types[$i%2];
    $writer =$writers[$i%4];
    $imglink =$imglinks[$i%4];
    $subject =$subjects[$i%4];

    insertPost($title,$type,$writer,$content,$imglink,$subject); // inserting generated-post into database
}