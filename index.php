<!DOCTYPE html>
<html>
    <head>
        <title>KLD Vehicle System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css folder/style.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            
            <!-- Carousel Section -->
            <div class="carousel-container">
                <div class="carousel">
                    <div class="carousel-slide active">
                        <img src="../img folder/kld buildingg.jpg" alt="KLD Building">
                    </div>
                    <div class="carousel-slide">
                        <img src="../img folder/kldphoto.jpg" alt="KLD Building 2">
                    </div>
                    <div class="carousel-slide">
                        <img src="../img folder/parking.png" alt="KLD Building 3">
                    </div>
                    <div class="carousel-slide">
                        <img src="kld buildingg.jpg" alt="KLD Building 4">
                    </div>
                </div>
        
                <!-- Navigation Arrows -->
                <button class="carousel-button prev" aria-label="Previous slide">&#10094;</button>
                <button class="carousel-button next" aria-label="Next slide">&#10095;</button>
    
              <!-- Pagination Dots -->
             <div class="pagination-dots">
                   <span class="dot active" data-index="0"></span>
                    <span class="dot" data-index="1"></span>
                    <span class="dot" data-index="2"></span>
                    <span class="dot" data-index="3"></span>
                </div>
            </div>
            <div class="view">
            <div class="about-us">
                <br>
                <br>
                <h2>KLD Vehicle Registration System</h2>
                <p>The Objective of this project is to design, develop, and implement an efficient and automated Vehicle Parking and Penalty Transaction for Kolehiyo ng Lungsod ng Dasmarinas, aiming to improve parking management, reduce congestion, and enhance overall campus experience.</p>
                <br>
                <br>
                <br>
                <br>
                <!-- Mission & Vision Section -->
                <div class="mission-vision">
                    <div class="mission-vision-box">
                        <h3>🎯 Our Mission</h3>
                        <p>Our Mission is to provide a seamless and efficient vehicle registration system that enhances the safety, convenience, and organization of campus transportation. We aim to streamline the registration process, ensure secure access control, and maintain smooth traffic flow within the university.</p>
                    </div>
    
                    <div class="mission-vision-box">
                        <h3>🌟 Our Vision</h3>
                        <p>Our Vision is to become a leading campus vehicle management system that promotes sustainability, improves student and staff mobility, and fosters a safer and more organized environment for everyone on campus.</p>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <!-- Advantages Section -->
                <div class="h2">
                <h2>FEATURES OF THE SYSTEM</h2>
            </div>
        <div class="advantages">
            <div class="advantage-box">
                <i class='bx bx-menu-alt-right'></i>
                <i class='bx bx-id-card'></i>
                <h3>Fast & Easy Registration</h3>
                <p>Our registration process is simple, fast, and user-friendly, allowing you to get started in minutes.</p>
            </div>
            <div class="advantage-box">
                <i class='bx bx-gift'></i>
                <h3>Comprehensive Services</h3>
                <p>We offer a variety of services including vehicle tracking, account management, and more, all at your fingertips.</p>
            </div>
            <div class="advantage-box">
                <i class='bx bx-check-shield'></i>
                <h3>Secure & Reliable</h3>
                <p>Your information is stored securely with us. We use top-notch security measures to ensure your data is safe.</p>
            </div>
        </div>
    </div>
        

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
                <a href="https://www.facebook.com/kldvehiclesystem" target="_blank">Facebook</a> |
                <a href="https://www.facebook.com/kldvehiclesystem" target="_blank">Google</a>
                </p>
            </div>
            </div>
        
            <div class="footer-bottom">
            <p>© 2025 KLD Vehicle System. All Rights Reserved.</p>
            </div>
        </footer>


        
        
            <script src="../script.js"></script>
        </body>
        </html>