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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style> 
/*Background Styling  */
        body{
            background-color : black;
            overflow-x: hidden; /* Hide horizontal scroll bar */
            transition: background-color 0.3s, color 0.3s;
        }
/*Header Styling  */
        header a:hover {
    color: #14ff72cb; /* Change text color to green */
    background: #14ff72cb; /* Change background color to green */
    border-radius: 2px; /* Add border-radius */
    padding: 2px 0px;
}


/* Remove green color effect from cart and user icon */
/*         Cart abd User Icon Styling */
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
            background-color: #186F65;
            margin-top: -120px;
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
            margin-top: 20px;
        }

        .product {
            width: 255px;
            height: 332px;
            margin: 10px;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            cursor:pointer;
            background-color: #186F65;
            margin-bottom : 50px;
            
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
            background-color: #004d00; /* Dark green */
            color: white; /* White text color */
            border: none;
            border-radius: 3px;
            cursor: pointer;
            background-color: green !important;
        }

        .add-to-cart:hover {
    background-color: #003300 !important; /* Darker green on hover */
}
        .UserICON{
            margin-left: 200px;
        }

        .CART{
            margin-left : 305px;
            margin-top : 8px;
        }

        #input{
            width : 650px;
        }

        #homee{
            margin-left: 95px;
            margin-top : 8px;
        }

        #Category{

            margin-left : 280px;
            margin-top: 9px

        }

        #Awareness{
            margin-top: -22px;
            left : 5%;
            margin-left:100px
            
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
    background-color: #f1f1f1;
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
    color: green !important; /* Change text color to green on hover */
    background-color: #f1f1f1;
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

.table {
            margin-top: 120px;
            width:1400px;
            margin-left:-325px;
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .table th {
            background-color: #186F65;
            color: white;
        }

        .table td {
            background-color: white;
        }

        .btn-primary {
            background-color: green;
            color: white;
            border-color:#003300;
            margin-top : 5px;
            margin-left: 285px;
        }

        .btn-primary:hover {
            background-color: #003300;
            border-color:green;
        }


#Billinfo{
    color:white;
    margin-left:90px;
    margin-top : -39px;
}
#funame,#phonee,#emaill,#add,#Paymentmeth{
    color:white;
    margin-left:60px;
    margin-bottom : -20px;
}


#phone,#email,#address,#name,#selpayment{
    margin-left:50px;
    margin-top: 5px
}



/* Text color for billing information in dark mode */
.dark-mode #funame,
.dark-mode #add,
.dark-mode #emaill,
.dark-mode #phonee {
    color: white;
}

/* Text color for billing information in light mode */
.light-mode #funame,
.light-mode #Billinfo,
.light-mode #Paymentmeth,
.light-mode #add,
.light-mode #emaill,
.light-mode #phonee {
    color: black;
}


</style>
</head>

<body>

<header>
    <section>
        <!-- MAIN CONTAINER -->
        <div id="container">
            <!-- SHOP NAME -->
            <div id="shopName"><a href="UHome.php"> <b>Enviro</b>Sphere</a></div>
            <!-- COLLECTION ON WEBSITE -->
            <div id="collection">
                <div id="homee"><a href="UHome.php">Home</a></div>
                <div id="Category">
    <a href="Awareness.html">Awareness</a>
    <div class="dropdown-content">
        
    </div>
</div>
                </div>
            <!-- USER SECTION (CART AND USER ICON) -->
            <div id="user">
                <a class="CART" href="shop.php" id="cart-button"> <i class="fas fa-shopping-cart addedToCart"></i></a>

                <a class="UserICON" href="Dashboard.php"> <i class="fas fa-user-circle userIcon"></i> </a>
            </div>
        </div>

    </section>
</header>

<button class="DLMode" id="mode-toggle"><img id="mode-icon" src="Cont/brightness.png" alt="Mode"></button>



<div class="container col-12 m-5">
    <div class="col-6 m-auto">
        <table class="table text-center">
    </table>

    <div class="container mt-5">
    <h2 id="Billinfo" class="text-center mb-4">Billing Information</h2>
    <form id="billing-form" action="process_payment.php" method="post">
            <div class="mb-3">
                <label id="funame" for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="mb-3">
                <label id="add" for="address" class="form-label">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter your address" required></textarea>
            </div>
            <div class="mb-3">
                <label id="emaill" for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
                <label id="phonee" for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
                <label id="Paymentmeth" for="payment-method" class="form-label">Payment Method</label>
                <select id="selpayment" class="form-select" id="payment-method" name="payment-method" required>
                    <option value="">Select a payment method</option>
                    <option value="Online">Pay Online</option>
                    <option value="Cash on Delivery">Cash on Delivery</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Proceed to Pay</button>
        </form>

        <?php

    ?>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

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
