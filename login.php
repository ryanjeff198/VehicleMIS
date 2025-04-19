<?php
session_start();
if (isset($_SESSION["error"])) {
    echo "<p style='color:red'>" . $_SESSION["error"] . "</p>";
    unset($_SESSION["error"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="../favicon/favicon.ico">
    <link rel="stylesheet" href="../css folder/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <nav>
        <ul class="sidebar">
            <li onclick="hideSidebar()"><a href="#"><i class='bx bx-x' style="font-size: 40px;"></i></a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Login/Signup</a></li>
        </ul>
        <ul>
            <li class="brand"><a href="#"><img src="../img folder/kldlogo.png" alt="kld logo"> KLD</a></li>
            <li class="hideOnMobile"><a href="#">Home</a></li>
            <li class="hideOnMobile"><a href="#">Contact us</a></li>
            <li class="hideOnMobile"><a href="#">Login</a></li>
            <li class="menu-button" onclick="showSidebar()"><a href="#"><i class='bx bx-menu' style="font-size: 30px;"></i></a></li>
        </ul>
    </nav>
<br>
<br>
<!--THIS IS LOGIN-->
<center>
    <div class="wrapper" id="loginForm">
        <form action="../html folder/registerBE.php" method="POST">
            <img src="../img folder/kldlogo.png" alt="kld logo">
            <hr color="green">
            <br>
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name = "kldEmail" placeholder="KLD Email" required>
                <label for=""></label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="loginPassword" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
                <span class="toggle-password" onclick="togglePassword('loginPassword', 'toggleLoginPassword')">
                    <i class="fa fa-eye-slash" id="toggleLoginPassword"></i>
                </span>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="forgotpass.php">Forgot Password?</a>
            </div>
            <center><button type="submit" class="btn">Login</button></center>
            <div class="register-link">
                <p>Don't have an account? <a href="#" id="showRegister">Register</a></p>
            </div>
        </form>
    </div>

<!--THIS IS REGISTRATION FORM-->
    <div class="wrapper hide" id="registerForm">
        <form action="../registerBE.php" method="post">
            <img src="../img folder/kldlogo.png" alt="kld logo">
            <hr color="green">
            <br>
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" name = "lastName" placeholder="Last Name" required>
                <label for=""></label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name = "firstName" placeholder="First Name" required>
                <label for=""></label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" name = "kldEmail"placeholder="KLD Email" required>
                <label for=""></label>
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name = "password"id="registerPassword" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
                <span class="toggle-password" onclick="togglePassword('registerPassword', 'toggleRegisterPassword')">
                    <i class="fa fa-eye-slash" id="toggleRegisterPassword"></i>
                </span>
            </div>
            <div class="input-box">
                <input type="password" name = "confirmPassword"id="confirmPassword" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt'></i>
                <span class="toggle-password" onclick="togglePassword('confirmPassword', 'toggleConfirmPassword')">
                    <i class="fa fa-eye-slash" id="toggleConfirmPassword"></i>
                </span>
            </div>
            <p class="Terms">
                By clicking Register, you are agreeing to the 
            <a href="#">Term of use</a> including the arbitration clause and you are acknowledging the 
            <a href="#">Privacy Policy</a>
            </p>
            <center><button type="submit" class="btn">Register</button></center>
            <div class="register-link">
                <p>Already have an account? <a href="#" id="showLogin">Login</a></p>
            </div>

        </form>
    </div>
</center>
<br>
<br>

    <a class="gotopbtn" href="#"><i class='bx bxs-chevrons-up'></i></a>
            
            <hr>
            <footer class="footer">
                <div class="footer-content">
                <div class="footer-logo-section">
                    <img src="../img folder/kldlogo.png" alt="KLD Vehicle System Logo" class="footer-logo">
                    <span class="footer-brand">KLD Vehicle System</span>
                </div>
            
                <div class="footer-links">
                    <p>Contact us:<br>
                    <a href="mailto:kldvehiclesystem@gmail.com">kldvehiclesystem@gmail.com</a>
                    </p>
                    <p>Follow us:<br>
                    <a href="https://www.facebook.com/kldvehiclesystem" target="_blank">Facebook</a> 
                    <a href="https://www.facebook.com/kldvehiclesystem" target="_blank">Google</a>
                    </p>
                </div>
                </div>
            
                <div class="footer-bottom">
                <p>© 2025 KLD Vehicle System. All Rights Reserved.</p>
                </div>
            </footer>

    <!--THIS IS SCRIPT-->
    <script>
        function togglePassword(passwordFieldId, toggleIconId) {
    const passwordInput = document.getElementById(passwordFieldId);
    const toggleIcon = document.getElementById(toggleIconId);
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    }
}


        document.getElementById("showRegister").addEventListener("click", function () {
            document.getElementById("loginForm").classList.add("hide");
            document.getElementById("registerForm").classList.remove("hide");
        });

        document.getElementById("showLogin").addEventListener("click", function () {
            document.getElementById("registerForm").classList.add("hide");
            document.getElementById("loginForm").classList.remove("hide");
        });

        document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const navbarMenu = document.querySelector(".navbar ul");

    hamburger.addEventListener("click", function () {
        navbarMenu.classList.toggle("active");
    });
});

//NAV BAR FUNCTION
function showSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'flex'
}
function hideSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'none'
}

    </script>
</body>
</html>
