<?php
include 'config1.php'; // Include database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form inputs directly from POST data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Check if any required field is empty
    if (empty($name) || empty($email) || empty($message)) {
        echo "<h3>Please fill in all required fields.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
        exit;
    }

    // Construct the SQL query to insert form data into the database
    $query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the SQL query to insert data
    if (mysqli_query($conn, $query)) {
        echo "<h3>Your message has been submitted successfully.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
    } else {
        // Display an error message if query execution fails
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Handle invalid form submissions
    echo "<h3>Invalid form submission.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
}
?>
