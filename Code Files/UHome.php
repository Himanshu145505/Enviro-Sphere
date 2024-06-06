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
    background: #14ff72cb; /* Change background color to green */
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
            background-color: #186F65;
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
            margin-left: -10px;
        }

        .CART{
            margin-left : 8px
        }

        #input{
            width : 650px;
        }

        #homee{
            margin-left: -95px;
            margin-top : 8px;
        }

        #Category{

            margin-left : 30px;
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
    <a href="#">Category</a>
    <div class="dropdown-content">
        <a href="#">Wall Hangings</a>
        <a href="#">Table Organizers</a>
        <a href="#">Fashion</a>
        <a href="#">Diaries</a>
        <a href="#">Decoration</a>
        <a href="#">Gadgets</a>
        <a href="#">Giftings</a>
        <a href="#">Kids</a>
        <a href="#">Kitchen</a>
        <a href="#">Utensils</a>
        <a href="#">Organizers</a>
        <a href="#">Furniture</a>
    </div>
</div>

                <div id="Awareness"><a href="Awareness.html">Awareness</a></div>
                </div>

            <!-- SEARCH SECTION -->
            <div style="margin-left: 20px; margin-top: 10px;" id="search">
                <i class="fas fa-search search"></i>
                <input type="text" id="input" name="searchBox" placeholder="Search for Content" onkeyup="filterProducts()">
            </div>
            <!-- USER SECTION (CART AND USER ICON) -->
            <div id="user">
                <a class="CART" href="shop.php" id="cart-button"> <i class="fas fa-shopping-cart addedToCart"></i></a>

                <a class="UserICON" href="Dashboard.php
                "> <i class="fas fa-user-circle userIcon"></i> </a>
            </div>
        </div>

    </section>
</header>

<section>
    <div id="containerSlider">
        <div id="slidingImage"> <img src="Cont/img1.webp" alt="image1"> </div>
        <div id="slidingImage"> <img src="Cont/img2.webp" alt="image2"> </div>
        <div id="slidingImage"> <img src="Cont/img3.webp" alt="image3"> </div>
        <div id="slidingImage"> <img src="Cont/img4.webp" alt="image4"> </div>
    </div>
</section>

<button class="DLMode" id="mode-toggle"><img id="mode-icon" src="Cont/brightness.png" alt="Mode"></button>

<button type="submit" name="btn_upload" class="uploadbutt" id="upload-button">
    <img src="Cont/photo.png" alt="Camera" style="width: 40px; height: 40px;">
</button>

<script>
    document.getElementById("upload-button").addEventListener("click", function() {
        window.location.href = "Userupload.php";
    });
</script>

<h3 style="margin-left : 1370px; margin-top: -1px" class="wall-heading">Upload Material</h3>




<h1 class="wall-heading">Explore The Ultimate Range of Enviro Sphere...</h1>

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
    $sql = "SELECT * FROM images";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $image = $row['image'];
            $name = $row['name'];
            $description = $row['description'];
            $price = $row['price'];

            // Display product div with fetched image and "Add to Cart" button
            echo "<div class='product'>
                    <img src='./image/$image' alt='$name'>
                    <div class='product-info'>
                        <h3>$name</h3>
                        <p>$description</p>
                        <p>Rs.$price</p>
                        <form action='addToCart.php' method='post'>
                        <input type='hidden' name='id' value='$id'>
                        <input type='hidden' name='name' value='$name'>
                        <input type='hidden' name='description' value='$description'>
                        <input type='hidden' name='price' value='$price'>
                        <input type='hidden' name='image' value='./image/$image'> <!-- Assuming $image contains the image filename -->
                        <button type='submit' class='add-to-cart'>Add to Cart</button>
                    </form>
                    
                    </div>
                </div>";
                
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</div>

<div id="cart" style="display: none;">
    <h2>Cart</h2>
    <ul id="cart-items"></ul>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script>
    $(document).ready(function() {
        $('#containerSlider').slick({
            dots: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.add-to-cart').on('click', function() {
            var form = $(this).closest('.add-to-cart-form');
            var id = form.find('input[name="id"]').val();
            var name = form.find('input[name="name"]').val();
            var description = form.find('input[name="description"]').val();
            var price = form.find('input[name="price"]').val();
            var image = form.find('input[name="image"]').val();

            // Send the data to addToCart.php using AJAX
            $.ajax({
                url: 'addToCart.php',
                type: 'POST',
                data: { id: id, name: name, description: description, price: price, image: image },
                success: function(response) {
                    // Handle success response
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    // Handle error
                    console.error(error);
                }
            });
        });
    });


    function filterProducts() {
    var input, filter, products, product, name, description, i, txtValueName, txtValueDesc;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    products = document.getElementById("products");
    product = products.getElementsByClassName("product");

    for (i = 0; i < product.length; i++) {
        name = product[i].getElementsByTagName("h3")[0];
        description = product[i].getElementsByTagName("p")[0];
        txtValueName = name.textContent || name.innerText;
        txtValueDesc = description.textContent || description.innerText;
        if (txtValueName.toUpperCase().indexOf(filter) > -1 || txtValueDesc.toUpperCase().indexOf(filter) > -1) {
            product[i].style.display = "";
        } else {
            product[i].style.display = "none";
        }
    }
}

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

document.getElementById("Category").addEventListener("mouseenter", function() {
    this.classList.add("dropdown-active");
});

document.getElementById("Category").addEventListener("mouseleave", function() {
    this.classList.remove("dropdown-active");
});





document.addEventListener("DOMContentLoaded", function() {
    // Function to filter products based on the clicked category
    function filterProductsByCategory(category) {
        var products = document.getElementsByClassName("product");

        for (var i = 0; i < products.length; i++) {
            var description = products[i].getElementsByTagName("p")[0];
            var descriptionText = description.textContent || description.innerText;

            if (descriptionText.toUpperCase().includes(category.toUpperCase())) {
                products[i].style.display = "";
            } else {
                products[i].style.display = "none";
            }
        }
    }

    // Event listener for category links
    var categoryLinks = document.querySelectorAll("#Category .dropdown-content a");
    categoryLinks.forEach(function(link) {
        link.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default link behavior
            var category = this.textContent.trim(); // Get the clicked category
            filterProductsByCategory(category); // Filter products based on the category
        });
    });
});


</script>

</body>
</html>
