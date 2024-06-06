<?php
$hostname = '127.0.0.1:3308';
$username = 'root';
$password = '';
$db_name = 'envirosphere';

// Create connection
$conn = new mysqli($hostname, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize variables
$name = "";
$email = "";
$password = "";
$data = "";

// Query to fetch name, email, and password from the database
$sql = "SELECT name, email, password FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of the first row (assuming there's only one user for now)
    $row = $result->fetch_assoc();
    $name = $row["name"];
    $email = $row["email"];
    $password = $row["password"];
}

// Check if "Security & Pass" is clicked
if (isset($_GET['section']) && $_GET['section'] == 'security-pass') {
    $data = "<table>";
    $data .= "<tr><th>Email</th><th>Password</th></tr>";
    $data .= "<tr><td>".$email."</td><td>".$password."</td></tr>";
    $data .= "</table>";
}

// Check if "Orders" is clicked
if (isset($_GET['section']) && $_GET['section'] == 'orders') {
    // Query to fetch cart details
    $cart_sql = "SELECT * FROM cart_details";
    $cart_result = $conn->query($cart_sql);

    if ($cart_result->num_rows > 0) {
        // Output data of each row
        $data .= "<table>";
        $data .= "<tr><th>Product ID</th><th>Name</th><th>Description</th><th>Price</th><th>Quantity</th><th>Total Price</th></tr>";
        while($cart_row = $cart_result->fetch_assoc()) {
            $data .= "<tr><td>".$cart_row["product_id"]."</td><td>".$cart_row["name"]."</td><td>".$cart_row["description"]."</td><td>".$cart_row["price"]."</td><td>".$cart_row["quantity"]."</td><td>".$cart_row["total_price"]."</td></tr>";
        }
        $data .= "</table>";
    } else {
        $data = "0 results";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="DeDash.css">
    <style>
        .welcome-message {
            font-size: 24px;
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background: lightblue;
        }
    </style>
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
            


                <li>
                    <a href="DeHome.php" style="text-decoration: none;">
                        <div class="welcome-message"></div>
                    </a>
                </li>

                <li>
                    <a href="DeHome.php" style="text-decoration: none;">
                        <div class="welcome-message">Home</div>
                    </a>
                </li>

                <li>
                    <a href="#" style="text-decoration: none;">
                        <div class="welcome-message">Welcome <?php echo $name; ?>!</div>
                    </a>
                </li>

                <li>
                    <a href="mailto:himanshusharma24795@gmail.com">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="mailto:himanshusharma24795@gmail.com">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="?section=security-pass">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Security & Pass</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Display the welcome message and data -->
        <div class="main" id="data">
            <?php echo $data; ?>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
