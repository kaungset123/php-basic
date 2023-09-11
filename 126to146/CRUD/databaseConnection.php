<?php

define("DB_HOST","localhost");
define("DB_NAME","tester");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno($db) > 0)
        die("Connection Fail!");
    else
        return $db;   
}


function errDebugger($data){
    echo "<pre>" .print_r($data,true). "</pre>"; 
}

// errDebugger(dbConnect());
// dbConnect();
