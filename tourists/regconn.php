<?php
if (isset($_POST['submit'])) {
    // Get the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $id_number = $_POST['id_number'];
    $datetime = $_POST['datetime'];
    
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "tourists";

    $conn = mysqli_connect($host, $username, $password, $database);

    // Insert the data into the database
    $sql = "INSERT INTO reg (username, password, email, gender, country, id_number, datetime) VALUES ('$username', '$password','$email','$gender','$country','$id_number','$datetime')";
    $result = mysqli_query($conn, $sql);

    // Check for errors
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    header("Location: sites.html");
    exit();
}
?>

