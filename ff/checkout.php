<?php
session_start();
require_once('connect.php');

 
$sql_select="SELECT * FROM checkout";
$results=mysqli_query($conn,$sql_select);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>
    <div class="nav">
        <a href="index1.php">Trang chủ</a>
        <a href="menu1.html" >Menu</a>
        <a href="contact.php" class="active">Liên hệ</a>
        <a href="about.html">Thông tin</a>
        <a href="login.php">Đăng nhập</a>
        <a href="registration.php">Đăng ký</a>
         
        
        
    </div>

    <div class="wrapper">
         <h1>Trang thanh toán</h1>
         <p>Cảm ơn bạn<br>
        </p>

        <div class="contact_box">
            <div class="box1">

                <h3>Orders</h3>
                <form action="" method="POST">
                    <div class="row_input">
                        <div class="input_group">
                            <label for="Name">Họ tên:</label>
                            <input type="text" name="name" placeholder="John">
                        </div>
                        <div class="input_group">
                            <label for="Phone">Số điện thoại:</label>
                            <input type="text" name="phone" placeholder="99999999">
                        </div>
                    </div>
                    <div class="row_input">
                    <div class="input_group">
                        <label for="Food">Sản phẩm:</label>
                        <input type="text" name="food" placeholder="Steak">
                    </div>
                    <div class="input_group">
                        <label for="Servings">Phục vụ:</label>
                        <input type="text" name="size" placeholder="nhanh/chậm">
                    </div>
                    </div>

                    <div class="row_input">
                        <div class="input_group">
                            <label for="Country">Thành phố:</label>
                            <input type="text" name="country" placeholder="Hà Nội">
                        </div>
                        <div class="input_group">
                            <label for="Payment">Hình thức thanh toán:</label>
                            <input type="text" name="payment" placeholder="Tiền mặt/Chuyển khoản/Thẻ tín dụng">
                        </div>
                        </div>

                  

                    <button type="submit">Chấp nhận</button>
                </form>
            </div>
            <div class="box2">

                <h3>Liên hệ chúng tôi.</h3>

                <table>
                    <tr>
                        <td >Email:</td>
                        <td >abc@1123.com</td>
                    </tr>
                    <tr>
                        <td >Phone:</td>
                        <td >099999999</td>
                    </tr>
                    <tr>
                        <td >Location:</td>
                        <td >218 Lĩnh Nam - Hoàng Mai - Hà Nội.</td>
                    </tr>
                </table>

                <br>
                <br>
                <br>
                <h3>Thanh toán khi giao hàng.</h3>

                
            </div>
        </div>
    </div>
</body>
</html>