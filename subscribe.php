<?php
include 'config1.php'; // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize email input
    $email = $_POST['email'];

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Invalid email format.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
        exit;
    }

    // Check if email already exists
    $query = "SELECT id FROM subscribers WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<h3>This email is already subscribed.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
    } else {
        // Insert the new subscriber
        $query = "INSERT INTO subscribers (email) VALUES ('$email')";
        
        if (mysqli_query($conn, $query)) {
            echo "<h3>Subscription successful!</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    // Close the connection
    mysqli_close($conn);

    
} else {
    echo "<h3>Invalid request.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
}
?>
