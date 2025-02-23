<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'config1.php'; 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check if user exists
    $query = "SELECT email, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            echo "<h3>Login successful</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
        } else {
            echo "<h3>Invalid password!</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
        }
    } else {
        echo "<h3>User not found!</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
    }
} else {
    echo "<h3>All fields are required!</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
}

mysqli_close($conn);
?>
