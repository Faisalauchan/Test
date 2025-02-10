<?php
$conn = new mysqli("localhost", "admin", "password", "users_db");
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$username = $_GET['username'];
$password = $_GET['password'];
$sql = "SELECT * FROM users WHERE username = '$username' AND password = 
'$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 echo "Login successful";
} else {
 echo "Invalid credentials";
}
?>
