<?php
session_start();

// Dummy user data for demonstration (replace this with your database logic)
$users = [
    ['email' => 'user@example.com', 'password' => 'password123'],
    // Add more users as needed
];

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Dummy authentication logic (replace this with your database check)
    foreach ($users as $user) {
        if ($user['email'] == $email && $user['password'] == $password) {
            $_SESSION['user'] = $user['email'];
            header('Location: home.html');
            exit();
        }
    }

    // If authentication fails
    $error = "Invalid email or password";
}
?>