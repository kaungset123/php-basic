<?php

include_once "views/top.php";
include_once "views/header.php";



if($_GET["pid"]){
    $pid = $_GET["pid"];
    
    $result = getSinglePost($pid);
    $posts = [];
    foreach($result as $data){
        $posts["title"]=$data["title"];
        $posts["writer"]=$data["writer"];
        $posts["imglink"]=$data["imglink"];
        $posts["content"]=$data["content"];
    }


}

if(isset($_POST["submit"])){
    $file = $_FILES["file"];
    $imgname = " ";
    if($_FILES["file"]["name"] != null){
        $imgname = mt_rand(time(),time())."_".$_FILES["file"]["name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"assets/upload/".$imgname);
       
    }else{
       $imgname = $_POST["oldimg"];
    }
   $title = $_POST["postitle"];
   $postype = $_POST["postype"];
   $postwriter = $_POST["postwriter"];
   $postcontent = $_POST["postcontent"];
   $subject = $_POST["subject"];
   $imglink = $imgname;
   $pid = $_GET["pid"];

//    echo $pid;

   updatePost($title,$postype,$postwriter,$postcontent,$imglink,$pid,$subject);

}


?>
<!-- <h1>Hello Admin</h1> -->
<div class="container" my-3>
  <div class="row">
    <?php include_once "views/sidebar.php"?>
    <section class="col-md-9">
      <form method="post" action="postEdit.php?pid=<?php echo $_GET["pid"]; ?>" enctype="multipart/form-data" class="mb-5 table-bordered p-5">
            <h2 class="text-center text-danger english">Post Edit Here</h2>
                 <div class="form-group">
                        <label for="postitle" class="english" >Post Title</label>
                         <input type="text" class="form-control"  class="english" id="postitle" name="postitle" 
                             value="<?php echo $posts["title"] ?>">
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
                    <input type="text" class="form-control"  class="english" id="postwriter" name="postwriter" value="<?php echo $posts["writer"] ?>"> 
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
             </div>

        
             <div >
                    <input type="file" name="file">
                    <input type="hidden" name="oldimg" value="<?php echo $posts["imglink"] ?>" >
             </div>
        

            <div class="form-group">
                     <label for="postcontent" class="english" >Content</label>
                    <textarea type="text"  class="form-control" id="postcontent" 
                    rows="10"
                    name="postcontent"><?php echo $posts["content"] ?></textarea>
            </div>

           

            <div class="row no-gutters justify-content-end">
                    <button class="btn btn-outline-primary mr-2">Cancle</button>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </div>
            <img src="assets/upload/<?php echo $posts["imglink"]?>" alt="" class="img-fluid">  
      </form>
    </section>
  </div>
</div>

<?php
  include_once "views/footer.php";
  include_once "views/base.php";
?>