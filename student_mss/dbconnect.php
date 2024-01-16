<?php
$host = "localhost";
$dbname = "id21726866_gelyn1";
$user = "id21726866_rosario1";
$password = "GelynRosario#1";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
