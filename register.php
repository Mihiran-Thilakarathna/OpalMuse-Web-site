<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config1.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields are set
    if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {

        // Retrieve and sanitize form inputs
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        // SQL query to insert user data
        $query = "INSERT INTO users (fullname, email, password) VALUES ('$name', '$email', '$password')";

        // Execute query and check if successful
        if (mysqli_query($conn, $query)) {
            echo "<h3>Registration successful!</h3> <a href='http://localhost/OpalMuse/login.html'>Login here</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        // Handle missing fields
        echo "<h3>All fields are required!</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
    }
}
?>
