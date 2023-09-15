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

if(isset($_POST['submit'])){
    $postitle = $_POST["postitle"];
    $postype = $_POST["postype"];
    $postwriter = $_POST["postwriter"];
    $postcontent = $_POST["postcontent"];
    $file = $_FILES['file']; // array type

    // echo $postitle;
    // echo $postype;
    // echo $postwriter;
    // echo $postcontent;
    // echo var_dump($file);

    $imglink = mt_rand(time(),time()) . "_" . $_FILES['file']['name'] . mt_rand(time(),time());
    move_uploaded_file($_FILES['file']['tmp_name'], 'assets/upload/' . $imglink);

    $bol = insertPost($postitle,$postype,$postwriter,$postcontent,$imglink);

    // echo $bol;
    if($bol){
      echo "<div class='container my-5'> <div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
      </button>
       Post successfully inserted 
    </div></div>";
    }else{
      echo "<div class='container my-5'> <div class='alert alert-warning alert-dismissible fade show' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
      </button>
      Post insert fail
    </div></div>";
    }

}


?>
<!-- <h1>Hello Admin</h1> -->
<div class="container" my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"?>
        <section class="col-md-9">
            <?php
            $result = getAllPost(2);
            foreach($result as $post){
               echo ' <div class="card mb-4">
                   <div class="card-block p-3">
                         <h5>'.$post["title"].'</h5>
                         <p>'.substr($post["content"],0,100).'</p>
                         <a href="postEdit.php?pid='.$post["id"].'" class="btn btn-info btn-sm float-right">Edit</a>
                   </div>
               </div>';
            }
            ?>
        </section>
  </div>
</div>

<?php
  include_once "views/footer.php";
  include_once "views/base.php";
?>