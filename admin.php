<?php

include_once "views/top.php";
include_once "views/header.php";


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
    $subject = $_POST["subject"];
    $file = $_FILES['file']; // array type
   

    // echo $postitle ."<br>";
    // echo $postype ."<br>";
    // echo $postwriter ."<br>";
    // echo $postcontent ."<br>";
    // echo $subject ."<br>";
    // echo var_dump($file);


    $imglink = mt_rand(time(),time()) . "_" . $_FILES['file']['name'] . mt_rand(time(),time());
    move_uploaded_file($_FILES['file']['tmp_name'], 'assets/upload/' . $imglink);

    $bol = insertPost($postitle,$postype,$postwriter,$postcontent,$imglink,$subject);

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
      <form method="post" action="admin.php" enctype="multipart/form-data" class="mb-5 table-bordered p-5">
            <h2 class="text-center text-danger english">Post Insert Form</h2>
                 <div class="form-group">
                        <label for="postitle" class="english" >Post Title</label>
                         <input type="text" class="form-control"  class="english" id="postitle" name="postitle" >
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                 </div>

            <div class="form-group">
                 <label for="postype" class="english" >Post Type</label>
                    <select  class="form-control" id="postype" name="postype">
                         <option value="1">free post</option>
                        <option value="2">paid post</option>
                     </select>
            </div>

            <div class="form-group">
                 <label for="subject" class="english" >Subject</label>
                    <select  class="form-control" id="subject" name="subject">
                        <?php 
                              $subjects = getAllSubject() ;
                              foreach($subjects as $data){
                                echo "<option value='".$data["id"]."'>".$data["name"]."</option>";
                              }
                        ?>
                      
                     </select>
            </div>

             <div class="form-group">
                    <label for="postwriter" class="english" >Post Writer</label>
                    <input type="text" class="form-control"  class="english" id="postwriter" name="postwriter" >
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
             </div>

        
             <div >
                    <input type="file" name="file">
             </div>
        

            <div class="form-group">
                     <label for="postcontent" class="english" >Content</label>
                    <textarea type="text"  class="form-control" id="postcontent" 
                    rows="10"
                    name="postcontent"></textarea>
            </div>

           

            <div class="row no-gutters justify-content-end">
                    <button class="btn btn-outline-primary mr-2">Cancle</button>
                    <button type="submit" name="submit" class="btn btn-primary">Post</button>
            </div>

        
      </form>
    </section>
  </div>
</div>

<?php
  include_once "views/footer.php";
  include_once "views/base.php";
?>