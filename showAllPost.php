<?php

include_once "views/top.php";
include_once "views/nav.php";
include_once "views/header.php";
include_once "sysgem/postgenerator.php";

if(checkSession("username")){
    if(getSession("username") != "kaungsettnaing"){
        header("Location:index.php");
    }
}else{
    header("Location:index.php");
}


$start = 0;
if(isset($_GET['start'])){
   $start = $_GET['start'];
}

$rows = getPostCount();

?>
<!-- <h1>Hello Admin</h1> -->
<div class="container" my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"?>
        <section class="col-md-9">
            <?php
            $result = getAllPost(2,$start);
            foreach($result as $post){
               echo ' <div class="card mb-4">
                   <div class="card-block p-3">
                         <h5>'.substr($post["title"],0,30).'</h5>
                         <p>'.substr($post["content"],0,100).'</p>
                         <a href="postEdit.php?pid='.$post["id"].'" class="btn btn-info btn-sm float-right">Edit</a>
                   </div>
               </div>';
            }
            ?>
        </section>
  </div>
</div>

<div class="container">
    <div class="col-md-4 offset-md-4">
          <nav aria-label="Page navigation example">
                 <ul class="pagination">       
                      <?php
                      $t=0;
                      for($i=0 ;$i < $rows ; $i+=10){
                         $t++;
                         echo '<li class="page-item"><a class="page-link" href="showAllPost.php?start='.$i.'">'.$t.'</a></li>';
                      }
                      ?>                       
                 </ul>
          </nav>
    </div>
</div>

<?php
  include_once "views/footer.php";
  include_once "views/base.php";
?>