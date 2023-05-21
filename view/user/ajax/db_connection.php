<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "id13754968_chema1"; // MySQL user. eg. root ( if your on localserver)
$password = "Josemaria123$"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "id13754968_chema"; // MySQL Database name

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>