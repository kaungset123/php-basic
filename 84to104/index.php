<?php
include("header.php");
?>
<?php
include_once("body.php"); // include_once will show only a time although you call it many time
include_once("body.php");
include("body.php");
include("body.php");
?>
<h2>Whre are u from bro</h2>
<?php
include("footer.php");
?>
   
   
<?php
echo "<hr>";
require("header.php");
// require_once("body.php");
// require_once("body.php");
require("body.php");
require("footer.php");


//====================================================================

## Deferences Between Include & Require
// File1
// File2
// File3

// if any error occur in File1
// Include will show warning for error and ' PROCESS ' 
// But Require will ' STOP ' and doesn't process

?>

