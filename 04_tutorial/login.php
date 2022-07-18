<?php
session_start();

$errors=[];
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email == 'eaint@gmail.com' && $password == '123456'){
        $_SESSION['auth']  = true;
        header('location:index.php');
    }
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
       <label for="">Email</label> <input type="email" placeholder="Enter your email" name="email"><br> <br>
        <label for="">Password</label><input type="password" name="password" placeholder="Enter your password">
        <input type="submit" value="Log In" name="login">
    </form>
</body>
</html>