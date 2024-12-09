<?php
require_once('include_path.php');
require_once('controllers/loginForm.ctl.php');

session_start();

// Check if the user is already logged in
if (isset($_SESSION['isLogged']) && $_SESSION['isLogged']) {
    header('Location: dashboard.php'); // Redirect to a dashboard or home page
    exit();
}

try {
    // Render the login form
    loginFormController::Render();
} catch (Exception $e) {
    // Handle exceptions
    echo 'Error occurred: ' . htmlspecialchars($e->getMessage());
}