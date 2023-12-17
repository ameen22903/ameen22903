<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="regprocess.php" method="post">
    <label for="name">Full Name</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob"><br><br>
    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br><br>
    <label for="noic">IC</label>
    <input type="number" id="noic" name="noic"><br><br>
    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass"><br><br>
    <label for="term">Agree Terms & Conditions</label>
    <input type="checkbox" id="term" name="term" value="agreed"><br><br>
    <label for="hobby">Hobby</label>
    <input type="radio" id="radio" name="hobby" value="sport"> Sports
    <input type="radio" id="radio" name="hobby" value="read"> Reading<br><br>
    <button type="submit">Submit</button>
    <button type="reset">Reset</button>


</form>

</body>
</html>
