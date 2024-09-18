<?php
// id of Product
$id = $_GET['id'];
// Connection Details

// default Server Name
$con = mysqli_connect("","root",'',"envirosphere");
// SQL Query for Deleteing the Product from the Cart
$sql = "DELETE FROM `cart` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    // Redirection After Removing the Product
    header("location: shop.php");
}

?>
