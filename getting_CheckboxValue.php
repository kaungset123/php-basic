<?php
if(isset($_POST['submit'])){

    echo "<h1>Choose your favourite color</h1>";
    echo "<span style='font-size:;'>Your favourite colors  : </span> ";
    if(isset($_POST['colors'])){
        $colors = $_POST['colors'];
        if(count($colors) > 0){
            foreach($colors as $colour){
                echo $colour ." ";
            }
        }
    }
    
}
?>

<form action="<?php $_PHP_SELF ?>" method="post">

    <input type="checkbox" name="colors[]" value="red" checked> Red<br>
    <input type="checkbox" name="colors[]" value="green"> Green<br>
    <input type="checkbox" name="colors[]" value="blue"> Blue<br>
    <input type="checkbox" name="colors[]" value="black"> Black<br>
    <input type="checkbox" name="colors[]" value="white"> White<br>
    <input type="submit" name="submit" value="Go">
</form>