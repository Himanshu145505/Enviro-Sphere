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
            overflow: hidden;
            /* overflow-x: hidden; Hide horizontal scroll bar */
            transition: background-color 0.3s, color 0.3s;
        }

/* Unique hover effect for navbar list items */
header a:hover {
    color: #14ff72cb; /* Change text color to green */
    background: lightblue  ; /* Change background color to green */
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
            margin-top: -350px;
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


#options {
    display: flex;
    justify-content: center;
    margin-top: 350px ;
    margin-left:15px;
}

.option {
    text-align: center;
    margin: 0 20px;
    margin-top: -700px;
}

.option a {
    text-decoration: none; /* Remove underline */
    outline: none; /* Remove outline */
}



.option img {
    width: 170px;
    height: 170px;
    border-radius: 50%;
    border: 2px solid transparent;
    transition: border-color 0.3s;
    margin-top: 90px;
}

.option p {
    color: white;
    margin-top: 10px;
    font-size: 20px;
    outline: none !important;
}


.option:hover img {
    border-color: lightblue;
}

.submit-design-btn {
    display: inline-block;
    padding: 10px 20px;
    margin-bottom: -410px; /* Adjust the top margin to move the button up */
/* Adjust the left margin */
margin-left:10px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;]
    
}

.UserICON{
            margin-left: -50px;
        }

        .designTodayBox {
            text-align: center;
            background-color: #333; /* Dark background color */
            color: white; /* Text color */
            padding: 20px; /* Padding around the text */
            border-radius: 5px; /* Rounded corners */
            margin-left: 250px !important; /* Spacing from the options above */
            height: 210px;
            width: 1000px;
            top: 15%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Box shadow for a raised effect */
        }

        .designTodayBox:hover {
            /* Gradient effect */
            background-image: linear-gradient(45deg, #ff7a18, #af002d, #319197, #007f4f, #ffd166, #8338ec, #00b4d8, #ff5252, #7209b7, #ff3f6c);
            background-size: 400% 400%;
            animation: gradientBG 5s ease infinite;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5), 0 0 20px rgba(255, 255, 255, 0.5), 0 0 30px rgba(255, 255, 255, 0.5);
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }


        

</style>
</head>

<body>

<header>
    <section>

        <div id="container">

            <div id="shopName"><a href="DeHome.php"> <b>Enviro</b>Sphere</a></div>

            
            
            <div id="collection">
                <div id="homee"><a href="DeHome.php">Home</a></div>
                <div id="Category">
</div>

                <div id="Awareness"><a href="DeAwareness.html">Awareness</a></div>
                </div>

                <div>
            <a href="DesSub.php" id="subdesignbut" class="submit-design-btn">Submit Designs</a>
</div>

                

            <div id="user">

                <a class="UserICON" href="DeDashboard.php
                "> <i class="fas fa-user-circle userIcon"></i> </a>
            </div>
        </div>

    </section>
</header>

<button class="DLMode" id="mode-toggle"><img id="mode-icon" src="Cont/brightness.png" alt="Mode"></button>


<div class="designTodayBox" id="options">
<div>
<h1  id="movtext" style="color:white; border:2px solid; height:410px; width:1042px ;text-align: center; margin-top:-150px; margin-left:-5px; ">What Will You Design Today ?</h1>
<div>
    </div>


<div id="options">
    <div class="option">
        <a href="De3DViewer.html">
            <img src="Cont/3dimg.png" alt="3D Viewer">
            <p>3D Viewer</p>
        </a>
    </div>
    <div class="option">
        <a href="DeExplore.php">
            <img src="Cont/explore.avif" alt="Explore Elements">
            <p>Explore Elements</p>
        </a>
    </div>
    <div class="option">
        <a href="Submittedpro.php">
            <img src="Cont/projects.webp" alt="Submitted Projects">
            <p>Submitted Projects</p>
        </a>
    </div>

    



</div>




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


 // JavaScript for following cursor
document.querySelector('.designTodayBox').addEventListener('mousemove', (e) => {
            let x = e.clientX / window.innerWidth;
            let y = e.clientY / window.innerHeight;
            let element = document.querySelector('.designTodayBox');
            element.style.backgroundPosition = `${x * 100}% ${y * 100}%`;
        });

</script>

</body>
</html>
