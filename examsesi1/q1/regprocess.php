<?php
session_start();

$name = $_POST['name'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$term = $_POST['term'];
$noti = $_POST['noti'];

if(!empty($name && $mail && $pass && $dob && $gender && $term && $noti))
{
    if(strlen($pass)<6)
    {
        ?>
        <script>
            alert("Please enter more than 6 characters")
            window.location.href="registerform.php";
        </script>
        <?php
    }
    else
    {
        $_SESSION['name']=$name;
        $_SESSION['mail']=$mail;
        $_SESSION['pass']=$pass;
        $_SESSION['dob']=$dob;
        $_SESSION['gender']=$gender;
        $_SESSION['term']=$term;
        $_SESSION['noti']=$noti;

        ?>
        <script>
            alert("The data has been recorded")
        </script>
        <?php
    }
}
else
{
    ?>
    <script>
        alert("Please fill all the form")
        window.location.href="registerform.php";
    </script>
    <?php
}
?>

<?php
if(isset($_SESSION['name']))
{
    ?>
    <a href="display.php">View Person Details</a>
    <?php
}
?>
