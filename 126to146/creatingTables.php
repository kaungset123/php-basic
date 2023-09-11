<?php
include("databaseConnection.php");


/*$qry = "CREATE TABLE IF NOT EXISTS users(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    name VARCHAR(225) NOT NULL ,
    creator INT(10) NOT NULL ,
    email VARCHAR(225) NOT NULL ,
    password VARCHAR(225) NOT NULL ,
    UNIQUE KEY email (email)
)";
*/

/*$qry = "CREATE TABLE IF NOT EXISTS subjects (
    id INT(10) NOT NULL  AUTO_INCREMENT ,
    name VARCHAR(225) NOT NULL ,
    PRIMARY KEY (id)
)";
*/

/*$qry = "CREATE TABLE IF NOT EXISTS tutorials (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    subject_id INT(3) NOT NULL ,
    title VARCHAR(225) NOT NULL ,
    created_by INT(3) NOT NULL 
)";
*/

$qry = "CREATE TABLE IF NOT EXISTS tutorial_views(
    id INT(10) NOT NULL PRIMARY KEY ,
    static_view INT(10) NOT NULL ,
    unique_view INT(10) NOT NULL 
)";

$result = mysqli_query(DbConnect(),$qry);
echo $result > 0 ? "table created successfully!" : "table crate fail!";
