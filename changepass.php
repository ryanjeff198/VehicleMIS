<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Password</title>
    <link rel="stylesheet" href="newpass.css">
</head>
<body>

    <div class="navbar">
        <div class="navbar-left">
            <img src="kldlogo-Photoroom.png" class="logo" alt="KLD Vehicle Logo">
            <h3 class="brand-name">KLD</h3>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>

    <div class="container">
        <header>Reset Password</header>
        <hr>
        <br>
        <form action="#" method="post">
            <label for="npw">New password</label>
            <input type="password" id="npw" placeholder="Enter new password">

            <label for="cpw">Confirm password</label>
            <input type="password" id="cpw" placeholder="Confirm new password">

            <div class="checkbox-container">
                <input type="checkbox" id="show-password" onclick="togglePassword()">
                <label for="show-password">Show Password</label>
            </div>

            <button type="submit" >Reset Password</button>
        </form>
    </div>
    

    <footer class="footer">
            <p><span class="logo-text"></span>
                <img src="kldlogo.png" alt="KLD Vehicle System Logo" class="footer-logo"> 
                <span class="logo-text">@ 2025 KLD Vehicle System. All Rights Reserved.</span></p>
    </footer>

    <script>
        function togglePassword() {
            let npw = document.getElementById("npw");
            let cpw = document.getElementById("cpw");
            let checkbox = document.getElementById("show-password");

            npw.type = cpw.type = checkbox.checked ? "text" : "password";
        }
    </script>
</body>
</html>
