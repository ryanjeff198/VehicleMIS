<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <div class="navbar">
        <div class="navbar-left">
          <img src="kldlogo.png" class="logo" alt="Logo">
          <h1 class="brand-name">KLD</h1>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutusbusiness.php">About Us</a></li>
            <li><a href="#" class="active">Log in</a></li>
            <li><a href="registration.php">Create an Account</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>

    <div class="wrapper">
        <form action="userdashboard.php" method="post">
            <img src="kldlogo.png" alt="kld logo">
            <hr color="green">
            <br>
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" id="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
                <span class="toggle-password">
                    <i class="fa fa-eye-slash" id="togglePassword"></i>
                </span>

            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="forgotpass.php">Forgot Password?</a>
            </div>
                <center><button type="submit" class="btn">Login</button></center>
                <div class="register-link">
                    <p>Don't have an account? <a href="registration.php"> Register</a></p>
                </div>
        </form>
    </div>

    <footer class="footer">
        <p><span class="logo-text"></span> 
            <img src="kldlogo.png" alt="KLD Vehicle System Logo" class="footer-logo"> 
                <span class="logo-text">@ 2025 KLD Vehicle System. All Rights Reserved.</span></p>
    </footer>

    <script>
        document.getElementById("togglePassword").addEventListener("click", function() {
    const passwordInput = document.getElementById("password");
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
    } else {
        passwordInput.type = "password";
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
    }
});
        

    </script>
        

</body>
</html>