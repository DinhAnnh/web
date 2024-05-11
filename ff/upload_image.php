<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm</title>
    <link rel="stylesheet" href="css/upload.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">

    <style>
    .nav a{
  float: right;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
  font-size: 18px;
}

 .nav a:hover{
  background-color:goldenrod;
  color: black;

  }

 .nav a.active{
  color:peru;
 }
 </style>
</head>
<body>
<div class="nav">

        <a href="profile.php" class="user"><i class="fas fa-user"></i><?php echo $_SESSION['user']['userName']; ?></a> 
        <a href="view_order.php">Orders</a>
        <a href="view_food.php">Menu</a>
        <a href="upload_image.php" class="active">Thêm</a>
        <a href="displayUsers.php">Trang chủ</a>
        
</div>

    <div class="upload">
        <h1>Thêm món ăn</h1>
    <form action="process_upload.php" method="POST" enctype="multipart/form-data">
     
    <label for="fooditem">Tên món ăn:</label><br>
    <input type="text" name="fooditem" required="true" placeholder="Steak thăn bò"><br/><br/>

    <label for="foodimage">Ảnh:</label><br>
    <input type="file" name="food-image" id="foodimage" required="true"><br/><br/>

    <label for="fooddescription">Mô tả:</label><br>
    <textarea name="description" id="descr" rows="10" placeholder="Mô tả" required="true"></textarea><br></br>

    <label for="foodprice">Giá:</label><br>
    <input type="number" name="price" id="foodprice" required="true" placeholder="50000 VND">
    <br/><br/>

    
    
    <button type="submit" name="submitImage">Thêm</button> 



   </form>
    </div>
</body>
</html>