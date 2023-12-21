<?php
/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'php_website_user');
define('DB_PASSWORD', 'lifeIsGreat2024!');
define('DB_NAME', 'website_users');
 
/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect to the database. Please try again later. " . $mysqli->connect_error);
}
?>