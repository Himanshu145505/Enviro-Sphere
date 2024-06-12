<?php
// Database credentials
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

// Function to sanitize user input
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Process sign up form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"] == "Sign Up") {
    $name = sanitize_input($_POST["Name"]);
    $email = sanitize_input($_POST["Email"]);
    $password = sanitize_input($_POST["Password"]);
    $source = sanitize_input($_POST["source"]); // Added field for source page

    // Insert user data into the users table
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "New user record created successfully";
        if ($source == "designer") {
            header("Location: DeHome.php."); // Redirect to Demain.html for designers
        } else {
            header("Location: UHome.php"); // Redirect to Umain.html for users
        }
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Process sign in form
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]) && $_POST["submit"] == "Sign In") {
    $email = sanitize_input($_POST["Email"]);
    $password = sanitize_input($_POST["password"]);
    $source = sanitize_input($_POST["source"]); // Added field for source page

    // Check if user exists in the users table
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($source == "designer") {
            header("Location: DeHome.php"); // Redirect to Demain.html for designers
        } else {
            header("Location: UHome.php"); // Redirect to Umain.html for users
        }
        exit;
    } else {
        echo "<script>alert('Invalid Credentials !! Please try again');</script>";
    }
}

// Close connection
$conn->close();
?>
