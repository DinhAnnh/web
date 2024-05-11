<?php
require_once("connect.php");

$sql="CREATE DATABASE chakura";

$sql_table="CREATE TABLE checkout(order_id INT(6) AUTO_INCREMENT PRIMARY KEY, fullname VARCHAR(50) NOT NULL, phoneNumber INT(10) NOT NULL, food VARCHAR(255) NOT NULL, serving VARCHAR(50) NOT NULL, country VARCHAR(50) NOT NULL, paymentMethod VARCHAR(50) NOT NULL)";

$fullname=$_POST["fullname"];
$phoneNumber=$_POST["phoneNumber"];
$food=$_POST["food"];
$servings=$_POST["serving"];
$country=$_POST["country"];
$paymentMethod=$_POST["paymentMethod"];

$sql_insert="INSERT INTO contact(fullname,phoneNumber,food,serving,country,paymentMethod) VALUES('$fullname','$phoneNumber','$food','$servings','$country','$paymentMethod')";


if($conn->query($sql_table)==true)
{
    echo "Table created successfully";
}
else{
    echo "Error in creating table".$conn->error;
}

if($conn->query($sql_insert)==true)
{
    echo "Values inserted successfully";
}
else{
    echo "Error in inserting values".$conn->error;
}

?>