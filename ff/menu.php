<?php
require_once("connect.php");
require_once("process_menu.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cửa hàng</title>

     <!--Font awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

     <!--Style sheets-->
     <link rel="stylesheet" href="css/menu.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
 

<div class="container">
    <div class="row text-center py-5">
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
         <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/BBQ.jpg" alt="beef burger" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Sườn Nướng Xốt BBQ 500g</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: sườn heo, xốt BBQ
                     </p>
                     <h5>
                         <small><s class="text-secondary">90.000 VND</s></small>
                         <span class="price">80.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/Canhga.jpg" alt="mushroom burger" class="img-fluid card-img-top"style="width:185px; height:185px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Cánh Giữa Gà Chiên Tỏi</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                    Thành phần: Cánh gà giữa, bột chiên gà, tỏi chiên, gia vị
                     </p>
                     <h5>
                         <span class="price">120.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>   
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/GaDakgangjang.jpg" alt="chicken burger" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Gà Dakgangjang Sốt Tương Tỏi</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: Cánh gà, đùi gà rút xương hoặc có xương hay ức gà, nước sốt gà
                     </p>
                     <h5>
                         
                         <span class="price">290.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>   
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-0">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/Gahap.jpg" alt="veggie burger" class="img-fluid card-img-top" style="width:203px; height:203px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Gà Dai Hấp 1/2 Con</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: Gà, xả, lá chanh, gừng...
                     </p>
                     <h5>
                         <span class="price">150.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>
        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/Gaquay.jpg" alt="chicken nuggets" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Gà Quay Mật Ong Nguyên Con</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: Gà nguyên con, lá móc mật, mật ong..
                     </p>
                     <h5>
                     <small><s class="text-secondary">900.000 VND</s></small>
                         <span class="price">500.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/sup.jpg" alt="chickenmeatballs"  class="img-fluid card-img-top" style="width:250px; height:250px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Súp Bí đỏ Kem tươi & Thịt bò ăn kèm crouton</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Súp Bí đỏ nấu với kem tươi và thịt bò băm
                     </p>
                     <h5>
                         <span class="price">300.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/khoaitay.jpg" alt="bbq steak" class="img-fluid card-img-top" style="width:255px; height:255px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Khoai tây chiên</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: Khoai tây, phô mai
                     </p>
                     <h5>
                         <small><s class="text-secondary">79.000 VND</s></small>
                         <span class="price">70.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/spa.jpg" alt="mushroompizza" class="img-fluid card-img-top" style="width:285px; height:285px;">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Spaghetti Creamy Marinara</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: Spaghetti Hải sản (Tôm, Mực, Ngao) sốt Kem tươi béo ngậy
                     </p>
                     <h5>
                       
                         <span class="price">350.500 vnd</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/steak.jpg" alt="chicken-tikka-pizza" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Tenderloin Beef-steak Thăn Nội Bò Úc - kiểu Âu</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: 130-150 gram thăn nội Bò Úc nhập khẩu được served cùng khoai chiên, rau vườn tươi, và các lựa chọn sốt tươi home-made cực ngon!
                     </p>
                     <h5>
                         
                         <span class="price">789.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>
        
        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/cuu.jpg" alt="fries" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Sườn Cừu cắt kiểu Pháp</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Thành phần: Sườn Cừu cắt kiểu Pháp 228k

200-220g sườn cừu Úc ướp lá thơm áp chảo, ăn kèm sốt Sốt tuỳ chọn:

Kem nấm / Phomai/ Mù tạt Mật ong/ BBQ/ Tiêu xanh
                     </p>
                     <h5>
                         
                         <span class="price">1.000.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/nuocep.jpg" alt="coleslaw" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Nước ép Dưa hấu</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Nước ép dưa hấu
                     </p>
                     <h5>
                         
                         <span class="price">80.00 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/pepsi.jpg" alt="onion rings" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">PEPSI</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     PEPSI CAN 330ML
                     </p>
                     <h5>
                         <span class="price">50.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/soda.jpg" alt="soda" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Soda</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Soda Nhiệt đới
                     </p>
                     <h5>
                         <small><s class="text-secondary">90.000 VND</s></small>
                         <span class="price">89.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/tra.jpg" alt="milkshakes" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Trà Hoa quả Summer Breeze</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Trà Hoa quả Summer Breeze
                     </p>
                     <h5>
                    
                         <span class="price">90.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/cold.jpg" alt="Hawaiian" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Coldbrew Sữa tươi</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     Cafe Coldbrew Sữa tươi
                     </p>
                     <h5>
                         
                         <span class="price">120.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>

        <div class="col-md-3 col-sm-6 my-3 my-md-5">
        <form action="menu.php" method="POST">
             <div class="card shadow">
                 <div>
                 <img src="images/aqua.jpg" alt="firecracker" class="img-fluid card-img-top">
                 </div>
                 <div class="card-body">
                     <h5 class="card-title">Aquafina chai</h5>
                     <h6>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="fas fa-star"></i>
                         <i class="far fa-star"></i>
                     </h6>
                     <p class="card-text">
                     AQUAFINA 500ML
                     </p>
                     <h5>
                         <span class="price">50.000 VND</span>
                     </h5>

                     <button type="submit" class="btn btn-warning my-3" name="add">Thêm<i class="fas fa-shopping-cart"></i></button>
                 </div>
             </div>
         </form>  
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    

</body>
</html>