<?php
/* Database credentials. Basically the details of the database */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'finalyear');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check the connection to the DB.
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>