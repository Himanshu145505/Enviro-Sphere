<?php
// Database Details
// Server Name
$servername = "127.0.0.1:3308";
// User Name Default
$username = "root";
$password = "";
$dbname = "envirosphere";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the item is already in the cart
$check_stmt = $conn->prepare("SELECT * FROM cart WHERE id = ?");
$check_stmt->bind_param("i", $id);
$id = $_POST['id'];
$check_stmt->execute();
$check_result = $check_stmt->get_result();


if ($check_result->num_rows > 0) {
    // Item is already in the cart message and redirection to homepage
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('popup').style.display = 'block';
                setTimeout(function() {
                    window.location.href = 'UHome.php'; 
                }, 400); 
            });
          </script>";
} else {
    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO cart (id, name, description, price, image) VALUES (?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("issss", $id, $name, $description, $price, $image);

    // Set parameters and execute
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image']; // Assuming 'image' is the name of the hidden input field for the image URL
    if (!$stmt->execute()) {
        die("Error executing statement: " . $stmt->error);
    }

    // Redirection to Home Page
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                document.getElementById('popup-success').style.display = 'block';
                setTimeout(function() {
                    window.location.href = 'UHome.php';
                }, 400);
            });
          </script>";
}

$check_stmt->close();
if (isset($stmt)) {
    $stmt->close();
}
// Connection Close
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>

<!--     Popup message Section  -->
    <title>Pop-up Styling</title>
    <style>

/*         Pop Up Styling */
        .popup {
        display: none;
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        width: 400px; /* Increased width */
        padding: 30px; /* Increased padding */
        border: 2px solid #333;
        background-color: #f9f9f9;
        border-radius: 5px;
        z-index: 1000;
        text-align: center; /* Center the text */
        font-size: 30px; /* Increase font size */
    }

/*         Popup Success Message */
    .popup-success {
        border-color: green;
    }
    </style>
</head>
<body>

<!--     Item is Already in the Cart message -->
    <div id="popup" class="popup">
        Item is already in the cart
    </div>

<!--     Added to Cart Message -->
    <div id="popup-success" class="popup popup-success">
        Added to Cart
    </div>
</body>
</html>
