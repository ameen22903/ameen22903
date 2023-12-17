<?php
session_start();

$name = $_SESSION['name'];
$pass = $_SESSION['pass'];
$gender = $_SESSION['gender'];
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
<table border="1">
    <tr>
        <th>Name</th>
        <td><?php echo $name?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $pass?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo $gender?></td>
    </tr>
    <tr>
        <th>Agree Terms & Conditions ? </th>
        <td><?php echo $term?></td>
    </tr>
    <tr>
        <th>Hobby</th>
        <td><?php echo $hobby?></td>
    </tr>
</table><br><br>

<a href="index.php">Go Back</a><br>
<a href="login.php">Login Now</a>
</body>
</html>
