<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    // Save submitted data to session (replace this with your actual authentication logic)
    $_SESSION['name'] = $name;
    $_SESSION['pass'] = $pass;

    // Set or clear cookies based on the "Remember Me" checkbox
    if (isset($_POST['rem'])) {
        // If checked, set cookies with username and password
        setcookie('name', $name, time() + 3600, '/');
        setcookie('pass', $pass, time() + 3600, '/');
    } else {
        // If not checked, clear cookies
        setcookie('name', '', time() - 3600, '/');
        setcookie('pass', '', time() - 3600, '/');
    }

    // Redirect to display.php
    header('Location: display.php');
    exit();
}
?>
