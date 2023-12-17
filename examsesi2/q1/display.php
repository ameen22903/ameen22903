<?php
session_start();

$name = $_SESSION['name'];
$dob = $_SESSION['dob'];
$gender = $_SESSION['gender'];
$noic = $_SESSION['noic'];
$pass = $_SESSION['pass'];
$term = $_SESSION['term'];
$hobby = $_SESSION['hobby'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display</title>
</head>
<body>
<table>
    <tr>
        <td>Name: </td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Date of Birth: </td>
        <td><?php echo $dob; ?></td>
    </tr>
    <tr>
        <td>Gender: </td>
        <td><?php echo $gender; ?></td>
    </tr>
    <tr>
        <td>No IC: </td>
        <td><?php echo $noic; ?></td>
    </tr>
    <tr>
        <td>Password: </td>
        <td><?php echo $pass; ?></td>
    </tr>
    <tr>
        <td>Agree to Terms & Conditions ?</td>
        <td><?php echo $term; ?></td>
    </tr>

    <tr>
        <td>Hobby</td>
        <td><?php echo $hobby; ?></td>
    </tr>
</table>

<a href="login.php">Go to Login</a>
</body>
</html>

