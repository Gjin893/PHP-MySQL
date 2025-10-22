<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <label for="Username">Username</label><br><br>
        <input type="text" name="username" placeholder="username"><br><br>
        <label for="password">Password</label><br><br>
        <input type="password" name="password" placeholder="password"> <br><br>
<button>Button</button><br><br>
    </form>
    
</body>
</html>
<?php
$username = $_GET['username'];
$password = $_GET['password'];

echo $username;

echo"<br>";

echo $password;
?>