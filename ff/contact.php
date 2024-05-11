<?php
session_start();

if (!isset($_SESSION['clientLoggedIn'])) {
	header('Location:login.php');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liên hệ</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <div class="nav">
        <a href="index1.php">Trang chủ</a>
        <a href="menu1.php" >Menu</a>
        <a href="contact.php" class="active">Liên hệ</a>
        <a href="about.html">Thông tin</a>
        <a href="profile.php"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName'];?></a>
        
    </div>
    <div class="wrapper">
         <h1>Liên lạc</h1>
         <p>Bạn muốn giữ liên lạc với chúng tôi không? Vui lòng gửi một số phản hồi..<br>
            Đây là thông tin liên lạc của chúng tôi...<br></p>

        <div class="contact_box">
            <div class="box1">

                <h3>Để lại một vài phản hổi.</h3>
                <form action="process_contact.php" method="POST">
                    <div class="row_input">
                        <div class="input_group">
                            <label for="Name">Tài khoản</label>
                            <input type="text" name="name" placeholder="Tài khoản">
                        </div>
                        <div class="input_group">
                            <label for="Phone">Số điện thoại</label>
                            <input type="text" name="phoneNo" placeholder="09999999">
                        </div>
                    </div>
                    <div class="row_input">
                    <div class="input_group">
                        <label for="Email">Email</label>
                        <input type="text" name="email" placeholder="Jd@gmail.com">
                    </div>
                    <div class="input_group">
                        <label for="Subject">Nội dung</label>
                        <input type="text" name="subject" placeholder="Thắc mắc/Yêu cầu/Phản hồi">
                    </div>
                    </div>

                    <label for="message">Phản hồi</label>
                    <textarea name="message" id="message" rows="10" placeholder="Thắc mắc/Yêu cầu/Phản hồi"></textarea>

                    <button type="submit">Chấp nhận</button>
                </form>
            </div>
            <div class="box2">

                <h3>Thông tin liên lạc</h3>.</h3>

                <table>
                    <tr>
                        <td >Email:</td>
                        <td >abc@1123.com</td>
                    </tr>
                    <tr>
                        <td >Hotline:</td>
                        <td >099999999</td>
                    </tr>
                    <tr>
                        <td >Địa chỉ:</td>
                        <td >218 Lĩnh Nam - Hoàng Mai - Hà Nội.</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>






</html>