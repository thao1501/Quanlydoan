<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "qldoan2"; 
$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?> 
