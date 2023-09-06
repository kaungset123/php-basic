<?php

if(isset($_POST['submit'])){
    $color = $_POST['radio'];
    echo "your favourite color is  " . $color;
}
?>

<form action="<?php $_PHP_SELF ?>" method="post">

    <input type="radio" name="radio" value="red"> Red <br>
    <input type="radio" name="radio" value="green"> Green <br>
    <input type="radio" name="radio" value="blue"> Blue <br>
    <input type="radio" name="radio" value="black"> Black <br>
    <input type="radio" name="radio" value="white"> White <br>
    <input type="submit" name="submit">
</form>