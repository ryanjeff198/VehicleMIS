<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KLD Vehicle System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
body {
    position: relative;
    margin: 0;
    padding: 0;
    background: url("kldbuilding.jpg") center/cover no-repeat;
}
  
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    z-index: -1;
  }

.navbar{
    width: 100%;
    margin-bottom: 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #ffffff;
}

.navbar-left {
    display: flex;
    align-items: center;
    gap: 0;
}

.logo{
    cursor: pointer;
    padding: 10px;
    width: 50px; /* Adjust size */
    height: auto;
}

.brand-name {
    font-size: 20px;
    font-weight: bold;
    color:#006400;
    margin: 0;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color: #000000;
    font-weight: 300;
    font-size: 15px;
    border-radius: 5px;
}

.navbar ul li a:hover {
    color: green;
    background: white;
    border-radius: 6px;
    border: green;
}

.navbar ul li a.active {
    background-color: #006400;
    color: #006400;
    font-weight: bold;
    background: #ffff;
    border: 2px solid #006400;
    padding: 10px;
    outline: none;
}

        /* About Us section styling */
        .about-us {
            padding: 40px;
            text-align: center;
            margin-top: 20px;
        }

        .about-us h2 {
            font-size: 36px;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .about-us p {
            font-size: 18px;
            color: #b9b7b7;
            line-height: 1.5;
            margin-bottom: 20px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .button-link {
            width: 200px;
            padding: 15px 0;
            text-align: center;
            margin: 20px auto;
            border-radius: 25px;
            font-weight: bold;
            border: 2px solid green;
            background: transparent;
            color:green;
            cursor: pointer;
            position: relative;
            display: inline-block; /* Ensure it's styled like a button */
            text-decoration: none; /* Remove underline from links */
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .button-link span {
            background: green;
            height: 100%;
            width: 0%;
            border-radius: 25px;
            position: absolute;
            left: 0;
            bottom: 0;
            z-index: -1;
            transition: width 0.5s;
        }

        .button-link:hover span {
            width: 100%;
        }

        .button-link:hover {
            border: 2px solid #028302;
            background: #ffffff;
            color: #006400;
        }

.footer {
    bottom: 0;
    width: 100%;
    background-color: white; 
    color: black; 
    text-align: center;
    padding: 5px;
    margin-top: 5%;
}

.footer p {
    margin: 0; 
    display: inline-flex; 
    align-items: center; 
}

.footer-logo {
    max-width: 20px; 
    height: auto; 
    margin: 0 5px; 
}

    </style>
</head>
<body>

    <div class="navbar">
        <div class="navbar-left">
          <img src="kldlogo.png" class="logo" alt="Logo">
          <h1 class="brand-name">KLD</h1>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#" class="active">About Us</a></li>
            <li><a href="login.php">Log in</a></li>
            <li><a href="registration.php">Create an Account</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>


        <div class="about-us">
            <h2>About KLD Vehicle System</h2>
            <p>The Kolehiyo ng Lungsod ng Dasmariñas Vehicle System, is to provide an efficient, organized, and accessible vehicle management solution for students and university personnel. It seeks to enhance transportation convenience, ensure safety, regulate vehicle usage within the campus, and improve overall traffic flow. By implementing this system, the university can streamline vehicle registration, monitoring, and access control, ultimately creating a more structured and secure campus transportation environment</p>

            <a href="aboutus.php" class="button-link">About The Developers</a>
        </div>

    <footer class="footer">
        <p><span class="logo-text"></span> <img src="kldlogo-Photoroom.png" alt="KLD Vehicle System Logo" class="footer-logo"> <span class="logo-text">@ 2025 KLD Vehicle System. All Rights Reserved.</span></p>
    </footer>

</body>
</html>