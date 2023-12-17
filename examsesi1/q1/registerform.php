<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Humming Bird</title>
</head>
<body>
<form action="regprocess.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="mail">Email</label>
    <input type="email" id="mail" name="mail"><br><br>
    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass"><br><br>
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob"><br><br>
    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br><br>
    <label for="term">Agree Terms and Condition</label>
    <input type="checkbox" id="term" name="term" value="agreed"><br><br>
    <label for="noti">Want Notification?</label>
    <input type="radio" name="noti" id="radio" value="yes">Yes
    <input type="radio" name="noti" id="radio" value="no">No<br><br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>
</form>
</body>
</html>
