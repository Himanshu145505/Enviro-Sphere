<?php
// Database Details
// Server Name
$servername = "127.0.0.1:3308";
// User Name Default
$username = "root";
// password default
$password = "";
// Databse name in PHP my admin (Xampp)
$dbname = "envirosphere";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the item is already in the cart
$check_stmt = $conn->prepare("SELECT * FROM cart WHERE id = ?");
// Id
$check_stmt->bind_param("i", $id);
$id = $_POST['id'];
// Execute
$check_stmt->execute();
// Get Result
$check_result = $check_stmt->get_result();

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
