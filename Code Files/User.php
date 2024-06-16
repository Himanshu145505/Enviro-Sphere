<!DOCTYPE html>
<html>
<head>
    <title>User</title>
    <link rel="stylesheet" href="Userr.css">
</head>
<body>
<!--     Sign Up Bar -->
    <div id="swapButton">Sign Up</div>
<!--     Background Video Container -->
    <div class="BGvideo">
        <video style="width: 100%;" autoplay loop muted>
            <source src="Cont/DemoDemo.mp4" type="video/mp4">
        </video>
    </div>
<!--     Sign in Bar -->
    <div class="SigninBar">
        <div class="WebName1">
            <i>Enviro-Sphere</i>
        </div>
        <div class="LoginFo1">
            <form id="SignInFo" action="connect3.php" method="post">
                <h1>Sign In</h1>
                <h1>Welcome User</h1>

<!--                 Sign In Bar detailing -->

<!--Email Input-->

                <input type="text" name="Email" id="Email1" class="Emailpho1" placeholder="Email or Phone">
                <span id="emailerrorone" class="emailerrorone"></span>

<!--Password Input -->

                <input type="password" name="password" id="Password1" class="Password1" placeholder="Password">
                <button id="eyeball" type="button"><img src="Cont/eyeball.png" height="20px" width="20px"></button>
                <span id="passerrorone" class="passerrorone"></span>

                <div class="position1">
                <input type="hidden" name="source" value="user">

<!--Submit Button -->

                    <input type="submit" name="submit" id="submit1" value="Sign In">
                    <a href="Designer.php" class="switchcli">Swith to Designer</a>
                </div>
            </form>
        </div>
    </div>

<!--     Sign Up bar Container -->

    <div class="SignupBar">
        <div class="WebName">
            <i>Enviro-Sphere</i>
        </div>
        <div class="LoginFo">
            <form id="SignupFo" action="connect3.php" method="post">
                <h1>Sign up as a User</h1>

<!--                 Name Input -->
                <input type="text" name="Name" id="Name" class="Namee" placeholder="Name">
                <span id="signupnameerror" class="nameerror"></span>

<!--                 Email or Phone Input -->

                <input type="text" name="Email" id="email1" class="Emailpho" placeholder="Email or Phone">
                <span id="signupemailerror" class="emailerror"></span>

<!--                 Password Input -->

                <input type="password" name="Password" id="password1" class="Password" placeholder="Password">
                <button id="eyeballtwo" type="button"><img src="Cont/eyeball.png" height="20px" width="20px"></button>
                <span id="signuppasserror" class="passerror"></span>

<!--                 Confirm Password Input -->

                <input type="password" name="ConfirmPassword" id="ConfirmPassword" class="ConfirmPassword" placeholder="Confirm Password">
                <span id="signupconfirmpasserror" class="conpasserror"></span>
                <div class="position2">

                <input type="hidden" name="source" value="user">
                    <input type="submit" name="submit" id="submit" value="Sign Up">
                </div>
            </form>
        </div>
    </div>

<!--     Right Div(Swipe) Video -->

    <div class="VideoAni">
        <video style="width: 100%;" autoplay loop muted>
            <source src="Cont/Enviro-Sphere.mp4" type="video/mp4">
        </video>
    </div>
    
    
    <script src="User.js"></script>
</body>
</html>
