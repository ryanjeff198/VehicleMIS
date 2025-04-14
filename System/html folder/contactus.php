<html>
    <head>
        <title>KLD Vehicle System</title>
        <link rel="stylesheet" href="../css folder/style (2).css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="icon" type="image/x-icon" href="../favicon/favicon.ico">
    </head>
    <body>
        
        <div class="navbar">
            <div class="navbar-left">
              <img src="../img folder/kldlogo.png" class="logo" alt="Logo">
              <h1 class="brand-name">KLD</h1>
            </div>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutusbusiness.html">About Us</a></li>
                <li><a href="#" class="active">Contact Us</a></li>
                <li><a href="login.html">Log in</a></li>
            </ul>
        </div>
        
          <!--Contact Info-->
                
            <div class="contact-form-container">
                    <div class="contact-form">
                        <h2>Message Us</h2>
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
                        <br>
                        <br>
                        <br>
                        <hr color="black" size="3">
                        <br>
                    <h1>Our Contact Details</h1>
                    <p>
                    <i class='bx bx-map-pin'></i>
                     Address:
                    <br>
                    <a href="https://www.google.com/maps/search/Kolehiyo+ng+Lungsod+ng+Dasmariñas+Philippines" target="_blank">Barangay Burol Main, Dasmarinas, Philippines</a>
                    </p>
                    <p>
                    <i class='bx bx-phone-call'></i>
                     Contact us:
                     <br>
                    Phone no. 
                    <a href="tel+09631680663"> <br> 09631680663 </a>
                    <br>
                    </p>

                    <p>
                    <i class='bx bx-mail-send'></i>
                     Email us:<a href="https://mail.google.com/mail/?view=cm&to=kbpeconio@kld.edu.ph" target="_blank">@kld-vehicle-registration@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Contact Us Form -->
        

        <footer class="footer">
            <p><span class="logo-text"></span> <img src="../img folder/kldlogo.png" alt="KLD Vehicle System Logo" class="footer-logo"> 
                <span class="logo-text">@ 2025 KLD Vehicle System. All Rights Reserved.</span></p>
        </footer>
        

    </body>
</html>
