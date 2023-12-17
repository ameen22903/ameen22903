<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $_SESSION['name']=$name;
    $_SESSION['pass']=$pass;

    if(isset($_SESSION['rem']))
    {
        setcookie('name', $name, time() + 3600, "/");
        setcookie('pass', $pass, time() + 3600, "/");
    }
    else
    {
        setcookie('name', '', time() - 3600, "/");
        setcookie('pass', '', time() - 3600, "/");
    }
    header("location: login.php");
    exit();
}
