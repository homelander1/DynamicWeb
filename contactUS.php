<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Simple input validation
    if (!empty($name) && !empty($email)) {
        // Store the data in a file called contacts.txt
        $file = fopen("contacts.txt", "a");
        $entry = "Name: $name, Email: $email\n";
        fwrite($file, $entry);
        fclose($file);

   
    } else {
        echo "Please fill in all fields.";
    }
} else {
    http_response_code(405);
    echo "Method Not Allowed";
}