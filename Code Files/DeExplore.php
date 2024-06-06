<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviro Sphere Home</title>

    <!-- Links -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
    <script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="header.css">
    <script src="https://kit.fontawesome.com/4a3b1f73a2.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="footer.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles-light.css" id="theme-style">

    <style>

        body{
            background-color : black;
            overflow-x: hidden; /* Hide horizontal scroll bar */
            transition: background-color 0.3s, color 0.3s;
        }

/* Unique hover effect for navbar list items */
header a:hover {
    color: #14ff72cb; /* Change text color to green */
    background: lightblue; /* Change background color to green */
    border-radius: 2px; /* Add border-radius */
}


/* Remove green color effect from cart and user icon */
.CART:hover,
.UserICON:hover {
    color: inherit; /* Use the default text color */
    background: none; /* Remove background color */
    border-radius: inherit; /* Use the default border-radius */
}


        .light-mode {
    /* Light mode styles */
    background-color: white;
    color: black;
}

.dark-mode {
    /* Dark mode styles */
    background-color: black;
    color: white;
}


        /* Lighter variant of white */
        #container a {
    color: #f0f0f0; /* Lighter white */
}

/* Change color of "Enviro Sphere" */
#shopName {
    color: #e0e0e0; /* Lighter variant of white */
    font-family: 'Raleway', sans-serif;/* Use a different font, for example, Roboto */
}


/* Change color of cart icon */
    .addedToCart {
    color: #f0f0f0; /* Lighter white */
}

/* Change color of user icon */
    .userIcon {
    color: #f0f0f0; /* Lighter white */
}

        #container {
            background-color:  rgb(6, 61, 80);
            margin-top:-150px;
        }

        #containerSlider
        {
            margin: auto;
            width: 90%;
            text-align: center;
            padding-top: 100px;
            box-sizing: border-box;
        }
        #containerSlider img
        {
            width: 100%;
            height: 140%;
            text-align: center;
            align-content: center;
        }
        @media(max-width: 732px)
        {
            #containerSlider img
            {
                height: 12em;
            }
        }
        @media(max-width: 500px)
        {
            #containerSlider img
            {
                height: 10em;
            }
        }

        /* PRODUCT STYLES */
        #products {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 40px;
        }

        .product {
            width: 255px;
            height: 335px;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor:pointer;
            background-color:  rgb(6, 61, 80);
            margin-bottom : 20px;
            
        }

        .product:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
        }

        .product img {
    width: 100%;
    height: 230px;
    border-radius: 5px;
    object-fit: cover;
    transition: transform 0.3s;
}

.product:hover img {
    transform: scale(1.1);
}


        .product button {
            margin-top: 10px;
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .product button:hover {
            background-color: #0056b3;
        }

        .product-info {
            text-align: center;
            position: relative;
            top: -10px; 
        }

        .add-to-cart {
            width: 270px;
            margin-left: -135px;
            height: 30px;
            position: absolute;
            bottom: -40px; 
            color: white; /* White text color */
            border: none;
            border-radius: 3px;
            cursor: pointer;
            background-color: #0d7e9dfc; !important;
        }

        .add-to-cart:hover {
    background-color: rgba(38, 106, 201, 0.79); !important; /* Darker green on hover */
}
        .UserICON{
            margin-left: 310px;
        }

        .CART{
            margin-left : 8px
        }

        #input{
            width : 650px;
        }

        #homee{
            margin-left: -110px;
            margin-top : 8px;
        }

        #Category{
            margin-left : 30px;
            margin-top: 9px

        }

        #Awareness{
            margin-top: -22px;
            left : 5%;
            margin-left: 550px
            
        }

 /* Change color of inactive dots to green */
.slick-dots li button:before {
    
    color: white;
}

/* Change color of active dot to white */
.slick-dots li.slick-active button:before {
    color: green;

    
}


/* Move next and previous buttons down */
.slick-prev{
    top: 55%;
    transform: translateY(50%);
    font-size: 30px;
    left: -35px;
}

.slick-next {
    top: 55%;
    transform: translateY(50%);
    font-size: 30px;
}

#homee a,
#Category a,
#Awareness a {
    font-size: 17px; /* Change the value as needed */
}

/* Unique hover effect for navbar list items */
#container a:hover {
    color: #004d00; /* Change text color to green */
    transform: scale(1.1); /* Scale the item slightly on hover */
    transition: color 0.3s, transform 0.3s; /* Smooth transition for color and scale */
}

#input::placeholder {
    font-size: 15px; /* Adjust the font size as needed */
}

.wall-heading{
    margin-left:30px;
    color:white;
}


/* Light mode styles */
.light-mode .add-to-cart {
    color: black; /* Change the color for light mode */
}

/* Dark mode styles */
.dark-mode .add-to-cart {
    color: white; /* Change the color for dark mode */
}

/* Increase the size of next and previous buttons */
/* Increase the size of next and previous buttons */
.slick-prev::before,
.slick-next::before {
    font-size: 30px !important; /* Adjust the font size as needed */
}

/* Change color of inactive dots to black in light mode */
.light-mode .slick-dots li button:before {
    color: black;
}

/* Change color of active dot to green in light mode */
.light-mode .slick-dots li.slick-active button:before {
    color: green;
}



/* Styles for the mode toggle button */
#mode-toggle {
    background: none;
    border: none;
    cursor: pointer;
}

#mode-icon {
    width: 24px; /* Adjust the width and height as needed */
    height: 24px;
}

#mode-toggle {
    position: fixed; /* Fixed position */
    top: 26px; /* Distance from the top of the viewport */
    right: 14px; /* Distance from the right of the viewport */
    z-index: 1000; /* Ensure it's above other elements */

}

/* Change color of previous and next buttons in light mode */
.light-mode .slick-prev::before,
.light-mode .slick-next::before {
    color: black !important;
}

/* Change color of previous and next buttons in dark mode */
.dark-mode .slick-prev::before,
.dark-mode .slick-next::before {
    color: white !important;
}

/* Dropdown container */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: black;
    min-width: 140px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    left: 465px;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color of links on hover */
.dropdown-content a:hover {
    background-color: rgba(38, 106, 201, 0.79);
}

/* Show the dropdown menu when the dropdown-active class is applied */
.dropdown-active .dropdown-content {
    display: block;
}


/* Light mode styles for dropdown container */
.light-mode .dropdown-content {
    background-color: white; /* Set background color to white */
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

/* Light mode styles for links inside the dropdown */
.light-mode .dropdown-content a {
    color: black !important; /* Set default text color to black */
}

/* Change color of links on hover in light mode */
.light-mode .dropdown-content a:hover {
    color: rgba(38, 106, 201, 0.79); !important; /* Change text color to green on hover */
    background-color: rgba(38, 106, 201, 0.79);;
}

/* Default color for product content */
.product h3,
.product p {
    color: white;
}

/* Light mode styles for product content */
.light-mode .product h3,
.light-mode .product p {
    color: black;
}

/* Light mode styles */
.light-mode .wall-heading {
    color: black; /* Change the color for light mode */
}

/* Dark mode styles */
.dark-mode .wall-heading {
    color: white; /* Change the color for dark mode */
}

.uploadbutt{
    border: none; /* Remove border */
    background: none; /* Remove background */
    cursor: pointer;
    height:50px;
    width:40px;
    margin-left: 1415px;
    margin-top:14px;
    transition: transform 0.2s ease;
}

#upload-button:hover {
    transform: scale(1.1); /* Increase the size by 10% on hover */
}



@media(max-width: 732px) {
    #containerSlider img {
        height: 12em; /* Reduce the height of sliding images */
    }
}

/* Styles for screens smaller than 500px */
@media(max-width: 500px) {
    #containerSlider img {
        height: 10em; /* Further reduce the height of sliding images */
    }
}

/* Styles for small screens */
@media(max-width: 768px) {
    #container {
        flex-direction: column; /* Stack the elements vertically */
        align-items: center; /* Center align the elements */
    }

    #search {
        margin-top: 20px; /* Increase the top margin */
        width: 90%; /* Make the search box wider */
    }

    #user {
        margin-top: 20px; /* Increase the top margin */
    }

    /* Adjust the margin for the awareness section */
    #Awareness {
        margin-top: 0;
        margin-left: 0;
    }
}

/* Styles for extra small screens */
@media(max-width: 480px) {
    .product {
        width: 100%; /* Make the product divs full width */
        margin: 10px 0; /* Add vertical margin */
    }

    .add-to-cart {
        width: 100%; /* Make the add to cart button full width */
        margin-left: 0; /* Remove the left margin */
    }
}

.EE{
    color: white;
    margin-top: 150px;
    margin-left:20px;
}

.download-btn {
    display: inline-block;
    padding: 8px 16px;
    margin-top: -25px;
    background-color: #007bff; /* Blue background color */
    color: white; /* White text color */
    text-decoration: none; /* Remove underline */
    border-radius: 5px; /* Rounded corners */
    transition: background-color 0.3s; /* Smooth transition for background color */
    width:200px;
}

.download-btn:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

</style>
</head>

<body>

<header>
    <section>
        <!-- MAIN CONTAINER -->
        <div id="container">
            <!-- SHOP NAME -->
            <div id="shopName"><a href="DeHome.php"> <b>Enviro</b>Sphere</a></div>
            <!-- COLLECTION ON WEBSITE -->
            <div id="collection">
                <div id="homee"><a href="DeHome.php">Home</a></div>
                <div id="Category">
</div>

                <div id="Awareness"><a href="DeAwareness.html">Awareness</a></div>
                </div>

            <!-- SEARCH SECTION -->
           
            <!-- USER SECTION (CART AND USER ICON) -->
            <div id="user">

                <a class="UserICON" href="DeDashboard.php
                "> <i class="fas fa-user-circle userIcon"></i> </a>
            </div>
        </div>

    </section>
</header>

<button class="DLMode" id="mode-toggle"><img id="mode-icon" src="Cont/brightness.png" alt="Mode"></button>


<h1 class="EE">Explore Elements :</h1>

<!-- PRODUCT SECTION -->
<div id="products">
    <?php
    // Database connection details
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

    // Fetch products from the database
    $sql = "SELECT * FROM designerimages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $image = $row['image'];
            $name = $row['name'];
            $description = $row['description'];

            echo "<div class='product'>
                    <img src='./image/$image' alt='$name'>
                    <div class='product-info'>
                        <h3>$name</h3>
                        <p>$description</p>
                        <a href='./image/$image' download class='download-btn'>Download</a>
                    </div>
                </div>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>


<script>

document.getElementById("mode-toggle").addEventListener("click", function() {
    var body = document.body;
    var currentMode = body.classList.contains("light-mode") ? "light" : "dark";
    body.classList.toggle("light-mode");

    // Change colors based on the current mode
    if (currentMode === "dark") {
        body.style.backgroundColor = "white";
        body.style.color = "black";
        document.getElementById("mode-icon").src = "Cont/night-mode.png"; // Update path to moon icon
    } else {
        body.style.backgroundColor = "black";
        body.style.color = "white";
        document.getElementById("mode-icon").src = "Cont/brightness.png"; // Update path to sun icon
    }
});


</script>

</body>
</html>
