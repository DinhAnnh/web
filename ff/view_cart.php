<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Giỏ hàng</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <!-- left nav here -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <h1 class="page-header text-center">Thông tin giỏ hàng</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <?php 
            if(isset($_SESSION['message'])){
                ?>
                <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']);
            }

            ?>
            <form method="POST" action="save_cart.php">
            <table class="table table-bordered table-striped">
                <thead>
                    <th></th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </thead>
                <tbody>
                    <?php
                        //initialize total
                        $total = 0;
                        if(!empty($_SESSION['cart'])){
                            //connection
                            $conn = new mysqli('localhost', 'root', '', 'chakura');

                            // Kiểm tra kết nối
                            if ($conn->connect_error) {
                                die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
                            }

                            //create array of initail qty which is 1
                            $index = 0;
                            if(!isset($_SESSION['qty_array'])){
                                $_SESSION['qty_array'] = array_fill(0, count($_SESSION['cart']), 1);
                            }

                            $sql = "SELECT * FROM menu WHERE food_id IN (".implode(',',$_SESSION['cart']).")";
                            $query = $conn->query($sql);

                            // Kiểm tra xem có dữ liệu trả về không
                            if ($query !== false && $query->num_rows > 0) {
                                // Lặp qua từng hàng dữ liệu
                                while ($row = $query->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <a href="delete_item.php?id=<?php echo $row['food_id']; ?>&index=<?php echo $index; ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                                        </td>
                                        <td><?php echo $row['food_name']; ?></td>
                                        <td><?php echo number_format($row['food_price'], 2); ?></td>
                                        <input type="hidden" name="indexes[]" value="<?php echo $index; ?>">
                                        <td><input type="text" class="form-control" value="<?php echo $_SESSION['qty_array'][$index]; ?>" name="qty_<?php echo $index; ?>"></td>
                                        <td><?php echo number_format($_SESSION['qty_array'][$index]*$row['food_price'], 2); ?></td>
                                        <?php 
                                        $total += $_SESSION['qty_array'][$index]*$row['food_price']; 
                                        ?>
                                    </tr>
                                    <?php
                                    $index ++;
                                }
                            } else {
                                echo "Không có dữ liệu hoặc có lỗi trong quá trình truy vấn";
                            }

                            // Đóng kết nối
                            $conn->close();
                        }
                        else{
                            ?>
                            <tr>
                                <td colspan="4" class="text-center">No Item in Cart</td>
                            </tr>
                            <?php
                        }

                    ?>
                    <tr>
                        <td colspan="4" align="right"><b>Total</b></td>
                        <td><b><?php echo number_format($total, 2); ?></b></td>
                    </tr>
                </tbody>
            </table>
            <a href="index1.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
            <button type="submit" class="btn btn-success" name="save">Save Changes</button>
            <a href="clear_cart.php" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Clear Cart</a>
            <a href="checkout.php" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Checkout</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
