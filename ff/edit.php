<?php

require_once("connect.php");

$customerid=$_GET['customer_id'];

$sql_select=mysqli_query($conn,"SELECT * FROM customer where customer_id='$customerid'");

$rows=mysqli_fetch_array($sql_select);

if(isset($_POST['update'])) // when click on Update button
{
        $firstName = $_POST['firstName'];
        $secondName = $_POST['secondName'];
        $Email = $_POST['Email'];
        $Password = $_POST['UserPassword'];
        $username = $_POST['UserName'];
        $userType=$_POST['roles']; 
	
    $editValues = mysqli_query($conn,"UPDATE customer SET firstname='$firstName', secondname='$secondName',email='$Email',userName='$username',userPassword='$Password',userType='$userType' WHERE customer_id='$customerid'");
	
    if($editValues)
    {
        mysqli_close($conn); // Close connection
        header("location:displayUsers.php"); // redirects to display users page
        exit;
    }
    else
    {
        echo $conn->error;
    }    	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin</title>
    <link rel="stylesheet" href="css/registration.css">
</head>
<body>

<div class="registration">
    <div class="reg">
<h1>Sửa thông tin</h1>

<form method="POST">
  <p>Họ:</p>
  <input type="text" name="firstName" value="<?php echo $rows['firstname'] ?>" placeholder="Enter First Name" Required>
  <p>Tên:</p>
  <input type="text" name="secondName" value="<?php echo $rows['secondname'] ?>" placeholder="Enter Second Name" Required>
  <p>Email:</p>
  <input type="email" name="Email" value="<?php echo $rows['email'] ?>" placeholder="Enter Email" Required>
  <p>Tài khoản:</p>
  <input type="text" name="UserName" value="<?php echo $rows['userName'] ?>" placeholder="Enter userName" Required>
  <p>Mật khẩu:</p>
  <input type="password" name="UserPassword" value="<?php echo $rows['userPassword'] ?>" placeholder="Enter Password" Required>
  <p>Trạng thái</p>
  <div class="dropdown" style="width:200px;">
  <select name="roles" id="Role">
                <optgroup label="userRoles">
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </optgroup>
            </select>
    </div>
  <button type="submit" name="update">Cập nhật</button>
</form>
    </div>
</div>
</body>
</html>