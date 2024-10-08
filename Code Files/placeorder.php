<?php
// Session Start
session_start();

// $servername = "127.0.0.1:3308";
// $username = "root";
// $password = "";
// $dbname = "envirosphere";

// Create connection

// Connection Attributes
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

// Connecttion check from the database
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
        // SQL query to insert into the "orders" table
        // When user will click on the Place Order Button then all the items from the cart will be stored into the Orders Table 
        $sql = "INSERT INTO orders (name, description, price, image, date_added) VALUES ('$name', '$description', '$price', '$image', '$date_added')";

        // Execute the query

        // It is for checking that everything is fetch and stored correctly or not
        $result = $conn->query($sql);
        if (!$result) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Clear the cart after placing the order
    // It will completely clear the table name cart items after transfering all the data from the cart items to order table
    unset($_SESSION['cart']);

// Check if the "Place Order" button is clicked
if (isset($_POST['place_order'])) {
    // Get the current date and time
    $date_added = date('Y-m-d H:i:s');

    // Get the cart items from the session
    $cart_items = $_SESSION['cart'];

    // Loop through each cart item and insert into the "orders" table
    // It will fetch the item details from cart items
    foreach ($cart_items as $item) {
        $name = $item['name'];
        $description = $item['description'];
        $price = $item['price'];
        $image = $item['image'];


    // Redirect to a confirmation page or display a success message
    // After placing order the user will be redirected to the billing page
    header("Location: billing.php");
    exit();


}

$conn->close();
// Connection Close
?>
