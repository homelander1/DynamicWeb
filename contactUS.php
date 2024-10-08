<?php
function processForm($data)
{
    $dbserver = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dynamicweb";

    $conn = mysqli_connect($dbserver, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize and validate inputs
    $name = trim($data["name"]);
    $email = trim($data["email"]);

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO subscribers (name, email, subscription_date) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $name, $email);

    if ($stmt->execute()) {
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}
