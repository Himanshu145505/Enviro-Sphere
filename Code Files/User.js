function signupFormValidate() {
    var text = document.getElementById("email1");
    var name = document.getElementById("Name");
    var password = document.getElementById("password1");
    var confirmPassword = document.getElementById("ConfirmPassword");
    var isSubmit = true;

    document.getElementById("signupemailerror").innerHTML = "";
    document.getElementById("signupnameerror").innerHTML = "";
    document.getElementById("signuppasserror").innerHTML = "";
    document.getElementById("signupconfirmpasserror").innerHTML = "";
    
    name.classList.remove("error1");
    text.classList.remove("error1");
    password.classList.remove("error1");
    confirmPassword.classList.remove("error1");

    if (text.value == "") {
        document.getElementById("signupemailerror").innerHTML = "This field cannot be empty";
        text.classList.add("error1");
        isSubmit = false;
    } else {
        if (text.value.includes("@")) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(text.value)) {
                document.getElementById("signupemailerror").innerHTML = "Invalid email format";
                text.classList.add("error1");
                isSubmit = false;
            }
        } else {
            var phoneRegex = /^[0-9]{10}$/;
            if (!phoneRegex.test(text.value)) {
                document.getElementById("signupemailerror").innerHTML = "Invalid email or Phone ";
                text.classList.add("error1");
                isSubmit = false;
            }
        }
    }

    if (name.value == "") {
        document.getElementById("signupnameerror").innerHTML = "Name cannot be empty";
        name.classList.add("error1");
        isSubmit = false;
    }

    if (password.value == "") {
        document.getElementById("signuppasserror").innerHTML = "Password cannot be empty";
        password.classList.add("error1");
        isSubmit = false;
    }

    if (confirmPassword.value == "") {
        document.getElementById("signupconfirmpasserror").innerHTML = "Confirm Password cannot be empty";
        confirmPassword.classList.add("error1");
        isSubmit = false;
    } else if (password.value !== confirmPassword.value) {
        document.getElementById("signupconfirmpasserror").innerHTML = "Passwords do not match";
        confirmPassword.classList.add("error1");
        isSubmit = false;
    }

    return isSubmit;
}

function signinFormValidate() {
    var email = document.getElementById("Email1");
    var password = document.getElementById("Password1");
    var isSubmit = true;

    document.getElementById("emailerrorone").innerHTML = "";
    document.getElementById("passerrorone").innerHTML = "";

    email.classList.remove("error11");
    password.classList.remove("error11");

    if (email.value == "") {
        document.getElementById("emailerrorone").innerHTML = "This field cannot be empty";
        email.classList.add("error11");
        isSubmit = false;
    } else {
        if (!email.value.includes("@") && isNaN(email.value)) {
            document.getElementById("emailerrorone").innerHTML = "Invalid email or Phone";
            email.classList.add("error11");
            isSubmit = false;
        }
    }

    if (password.value == "") {
        document.getElementById("passerrorone").innerHTML = "Password cannot be empty";
        password.classList.add("error11");
        isSubmit = false;
    }

    return isSubmit;
}

document.getElementById("SignInFo").addEventListener("submit", function(event) {
    if (!signinFormValidate()) {
        event.preventDefault(); 
    }
});

document.getElementById("SignupFo").addEventListener("submit", function(event) {
    if (!signupFormValidate()) {
        event.preventDefault(); 
    }
});

document.getElementById("eyeball").addEventListener("click", function() {
    togglePasswordVisibility('signin');
});

document.getElementById("eyeballtwo").addEventListener("click", function() {
    togglePasswordVisibility('signup');
});

document.getElementById("swapButton").addEventListener("click", function() {
    const signinBar = document.querySelector('.SigninBar');
    const signupBar = document.querySelector('.SignupBar');
    const videoAni = document.querySelector('.VideoAni');
    const container = document.querySelector('.BGvideo');

    const signinBarRect = signinBar.getBoundingClientRect();
    const signupBarRect = signupBar.getBoundingClientRect();
    const videoAniRect = videoAni.getBoundingClientRect();

    if (this.textContent === "Sign Up") {

        videoAni.style.marginLeft = '0';

        signinBar.style.left = `${container.offsetWidth}px`;

        
        signupBar.style.left = `${container.offsetWidth - signupBarRect.width}px`;

        
        this.textContent = "Sign In";

        
        this.style.left = '390px';
    } else {
        
        videoAni.style.marginLeft = `${container.offsetWidth - videoAniRect.width}px`;

        
        signinBar.style.left = '0';

        
        signupBar.style.left = `${container.offsetWidth}px`;

        
        this.textContent = "Sign Up";

        
        this.style.left = '870px';
    }
});

function togglePasswordVisibility(formType) {
    var passwordInput = document.getElementById(formType === 'signup' ? "password1" : "Password1");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var toggle = document.getElementById("toggle");

    toggle.addEventListener("change", function() {
        if (this.checked) {
            // Redirect to 'Designer.php' when toggle is on
            window.location.href = "Designer.php";
        } else {
            // Redirect to 'user.php' when toggle is off
            window.location.href = "user.php";
        }
    });
});


