<?php
if (isset($_POST['submit'])) 
// Get username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];

// Database credentials
$host = "localhost";
$db_username = "root";
$db_password = "";
$database = "tourists";

// Create a new mysqli object
$db = new mysqli($host, $username, $password, $database);

// Check if connection was successful
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
}

// Query the database to check if username and password match
$query = "SELECT * FROM tours WHERE username='$username' AND password='$password'";
$result = $db->query($query);

if ($result->num_rows == 1) {
    // Login successful, redirect to sites.html
    header('Location: sites.html');
    exit();
} else {
    // Login failed, redirect back to login page
    header('Location: login.html');
    exit();
}
?>
