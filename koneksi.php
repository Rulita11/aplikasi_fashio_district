<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_district";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Connection Failed:" . mysqli_connect_error());
}
