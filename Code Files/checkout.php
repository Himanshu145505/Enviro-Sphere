<?php
$servername = "127.0.0.1:3308";
$username = "root";
$password = "";
$dbname = "envirosphere";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch cart items from cart table
$cart_items_sql = "SELECT * FROM cart";
$cart_items_result = $conn->query($cart_items_sql);

if ($cart_items_result->num_rows > 0) {
    // Loop through each cart item and insert into cart_details table
    while ($row = $cart_items_result->fetch_assoc()) {
        $product_id = $row['id'];
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
        $quantity = 1; // Assuming quantity is always 1 for now
        $total_price = $price * $quantity;

        // Insert into cart_details table
        $insert_sql = "INSERT INTO cart_details (product_id, name, description, price, quantity, total_price) VALUES ('$product_id', '$name', '$description', '$price', '$quantity', '$total_price')";
        if ($conn->query($insert_sql) !== TRUE) {
            echo "Error inserting record: " . $conn->error;
        }
    }

    // Clear the cart after checkout
    $clear_cart_sql = "DELETE FROM cart";
    if ($conn->query($clear_cart_sql) !== TRUE) {
        echo "Error clearing cart: " . $conn->error;
    }

    echo "Checkout successful!";
    // echo "Before redirect"; 
header("Location: billing.php");
exit();

} else {
    echo "<script>alert('Your cart is empty. add something and try again');
        window.location.href = 'shop.php';</script>";
}


$conn->close();
?>
