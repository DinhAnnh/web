<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chakura - Ẩm thực mỗi ngày</title>

    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<?php
if (isset($_SESSION['clientLoggedIn']) == true) {
?>

    <body>
        <div class="homepage">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo2.png" alt="logo" width="200" height="200">
                </div>
                <div class="navbar_list">
                    <ul type="none">
                        <li><a href="index1.php" class="active">Trang chủ</a></li>
                        <li><a href="menu1.php">Menu</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                        <li><a href="about.html">Thông tin</a></li>
                        <div class="dropdown">
                            <button class="dropbtn"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName']; ?></button>
                            <div class="dropdown-content">
                                <a href="profile.php">Hồ sơ</a>
                            </div>
                        </div>
                        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a></li>
                    </ul>
                </div>

            </div>

            <div class="banner_image">
                <div class="banner_content">
                    <h1 id="headline">Welcome to <br> <span>CHAKURA<span></h1>
                    <p id="sub-headline" style="color: white;">Thiên đường ẩm thực</p>
                    <p id="sub-headline" style="color: white;">Món ngon mỗi ngày</p>
                    <div class="btn"><a href="menu.php">Mua ngay</a></div>
                </div>
            </div>



            <div class="about" id="about">
                <h1 class="title">Chúng tôi</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt eius nulla fuga ea, reiciendis labore magnam soluta deleniti necessitatibus ipsum ipsam aperiam optio illum laudantium vitae quis, expedita quae? Quos!</p>
                <div class="btn"><a href="about.html">Thêm</a></div>
            </div>

            <div class="benefits" id="benefits">
                <h1 class="title">Lợi ích</h1>
                <p>Bạn sẽ không thất vọng về chúng tôi</p>
                <div class="services">
                    <div class="services_list">
                        <img src="images/fresh.png" alt="fresh_image" width="100" height="100">
                        <h3 class="sub_title">Thực phẩm sạch</h3>
                        <p>Thức ăn của chúng tôi được nấu bằng nguyên liệu tươi</p>
                    </div>
                    <div class="services_list">
                        <img src="images/delivery.png" alt="delivery_image" width="100" height="100">
                        <h3 class="sub_title">Giao hàng nhanh</h3>
                        <p>Chúng tôi giao tận tay cho bạn</p>
                    </div>
                    <div class="services_list">
                        <img src="images/payment.png" alt="payment_image" width="100" height="100">
                        <h3 class="sub_title">Phương pháp thanh toán</h3>
                        <p>Bạn có thể sử dụng tiền mặt, chuyển khoản và thẻ </p>
                    </div>
                </div>
            </div>

            <div class="testimonials">
                <h1 class="title">Feedback</h1>
                <div class="test">
                    <h1>Alex</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam facere neque fugit a iure obcaecati quo facilis iusto? Rem nihil aut doloremque tenetur qui. Quia dolorum asperiores quam cumque labore?.<br>
                    </p>
                </div>

                <div class="test">
                    <h1>Tom</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur facere dolorem ipsum dolore facilis dolores sequi quibusdam perspiciatis pariatur, eum quasi tempora obcaecati, fugiat ad perferendis expedita amet vitae nostrum..<br>
                    </p>
                </div>
            </div>

            <div class="features" id="features">
                <h1 class="title">Bí quyết</h1>
                <div class="features_wrapper">
                    <div class="food">
                        <div class="food_item">
                            <img src="images/steak.jpg" alt="steak" class="food_img">
                            <div class="details">
                            <p class="feature_details">Beef-steak</p>
                            </div>
                        </div>

                        <div class="food_item">
                            <img src="images/cuu.jpg" alt="Suoncuu" class="food_img">
                            <div class="details">
                            <p class="feature_details">Sườn Cừu<br></p>
                            </div>
                        </div>


                        <div class="food_item">
                            <img src="images/Gahap.jpg" alt="Gahap" class="food_img">
                            <div class="details">
                            <p class="feature_details">Gà Dai Hấp 1/2 Con <br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="additional">
                    <div class="content">
                        <ul>
                            <h4 style="color: darkgreen;"><u>Hữu ích</u></h4>
                            <li><a href="">Bài viết</a></li>
                            <li><a href="">Gợi ý</a></li>
                            <li><a href="">Bản đồ</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>


                    <div class="content">
                        <ul>
                            <h4 style="color: darkgreen;"><u>Khác</u></h4>
                            <li><a href="">Đăng kí bản tin</a></li>
                            <li><a href="">Khuyến mãi</a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <p>copyright @2024</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
<?php
}
?>

<?php
if (isset($_SESSION['clientLoggedIn']) == false) {
?>

    <body>
        <div class="homepage">
            <div class="navbar">
                <div class="logo">
                    <img src="images/logo2.png" alt="logo" width="200" height="200">
                </div>
                <div class="navbar_list">
                    <ul type="none">
                        <li><a href="index1.php" class="active">Trang chủ</a></li>
                        <li><a href="menu1.php">Menu</a></li>
                        <li><a href="contact.php">Liên hệ</a></li>
                        <li><a href="about.html">Chúng tôi</a></li>
                        <li><a href="login.php">Đăng nhập</a></li>
                        <li><a href="registration.php">Đăng ký</a></li>


                    </ul>
                </div>

            </div>

            <div class="banner_image">
                <div class="banner_content">
                    <h1 id="headline">Welcome to <br> <span>CHAKURA<span></h1>
                    <p id="sub-headline" style="color:white">Thiên đường ẩm thực</p>
                    <p id="sub-headline" style="color:white">Món ngon mỗi ngày</p>
                    <div class="btn"><a href="menu1.php">Mua ngay</a></div>
                </div>
            </div>

            
            <div class="about" id="about">
                <h1 class="title">Chúng tôi</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero reiciendis expedita atque quos recusandae saepe iusto rem, nobis soluta, est qui ratione blanditiis esse, minus magni neque autem provident maxime?</p>
                <div class="btn"><a href="about.html">Thêm</a></div>
            </div>

            <div class="benefits" id="benefits">
                <h1 class="title">Lợi ích</h1>
                <p>Bạn sẽ không thất vọng.</p>
                <div class="services">
                    <div class="services_list">
                        <img src="images/fresh.png" alt="fresh_image" width="200" height="200">
                        <h3 class="sub_title">Thực phẩm sạch</h3>
                        <p>Thức ăn của chúng tôi được nấu bằng nguyên liệu tươi</p>
                    </div>
                    <div class="services_list">
                        <img src="images/delivery.png" alt="delivery_image" width="200" height="200">
                        <h3 class="sub_title">Giao hàng nhanh</h3>
                        <p>Chúng tôi giao tận tay cho bạn</p>
                    </div>
                    <div class="services_list">
                        <img src="images/payment.png" alt="payment_image" width="200" height="200">
                        <h3 class="sub_title">Phương pháp thanh toán</h3>
                        <p>Bạn có thể sử dụng tiền mặt, chuyển khoản và thẻ</p>
                    </div>
                </div>
            </div>

            <div class="testimonials">
                <h1 class="title">Feedback</h1>
                <div class="test">
                    <h1>Alex</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit explicabo eum aliquam aperiam veniam, sed iste corrupti eveniet error eos similique unde, ea id rem delectus sint blanditiis quaerat accusamus.<br>
                    </p>
                </div>

                <div class="test">
                    <h1>Tom</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus aut iure esse, molestias aliquid cupiditate labore quasi ad hic dolore architecto odio vel illum maiores sint repellat vero corrupti. Quis?<br>
                    </p>
                </div>
            </div>

            <div class="features" id="features">
                <h1 class="title">Bí quyết</h1>
                <div class="features_wrapper">
                    <div class="food">
                        <div class="food_item">
                            <img src="images/steak.jpg" alt="steak" class="food_img">
                            <p class="feature_details">Beef-steak</p>
                        </div>

                        <div class="food_item">
                            <img src="images/cuu.jpg" alt="Suoncuu" class="food_img">
                            <p class="feature_details">Sườn cừu<br></p>
                        </div>
                        <div class="food_item">
                            <img src="images/khoaitay.jpg" alt="khoaitaychien" class="food_img">
                            <p class="feature_details">Khoai tây chiên<br></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="additional">
                    <div class="content">
                        <ul>
                            <h4 style="color: darkgreen;"><u>Hữu ích</u></h4>
                            <li><a href="">Bài viết</a></li>
                            <li><a href="">Gợi ý</a></li>
                            <li><a href="">Bản đồ</a></li>
                            <li><a href="">Liên hệ</a></li>
                        </ul>
                    </div>


                    <div class="content">
                        <ul>
                        <h4 style="color: darkgreen;"><u>Khác</u></h4>
                            <li><a href="">Đăng kí bản tin</a></li>
                            <li><a href="">Khuyến mãi</a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <p>copyright @2024</p>
                    </div>
                </div>
            </div>
        </div>

    </body>
<?php
}
?>

</html>