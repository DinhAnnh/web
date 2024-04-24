<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">
    <title>Đăng nhập</title>
</head>
<body>
    <div class="login-form">
        <div class="login_section">
        <h1>Đăng nhập</h1>
        <form action="loginQuery.php" method="POST">
            <p>Tài khoản</p>
            <input type="text" name="userName" placeholder="username" required>

            <p>Mật khẩu</p>
            <input type="password" name="password" placeholder="Password" required>
            
            <p><a href="" class="forgot">Quên mật khẩu</a></p>

            <button type="submit" name="Login">Nhập</button>

            <p>Bạn chưa có tài khoản <a href="registration.php" class="register">Đăng ký ngay</a></p>
            
        </form>
        </div>
    </div>
</body>
</html>