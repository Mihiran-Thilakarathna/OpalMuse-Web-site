<?php
include 'config1.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form inputs directly
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $order_number = $_POST['order'];
    $service = $_POST['service'];
    $message = $_POST['message'];

    // Check if required fields are empty
    if (empty($contact) || empty($email) || empty($order_number) || empty($service)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // SQL query to insert data
    $query = "INSERT INTO user_requests (name, contact, email, order_number, service, message) VALUES ('$name', '$contact', '$email', '$order_number', '$service', '$message')";

    // Execute the query
    if (mysqli_query($conn, $query)) {
        echo "<h3>Your request has been submitted successfully.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
} else {
    echo "<h3>Invalid form submission.</h3> <a href='http://localhost/OpalMuse/index.html'>Go to home page</a>";
}
?>
