<?php 
include_once "views/top.php";
include_once "views/header.php";


if(isset($_GET['pid'])){
 $pid = $_GET['pid'];
  
}
?>

<div class="container" my-3>
  
    <div class="card col-md-8 offset-md-2">
        <?php
          $result = getSinglePost($pid);
          foreach($result as $data){
            echo '<div class="card-header">'.substr($data["title"],0,40).'<span class="float-right">'.$data["created_at"].'</span></div>';
            echo '<img src="assets/upload/'.$data["imglink"].'" alt="" class="img-fluid">';
            echo '<div class="card-block">'.substr($data["content"],0,2000).'</div>';
            echo '<div class="card-footer">'.$data["writer"].'</div>';
          }
        ?>
    </div>
</div>

<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>
