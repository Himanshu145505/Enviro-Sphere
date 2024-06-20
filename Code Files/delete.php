<?php
// Getting the Id
$id = $_GET['id'];


// Database Details
$con = mysqli_connect("127.0.0.1:3308","root",'',"envirosphere");

// Delete Query
$sql = "DELETE FROM `images` WHERE `id`='$id'";

// Result
$result = mysqli_query($con, $sql);
if($result)
{

    // Redirection
    header("location: yt.php");
}

?>
