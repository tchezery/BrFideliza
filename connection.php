<?php

$hostname = "localhost";
$database_name = "brfideliza";
$username = "root";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database_name);

if ($mysqli->connect_errno) {
    die("Connection failed: (" . $mysqli->connect_errno .") " . $mysqli->connect_error);
}
?>
