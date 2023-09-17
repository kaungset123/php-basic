<?php 
include_once "views/top.php";



 

?>


<div class="container " my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"?>
    <section class="col-md-9 mt-5">
      <div class="row">
          <?php
              $result="";
              if(checkSession("username")){
                    $result = getFilteredPost($_GET["sid"],2);
              }else{
                $result = getFilteredPost($_GET["sid"],1);
              }
              foreach($result as $post){
                $pid = $post["id"];
                echo '<div class="col-md-6 mb-3">
                           <div class="card p-4">
                              <div class="card-block">
                                   <h5>'.substr($post["title"],0,30).'</h5>
                                   <p>'.substr($post["content"],0,100).'</p>
                                   <a href="postdetails.php?pid='.$pid.'" class="btn btn-info btn-sm float-right">Detail</a>
                              </div>
                            </div>
                       </div> ';
              }
          ?>


        
      </div>
    </section>
  </div>
</div>



<?php 
include_once "views/footer.php";
include_once "views/base.php";
?>