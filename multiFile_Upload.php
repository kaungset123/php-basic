<?php



if(isset($_POST['submit'])){
   foreach($_FILES['files']['tmp_name'] as $key => $value){
    echo $_FILES['files']['name'][$key]."<br>";
    echo $_FILES['files']['tmp_name'][$key]."<br>";
    echo $_FILES['files']['size'][$key]."<br>";
    echo $_FILES['files']['type'][$key]."<br>";

    move_uploaded_file($_FILES['files']['tmp_name'][$key], 'upload/' . $_FILES['files']['name'][$key]);

   }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" name="submit" value="Upload">
</form>