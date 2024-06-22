<?php
// Connection Details
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

// Payment Process Customer details 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $paymentMethod = $_POST["payment-method"];

    // Generate a random order ID
    
    $orderID = mt_rand(100000, 999999);
    // This Rand Method will generate a random order id 

    // Set the timezone to Asia/Kolkata (India)
    date_default_timezone_set('Asia/Kolkata');
    // Get the current date and time for the order
    $orderTime = date("Y-m-d H:i:s");

    // SQL QUERY for inserting the Billing Details to BillingInfo Table
    $sql = "INSERT INTO BillingInfo (fullName, address, email, phone, paymentMethod, orderID, orderTime) VALUES ('$fullName', '$address', '$email', '$phone', '$paymentMethod', '$orderID', '$orderTime')";

    
    if ($conn->query($sql) === TRUE) {
        // If the Payment Method is Cash on Delivery then it will generate a bill with order details, customer details and delivery details
        if ($paymentMethod === "Cash on Delivery") {
            // Display the billing information
            echo "<div style='margin: 50px;'>";
            echo "<h2 style='text-align: center; color: #333; font-family: Arial, sans-serif;'>Thank you for shopping with us, $fullName!</h2>";
            echo "<p style='text-align: center; color: #666; font-size: 1.2em;'>Your order will be delivered within 7 days.</p>";

            echo "<p id='redirect-text' style='text-align: center; color: green; font-size: 1.8em; background-color: yellow; '>Redirecting back to home page in <span id='countdown'>20</span> seconds</p>";
            echo "</div>";

            echo "<h2 style='text-align: center; color: #333; font-family: Arial, sans-serif;'>Personal Details</h2>";
            echo "<p style='text-align: center; color: #666; font-size: 1.2em;'>Order ID: $orderID</p>";
            echo "<p style='text-align: center; color: #666; font-size: 1.2em;'>Order Time & Date: $orderTime (IST)</p>";
            echo "<table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>";
            echo "<tr><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Description</th><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Details</th></tr>";
            echo "<tr><td style='border: 1px solid #ddd; padding: 10px;'>Full Name</td><td style='border: 1px solid #ddd; padding: 10px;'>$fullName</td></tr>";
            echo "<tr><td style='border: 1px solid #ddd; padding: 10px;'>Address</td><td style='border: 1px solid #ddd; padding: 10px;'>$address</td></tr>";
            echo "<tr><td style='border: 1px solid #ddd; padding: 10px;'>Email</td><td style='border: 1px solid #ddd; padding: 10px;'>$email</td></tr>";
            echo "<tr><td style='border: 1px solid #ddd; padding: 10px;'>Phone</td><td style='border: 1px solid #ddd; padding: 10px;'>$phone</td></tr>";
            echo "<tr><td style='border: 1px solid #ddd; padding: 10px;'>Payment Method</td><td style='border: 1px solid #ddd; padding: 10px;'>$paymentMethod</td></tr>";
            echo "</table>";

            echo "<h2 style='text-align: center; color: #333; font-family: Arial, sans-serif;'>Ordered Item Details</h2>";

            // Initialize total amount
            $totalAmount = 0;

            // Fetch and display cart details

            // This Query will fetch the items from the cart
            $cart_sql = "SELECT * FROM cart_details";
            $cart_result = $conn->query($cart_sql);
            if ($cart_result->num_rows > 0) {
                echo "<table style='width: 100%; border-collapse: collapse; margin-top: 20px;'>";
                echo "<tr><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Product ID</th><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Name</th><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Description</th><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Price</th><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Quantity</th><th style='border: 1px solid #ddd; padding: 10px; background-color: green; text-align: left;'>Total Price</th></tr>";
                while ($row = $cart_result->fetch_assoc()) {
                    echo "<tr><td style='border: 1px solid #ddd; padding: 10px;'>{$row['product_id']}</td><td style='border: 1px solid #ddd; padding: 10px;'>{$row['name']}</td><td style='border: 1px solid #ddd; padding: 10px;'>{$row['description']}</td><td style='border: 1px solid #ddd; padding: 10px;'>{$row['price']}</td><td style='border: 1px solid #ddd; padding: 10px;'>{$row['quantity']}</td><td style='border: 1px solid #ddd; padding: 10px;'>{$row['total_price']}</td></tr>";
                    // Add total price to the total amount
                    $totalAmount += $row['total_price'];
                }
                echo "<tr><td colspan='5' style='text-align: right; padding-right: 10px;'>Total Amount:</td><td style='border: 1px solid #ddd; padding: 10px;'>$totalAmount</td></tr>";
                echo "</table>";
            } else {
                // If there are no items in the cart then it will show an error message
                echo "No items in the cart.";
            }
        }
// If user has choosen the COD Payment method then after showing the details to user for 20 seconds it will redirect back to Home Page
        echo "<script>
             var seconds = 20;
             var countdown = document.getElementById('countdown');
             var redirectText = document.getElementById('redirect-text');
             var interval = setInterval(function() {
                 seconds--;
                 countdown.textContent = seconds;
                 if (seconds <= 0) {
                     clearInterval(interval);
                     window.location.href = 'UHome.php';
                 }
             }, 1000);
             </script>";

        // If the Payment Method is Online then it will redirect to UPI.php where there will be a QR Code for making the payment
    } if ($paymentMethod === "Online") {
        // Redirect to 
        header("Location: UPI.php");
        exit; // Ensure that no other output is sent
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
