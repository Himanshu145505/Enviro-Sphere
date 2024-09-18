<?php
// id of Product
$id = $_GET['id'];
// Connection Details

$con = mysqli_connect("127.0.0.1:3308","root",'',"envirosphere");
// SQL Query for Deleteing the Product from the Cart
$sql = "DELETE FROM `cart` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    // Redirection After Removing the Product
    header("location: shop.php");
}
