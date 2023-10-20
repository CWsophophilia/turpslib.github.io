<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "turpslib";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
    error_log("Connection failed: ".mysqli_connect_error());
}

?>
