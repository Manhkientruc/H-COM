<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "h-com";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Kết nối MySQL thất bại: " . mysqli_connect_error());
}
?>