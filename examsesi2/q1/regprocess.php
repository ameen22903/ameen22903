<?php
session_start();

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$noic = $_POST['noic'];
$pass = $_POST['pass'];
$term = $_POST['term'];
$hobby = $_POST['hobby'];

if (!empty($name) && !empty($dob) && !empty($gender) && !empty($noic) && !empty($pass) && !empty($term) && !empty($hobby)) {
    if (strlen($pass) < 8) {
        echo '<h1>Password must be more than 8 characters</h1>';
        echo '<p><a href="index.php">Go back</a></p>';
        die();
    } else {
        $_SESSION['name'] = $name;
        $_SESSION['dob'] = $dob;
        $_SESSION['gender'] = $gender;
        $_SESSION['noic'] = $noic;
        $_SESSION['pass'] = $pass;
        $_SESSION['term'] = $term;
        $_SESSION['hobby'] = $hobby;

        echo '<h1>Data has been successfully recorded</h1>';
        echo '<a href="display.php">Click here to see details</a>';
        die();
    }
} else {
    echo '<h1>Please fill all the required fields</h1>';
    echo '<p><a href="index.php">Go back</a></p>';
    die();
}
?>
