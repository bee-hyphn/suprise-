<?php
$host = "localhost";      // Or 127.0.0.1
$user = "root";           // Default for XAMPP
$password = "";           // Empty by default in XAMPP
$dbname = "instagram_clone";  // Use your actual DB name

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Basic query (⚠️ not secure, for demo only)
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo "Login successful! Welcome, $username.";
} else {
    echo "Invalid login. Please try again.";
}

$conn->close();
?>
