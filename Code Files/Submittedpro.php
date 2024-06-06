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
    margin-top: -49px;
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



#input{
    width : 650px;
}

#homee{
    margin-left: -15px;
    margin-top : 8px;
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

.form-label{
    color:white;
}

.marg{
    margin-top: 100px;
    margin-left: 600px;
}



h4 {
            color: #343a40;
        }

        .table {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            margin-top: 60px;
            margin-left: 50px;
        }

        .table th,
        .table td {
            border: 1px solid #dee2e6;
            padding: 8px;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .table img {
            max-width: 100px;
            height: auto;
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
    <div class="dropdown-content">
    </div>
</div>
        

    </section>
</header>



<div class="container col-12 m-5">
<div class="col-12">
        <h4 style="color:white;" class="text-center">Submitted Designs</h4>
    </div>
    <div class="col-12">
        <h4 style="color:white; margin-top: 70px;" class="text-center">Submitted Designs</h4>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Money Requirement</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                $con = mysqli_connect("127.0.0.1:3308", "root", "", "envirosphere");

                // Check connection
                if (mysqli_connect_errno()) {
                    echo "Failed to connect to MySQL: " . mysqli_connect_error();
                    exit();
                }

                // Fetch data from database
                $sql = "SELECT * FROM designersubmit";
                $result = mysqli_query($con, $sql);

                // Display data in table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td><img src='uploads/" . $row['image'] . "' alt='Design Image'></td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['moneyrequirement'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "</tr>";
                }

                // Close connection
                mysqli_close($con);
                ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>