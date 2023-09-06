<?php

 if(isset($_POST['submit'])){

    // getting user info
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo "username => " .$username ."<br>";
    echo "email => " .$email ."<br>";
    echo "password => " . $password ."<br>";

    // getting radio info
    $gender = $_POST['gender'];
    echo "gender => " .$gender ."<br>";

    // getting checkbox info
    $subjects = $_POST['subjects'];
    echo "<span>Subjects => </span>";
    foreach($subjects as $subject){
        echo   $subject ." ";
    }

    // multiple files uploading
    foreach($_FILES['files']['tmp_name'] as $key => $value){
        move_uploaded_file($_FILES['files']['tmp_name'][$key],'upload/' . $_FILES['files']['name'][$key]);
    }

 }
?>

<form action=" <?php $_PHP_SELF ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="username" placeholder="username"> Usename<br><br>
    <input type="email" name="email" placeholder="email"> Email<br><br>
    <input type="password" name="password" placeholder="password"> Password<br><br>
    <h2>Choose your gender</h2>
    Male  <input type="radio" name="gender" value="male">  
    female  <input type="radio" name="gender" value="female"> 
    <h2>Choose subject</h2>
    <input type="checkbox" name="subjects[]" value="PHP"> PHP<br><br>
    <input type="checkbox" name="subjects[]" value="Java"> Java <br><br>
    <input type="checkbox" name="subjects[]" value="Python"> Python <br><br>
    <input type="checkbox" name="subjects[]" value="C++"> C++ <br><br>
    <input type="checkbox" name="subjects[]" value="C#"> C# <br><br>
    <input type="file" name="files[]" multiple><br><br>
    <input type="submit" name="submit" value="Register">
</form>