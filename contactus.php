<html>
    <head>
        <title>KLD Vehicle System</title>
        <link rel="stylesheet" href="style (2).css">
    </head>
    <body>
        
        <div class="navbar">
            <div class="navbar-left">
              <img src="kldlogo.png" class="logo" alt="Logo">
              <h1 class="brand-name">KLD</h1>
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="login.php">Log in</a></li>
                <li><a href="registration.php">Create an Account</a></li>
                <li><a href="#" class="active">Contact Us</a></li>
            </ul>
          </div>
            <!-- Contact Us Form -->
        <div class="contact-form-container">
            <div class="contact-form">
                <h2>Contact Us</h2>
                <form action="#" method="POST">
                    <label for="name">Full Name:</label>
                    <input type="text" id="name" name="name" placeholder="Your full name" required>
        
                    <label for="email">KLD Email:</label>
                    <input type="email" id="email" name="email" placeholder="Your email address" required>
        
                    <label for="number">Student Number or Faculty Number:</label>
                    <input type="text" id="number" name="number" placeholder="Your Student Number or Faculty Number" required pattern="^\d{4}-\d{1,2}-\d{5}$" title="Enter the number in the format: 2023-2-10072">
                    
        
                    <label for="message">Your Feedback:
                    <textarea id="message" name="message" placeholder="Let us know what's on your mind"></textarea>
        
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>

        <footer class="footer">
            <p><span class="logo-text"></span> <img src="kldlogo-Photoroom.png" alt="KLD Vehicle System Logo" class="footer-logo"> 
                <span class="logo-text">@ 2025 KLD Vehicle System. All Rights Reserved.</span></p>
        </footer>
        

    </body>
</html>
