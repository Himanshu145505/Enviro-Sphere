<?php
$id = $_GET['id'];
$con = mysqli_connect("127.0.0.1:3308","root",'',"envirosphere");
$sql = "DELETE FROM `designerimages` WHERE `id`='$id'";
$result = mysqli_query($con, $sql);
if($result)
{
    header("location: Deyt.php");
}

?>