<!DOCTYPE html>
<html>
<head>
    <title>Designer</title>
    <link rel="stylesheet" href="Designer.css">
</head>
<body>
    <div id="swapButton">Sign Up</div>
    <div class="BGvideo">
        <video style="width: 100%;" autoplay loop muted>
            <source src="Cont/DemoDemo.mp4" type="video/mp4">
        </video>
    </div>
    <div class="SigninBar">
        <div class="WebName1">
            <i>Enviro-Sphere</i>
        </div>
        <div class="LoginFo1">
            <form id="SignInFo" action="connect3.php" method="post">
                <h1>Sign In</h1>
                <h1>Welcome Designer</h1>
                <!-- <label class="slider-container">
                    <input type="checkbox" id="toggle">
                    <span class="slider"></span>
                </label> -->

                <input type="text" name="Email" id="Email1" class="Emailpho1" placeholder="Email or Phone">
                <span id="emailerrorone" class="emailerrorone"></span>

                <input type="password" name="password" id="Password1" class="Password1" placeholder="Password">
                <button id="eyeball" type="button"><img src="Cont/eyeball.png" height="20px" width="20px"></button>
                <span id="passerrorone" class="passerrorone"></span>

                <div class="position1">
                <input type="hidden" name="source" value="designer">

                    <input type="submit" name="submit" id="submit1" value="Sign In">
                    <a href="User.php" class="switchcli">Swith to User</a>
                </div>
            </form>
        </div>
    </div>

    <div class="SignupBar">
        <div class="WebName">
            <i>Enviro-Sphere</i>
        </div>
        <div class="LoginFo">
            <form id="SignupFo" action="connect3.php" method="post">
                <h1>Sign up as a Designer</h1>
                <input type="text" name="Name" id="Name" class="Namee" placeholder="Name">
                <span id="signupnameerror" class="nameerror"></span>

                <input type="text" name="Email" id="email1" class="Emailpho" placeholder="Email or Phone">
                <span id="signupemailerror" class="emailerror"></span>

                <input type="password" name="Password" id="password1" class="Password" placeholder="Password">
                <button id="eyeballtwo" type="button"><img src="Cont/eyeball.png" height="20px" width="20px"></button>
                <span id="signuppasserror" class="passerror"></span>

                <input type="password" name="ConfirmPassword" id="ConfirmPassword" class="ConfirmPassword" placeholder="Confirm Password">
                <span id="signupconfirmpasserror" class="conpasserror"></span>
                <div class="position2">

                <input type="hidden" name="source" value="designer">
                    <input type="submit" name="submit" id="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>

    <div class="VideoAni">
        <video style="width: 100%;" autoplay loop muted>
            <source src="Cont/Enviro-Sphere.mp4" type="video/mp4">
        </video>
    </div>
    
    
    <script src="Designer.js"></script>
</body>
</html>
