<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us</title>
  <!-- Linking SwiperJS CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>


  <div class="navbar">
    <div class="navbar-left">
      <img src="kldlogo.png" class="logo" alt="Logo">
      <h1 class="brand-name">KLD</h1>
    </div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="aboutusbusiness.php" class="active">About Us</a></li>
        <li><a href="login.php">Log in</a></li>
        <li><a href="registration.php">Create an Account</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
    </ul>
  </div>

  <h1 class="back"><a href="aboutusbusiness.php"> Back </a></h1>

  <br>
  <br>
  <div class="container swiper">
    <div class="slider-wrapper">
      <div class="card-list swiper-wrapper">
        <div class="card-item swiper-slide">
          <img src="jeff.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Ryan Jeff Felizardo</h2>
          <p class="user-profession">Leader/Documentation</p>
          <!-- Added Description -->
          <p class="user-description">Ryan is an expert in project leadership and documentation. He ensures smooth workflow and communication across teams.</p>
         
        </div>
        <div class="card-item swiper-slide">
          <img src="jaz.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Jazrell Gerero</h2>
          <p class="user-profession">Back End Developer</p>
          <!-- Added Description -->
          <p class="user-description">Jazrell focuses on building and maintaining the back-end systems, ensuring everything runs efficiently and seamlessly.</p>
        
        </div>
        <div class="card-item swiper-slide">
          <img src="Lucky T.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Lucky Ortega</h2>
          <p class="user-profession">Back End Developer</p>
          <!-- Added Description -->
          <p class="user-description">Lucky is Skilled in building and maintaining the server, database, and application logic, ensuring smooth and secure functionality..</p>
         
        </div>
        <div class="card-item swiper-slide">
          <img src="art.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">Art Dacer</h2>
          <p class="user-profession">Front End Developer</p>
          <!-- Added Description -->
          <p class="user-description">Art Focuses on creating user-friendly interfaces and enhancing the website’s visual appeal for a seamless experience.</p>
          
        </div>
        <div class="card-item swiper-slide">
          <img src="king.jpg" alt="User Image" class="user-image">
          <h2 class="user-name">King Peconio</h2>
          <p class="user-profession">Front End Developer</p>
          <!-- Added Description -->
          <p class="user-description">King specializes in crafting beautiful, interactive web pages, ensuring excellent user experience and accessibility.</p>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-slide-button swiper-button-prev"></div>
      <div class="swiper-slide-button swiper-button-next"></div>
    </div>
  </div>
  <!-- Linking SwiperJS script -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <!-- Linking custom script -->
  <script src="script.js"></script>
</body>
</html>
