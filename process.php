<?php
// process_form.php

// In a real application, you would add logic here to:
// 1. Validate the input (e.g., check for empty fields, proper format)
// 2. Sanitize the data to prevent security vulnerabilities (like XSS or SQL injection)
// 3. Store the data in a database (e.g., using MySQLi or PDO)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    
    // Example: echo the data to the server's log (for debugging)
    // error_log("Form submission received: Username - $username, Email - $email");
    
    // --- Redirection ---
    // Use the header() function to send an HTTP redirect status
    // 'Location:' specifies the destination URL
    header('Location: thank_you.html');
    exit(); // Always call exit() after a header redirect to prevent further script execution
} else {
    // If the page is accessed directly without a POST request, redirect them back to the form
    header('Location: form.html');
    exit();
}
?>
