<?php
session_start();
require_once('connect.php');

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["food_id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["food_id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["food_id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["food_id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="menu1.php"</script>';
			}
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra cứu</title>
	<link rel="stylesheet" href="css/order.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
    
<div style="clear:both"></div>
			<br />
			<h3 style="font-weight:bold">Tra cứu</h3>
            <h3 style="font-weight: bold">Vui lòng kiểm tra hóa đơn </h3>
			<div class="table-responsive">
				<table id="orders">
					<tr>
						<th width="40%">Tên</th>
						<th width="20%">Số lượng</th>
						<th width="20%">Giá</th>
						<th width="15%">Tổng</th>
						<th width="5%">Thao tác</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_price"]; ?>VND</td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?>VND</td>
						<td><a href="process_order.php?action=delete&food_id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Tổng</td>
						<td align="right"><?php echo number_format($total, 2); ?>VND</td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
                 <form action="process_checkout.php" method="POST">
				<div class="check">
				<button type="submit" class="button" name="checkout"><span>Kiểm tra</span></button>
				</div>
				 </form>
			</div>
            </body>
</html>