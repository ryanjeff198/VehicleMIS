<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registration.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <title>Registration</title>
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
      <li><a href="#" class="active">Create an Account</a></li>
      <li><a href="contactus.php">Contact Us</a></li>
  </ul>

    <div class="menu-icon" onclick="toggleMenu()">☰</div>
  </div>
      
      <div class="container">
        <header>Registration</header>
    <form action="login.php" method="POST">
      <div class="form first">
        <div class="details personal">
          <span class="title">Personal Details</span>
          <div class="fields">

            <div class="input-field">
              <label for="">Last Name</label>
              <input type="text" name = "lastName" placeholder="Enter your last name" required/>
            </div>

            <div class="input-field">
              <label for="">First Name</label>
              <input type="text" name = "firstName" placeholder="Enter your first name" required/>
            </div>

            <div class="input-field">
              <label for="">Middle Name</label>
              <input type="text" name = "middleName" placeholder="Enter your middle name" required/>
            </div>

            <div class="input-field">
              <label for="">Date of Birth</label>
              <input type="date" name = "DateBirth" placeholder="Enter your birth date" min="1900-01-01" max="2025-03-19" required/>
            </div>
            
            <div class="input-field">
              <label for="">Age</label>
              <input type="number" name = "age" placeholder="Enter your age" id="age" required/>
            </div>

            <select class="form-select" name = "sex" aria-label="Default select example" required>
              <option selected disabled selected hidden>Sex</option>
              <option value="1">Male</option>
              <option value="2">Female</option>
            </select>
          </div>
        </div>
        <br>
        <div class="Details ID">
          <span class="title">Create Account</span>
          <div class="fields">

          <div class="input-field">
              <label for="">KLD Email</label>
              <input type="email" name = "kldEmail" placeholder="Enter your KLD Emai" required/>
            </div>

            <div class="input-field">
              <label for="password">Password</label>
              <div class="password-wrapper">
                <input type="password" name = "Password" id="password" placeholder="Enter your password" required>
                <i class="fa fa-eye-slash toggle-password" id="togglePassword"></i>
              </div>
            </div>
            
            <div class="input-field">
              <label for="confirm-password">Confirm Password</label>
              <div class="password-wrapper">
                <input type="password" name = "ConPassword" id="confirm-password" placeholder="Confirm your password" required>
                <i class="fa fa-eye-slash toggle-password" id="toggleConfirmPassword"></i>
              </div>
            </div>
            

            <div class="input-field">
              <label for="">ID Number</label>
              <input type="number" name = "IDnumber" placeholder="Enter your ID number" required/>
            </div>

            <div class="input-field">
              <label for="">Contact Number</label>
              <input type="tel" name = "ContactNum" placeholder="Enter your contact number" required/>
            </div>
          </div>
          <br>
          <center><button class="nextBtn">
            <span class="btnText">Next</span>
            <i class='bx bx-right-arrow-alt'></i>
          </button></center>
          <center>
          </center><p class="login-text">Already have an account? <a href="login.php"> Login</a></p>
            
        </div>
      </div>


      <!-- This is for VEHICLE REGISTRATION -->

      <div class="form second">
        <div class="details personal">
          <span class="title">Vehicle Details</span>
          <div class="fields">

            <div class="input-field">
              <label for="">Brand name</label>
              <input type="text" placeholder="Enter your Brand name" required/>
            </div>

            <div class="input-field">
              <label for="">Model</label>
              <input type="text" placeholder="Enter your Model" required/>
            </div>

            <div class="input-field">
              <label for="">Color</label>
              <input type="text" placeholder="Enter your Car color" required/>
            </div>

            <div class="input-field">
              <label for="Platenum">Plate number</label>
              <input type="text" placeholder="Enter your Plate number" required/>
            </div>

            <div class="input-field">
              <label for="">Type</label>
              <input type="text" placeholder="Enter your Car type" required/>
            </div>

            <div class="input-field">
              <label for="">Category</label>
              <input type="text" placeholder="Enter your Car category" required/>
            </div>
          </div>
        </div>

        <div class="Details ID">
          <span class="title">Other info</span>
          <div class="fields">

            <div class="input-field">
              <label for="">Year Model</label>
              <input type="text" placeholder="Enter Year model" required/>
            </div>

            <div class="input-field">
              <label for="">Date of Purchase</label>
              <input type="date" placeholder="Enter Date of Purchase" required/>
            </div>

            <div class="input-field">
              <label for="">OR/CR</label>
              <input type="text" placeholder="Enter your OR/CR" required/>
            </div>

            <div class="input-field">
              <label for="inputGroupFile02">Drivers License</label>
              <input type="file" id="inputGroupFile02">
              <label for="inputGroupFile02" class="custom-file-upload">Choose File</label>
            </div>

            <div class="input-field">
              <label for="">Address</label>
              <input type="number" placeholder="Enter your full address" required/>
            </div>

            <div class="input-field">
              <label for="">Emergency no.</label>
              <input type="tel" placeholder="Enter your number" required/>
            </div>
          </div>

          <p>By clicking Register, you are agreeing to the 
          <a href="">Terms of Use</a> including the arbitration 
          clause and you are acknowledging the <a href="">Privacy Policy</a></p>

          <div class="buttons">
            <div class="backBtn">
              <i class='bx bx-left-arrow-alt' ></i>
              <span class="btnText">Back</span>
            </div>
            
            <button type="submit">Register</button>
          </div>
        </div>
      </div>
    </form>
  </div>

  <footer class="footer">
    <p><span class="logo-text"></span> 
        <img src="kldlogo.png" alt="KLD Vehicle System Logo" class="footer-logo"> 
            <span class="logo-text">@ 2025 KLD Vehicle System. All Rights Reserved.</span></p>
</footer>

  <script>

    const  form = document.querySelector("form"),
            nextBtn = document.querySelector(".nextBtn"),
            backBtn = document.querySelector(".backBtn"),
            allInput = document.querySelectorAll(".first input");

            nextBtn.addEventListener("click", ()=>{
              allInput.forEach(input => {
                if(input.value != ""){
                  form.classList.add('secActive');
                }else{
                  form.classList.remove('secActive');
                }
              })
            })

            backBtn.addEventListener("click", () => form.classList.remove('secActive'));

            document.getElementById('age').addEventListener('input', function () {
  if (this.value.length > 2) {
    this.value = this.value.slice(0, 2);
  }
});

//FOR THE SHOW PASSWORD//
document.getElementById("togglePassword").addEventListener("click", function() {
    const password = document.getElementById("password");
    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
    password.type = password.type === "password" ? "text" : "password";
});

document.getElementById("toggleConfirmPassword").addEventListener("click", function() {
    const confirmPassword = document.getElementById("confirm-password");
    this.classList.toggle("fa-eye");
    this.classList.toggle("fa-eye-slash");
    confirmPassword.type = confirmPassword.type === "password" ? "text" : "password";
});

document.querySelector("button[type='submit']").addEventListener("click", function(event) {
  event.preventDefault();
  console.log("Redirecting...");
  window.location.href = "userdashboard.php";
});

  </script>
</body>
</html>