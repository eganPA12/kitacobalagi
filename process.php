<?php

// Set error handling
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    
    // Redirect ke thank_you.html
    header('Location: thank_you.html', true, 302);
    exit;
} else {
    // Jika diakses langsung, redirect ke form
    header('Location: form.html', true, 302);
    exit;
}
?>
