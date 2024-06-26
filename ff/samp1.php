<?php
    session_start();
    // Khởi tạo giỏ hàng nếu chưa được thiết lập hoặc đã bị hủy
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    // Hủy số lượng
    unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <style>
        .product_image {
            height: 200px;
        }
        .product_name {
            height: 80px; 
            padding-left: 20px; 
            padding-right: 20px;
        }
        .product_footer {
            padding-left: 20px; 
            padding-right: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <?php
        // Thông báo
        if(isset($_SESSION['message'])){
            ?>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-6">
                    <div class="alert alert-info text-center">
                        <?php echo $_SESSION['message']; ?>
                    </div>
                </div>
            </div>
            <?php
            unset($_SESSION['message']);
        }
        // Lấy dữ liệu sản phẩm
        $conn = new mysqli('localhost', 'root', '', 'chakura');
        $sql = "SELECT * FROM menu";
        $query = $conn->query($sql);
        $inc = 4;
        while($row = $query->fetch_assoc()){
            $inc = ($inc == 4) ? 1 : $inc + 1; 
            if($inc == 1) echo "<div class='row text-center'>";  
            ?>
            <div class="col-sm-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row product_image">
                            <img src="<?php echo $row['food_image'] ?>" width="80%" height="auto">
                        </div>
                        <div class="row product_name">
                            <h4><?php echo $row['food_name']; ?></h4>
                        </div>
                        <div class="row product_footer">
                            <p class="pull-left"><b><?php echo $row['food_price']; ?></b></p>
                            <form method="POST" action="add_cart.php">
                                <input type="hidden" name="id" value="<?php echo $row['food_id']; ?>">
                                <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span>Thêm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
        if($inc == 2) echo "<div></div><div></div></div>"; 
        if($inc == 3) echo "<div></div></div>";
    ?>
</div>
</body>
</html>
