<?php
$password = "fioqj2737ieHH@";

$result = preg_match('/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w]))/',$password);
echo $result ? "ture" : "false";