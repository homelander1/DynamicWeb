<?php
function registrationForm($data)
{
    $dbserver = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dynamicweb";

    $conn = mysqli_connect($dbserver, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $first_name = trim($data["first_name"]);
    $last_name = trim($data["last_name"]);
    $email = trim($data["email"]);
    $password = $data["password"];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (email, password, first_name, last_name, registration_date) VALUES (?, ?, ?, ?, NOW())");
    $stmt->bind_param("ssss", $email, $password, $first_name, $last_name);

    if ($stmt->execute()) {
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
}
