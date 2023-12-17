<?php
session_start();

$name=$_POST['name'];
$pass=$_POST['pass'];
$gender=$_POST['gender'];
$term=$_POST['term'];
$hobby=$_POST['hobby'];

if(!empty($name && $pass && $gender && $term && $hobby)){
    if(strlen($pass)<6){
        echo'<h1>Password must be more than 6</h1>]';
        echo'<a href="index.php">Go Back</a>';
        die();
    }
    else
    {
        $_SESSION['name']=$name;
        $_SESSION['pass']=$pass;
        $_SESSION['gender']=$gender;
        $_SESSION['term']=$term;
        $_SESSION['hobby']=$hobby;

        echo'<h1>Your data has been successfully recorded</h1>';
        echo'<a href="display.php">View Details</a>';
        die();
    }
}
else
{
    echo'<h1>Please fill all the form correctly</h1>';
    echo'<a href="index.php">Go Back</a>';
    die();
}
