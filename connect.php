<?php
$mysqli = new mysqli('connect-c9.ckrgpw7vzckl.us-east-2.rds.amazonaws.com', 'tbdUser', 'TBD_coolRanchDoritos', 'tbd_Database', '3306');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
?>