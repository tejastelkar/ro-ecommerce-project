<?php
$servername = "sql103.infinityfree.com";
$username = "if0_38886634"; // Your InfinityFree MySQL username
$password = "tejastelkar9"; // Copy from your InfinityFree dashboard
$database = "if0_38886634_simple_ro_db"; // As shown in the DB list

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
