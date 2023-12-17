<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body>
<form action="lprocess.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="<?= isset($_COOKIE['name']) ? $_COOKIE['name'] : ''?>"><br><br>
    <label for="pass">Password</label>
    <input type="password" id="pass" name="pass" value="<?= isset($_COOKIE['pass']) ? $_COOKIE['pass'] : ''?>"><br><br>
    <label for="rem">Remember Me</label>
    <input type="checkbox" id="rem" name="rem"><br><br>
    <button type="submit">Log In</button>
</form>
</body>
</html>
