
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>
    <div class="registration">
        <div class="reg">
        <h1>Đăng ký</h1>
        <form action="process_registration.php" method="POST">
            <p>Họ:</p>
            <input type="text" name="firstname" placeholder="Dinh" required>
            <p>Tên:</p>
            <input type="text" name="secondname" placeholder="Anh" required>
            <p>Email:</p>
            <input type="email" name="email" placeholder="abc@gmail.com" required>
            <p>Tài khoản:</p>
            <input type="text" name="username" placeholder="DinhAnh" required>
            <p>Mật khẩu:</p>
            <input type="password" name="password" placeholder="******" required>
            <p>Nhập lại mật khẩu:</p>
            <input type="password" name="confirmpassword" placeholder="******" required>

            <button type="submit" name="submit">Đăng ký</button>
            <p>Bạn đã có tài khoản? <a href="login.php" class="login">Đăng nhập tại đây</a></p>

        </form>
        </div>
    </div>
</body>
</html>
<?php if(isset($_SESSION['message'])): ?>
     <div class="msg">
         <?php
             echo $_SESSION['message'];
             unset($_SESSION['message']);
          ?>
     </div>
<?php endif ?>
