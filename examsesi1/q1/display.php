<?php
session_start();

$name = $_SESSION['name'];
$mail = $_SESSION['mail'];
$pass = $_SESSION['pass'];
$dob = $_SESSION['dob'];
$gender = $_SESSION['gender'];
$term = $_SESSION['term'];
$noti = $_SESSION['noti'];

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
        <th>Full Name</th>
        <td><?php echo $name;?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?php echo $mail;?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?php echo $pass;?></td>
    </tr>
    <tr>
        <th>Date of Birth</th>
        <td><?php echo $dob;?></td>
    </tr>
    <tr>
        <th>Gender</th>
        <td><?php echo $gender;?></td>
    </tr>
    <tr>
        <th>Agree Terms ?</th>
        <td><?php echo $term;?></td>
    </tr>
    <tr>
        <th>Notify ?</th>
        <td><?php echo $noti;?></td>
    </tr>
</table>
</body>
</html>
