<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../css folder/forgotpass.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="script.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
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

<center>
<div class="container step1">
    <h2>OTP Verification</h2>
    <br>
    <h4>Enter your email address</h4>
    <br>
    <p>You will receive an email with a one-time password (OTP)</p>
    <div class="form-group">
        <input type="email" id="emailAddress" placeholder="Email address" onkeyup="validateEmail(this.value)"/>
    </div>
    <button class="nextButton">Next &rarr;</i></button>
</div>

<div class="container step2">
    <h2>OTP Verification</h2>
    <br>
    <h4>Enter one-time password</h4>
    <br>
    <p>One-time password has been sent to <span id="verifyEmail"></span></p>
    
    <div class="otp-form">
        <p>Enter 6 digit code we sent you via email to continue</p>
        <div class="otp-group">
            <input type="number"/>
            <input type="number"/>
            <input type="number"/>
            <input type="number"/>
            <input type="number"/>
            <input type="number"/>
        </div>
        <p>
            Not your email?/ Didn't receive the code?
            <a href="javascript:void(0)" class="resend-code">Resend Code</a>
        </p>
    </div>
    <br>
    <button class="verifyButton">Verify &rarr;</button>
</div>

<div class="container step3">
    <h2>Reset Your Password</h2>
    <p style="margin-bottom: 20px; color: #555;">
      Please enter your new password below. Make sure it's strong and something you'll remember.
    </p>
  
    <div class="form-group">
      <label for="newPassword">New Password</label>
      <input type="password" id="newPassword" placeholder="Enter new password" />
    </div>
  
    <div class="form-group">
      <label for="confirmPassword">Confirm New Password</label>
      <input type="password" id="confirmPassword" placeholder="Confirm new password" />
    </div>
  
    <button id="resetPasswordButton">Reset Password</button>
  </div>
</center>

<script>
//NAV BAR FUNCTION
function showSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'flex'
}
function hideSidebar(){
  const sidebar = document.querySelector('.sidebar')
  sidebar.style.display = 'none'
}


const step1 = document.querySelector(".step1"),
      step2 = document.querySelector(".step2"),
      step3 = document.querySelector(".step3"),
      emailAddress = document.getElementById("emailAddress"),
      verifyEmail = document.getElementById("verifyEmail"),
      inputs = document.querySelectorAll(".otp-group input"),
      nextButton = document.querySelector(".nextButton"),
      verifyButton = document.querySelector(".verifyButton"),
      resendLink = document.querySelector(".resend-code");

let OTP = "";

// EmailJS Init
window.addEventListener("load", () => {
    emailjs.init("GW4X4blbkA4s7eb84");
    step2.style.display = "none";
    step3.style.display = "none";
    nextButton.classList.add("disable");
});

// Email validation
const validateEmail = (email) => {
    const re = /\S+@\S+\.\S+/;
    nextButton.classList.toggle("disable", !re.test(email));
};

// OTP sending logic
function sendOTP(email) {
    OTP = Math.floor(100000 + Math.random() * 900000).toString();

    const now = new Date();
    const validUntil = new Date(now.getTime() + 15 * 60000);
    const formattedTime = validUntil.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit', hour12: true });

    const params = {
        from_name: "KLD Vehicle Registration Department",
        passcode: OTP,
        message: "Please use the following OTP for verification.",
        reply_to: email,
        time: formattedTime,
    };

    emailjs.send("service_5zt0ei8", "template_yc5b047", params)
        .then(() => {
            console.log("Email sent");
            verifyEmail.textContent = email;
            inputs.forEach(input => input.value = "");
            verifyButton.classList.add("disable");
        })
        .catch(err => console.error("Failed to send email:", err));
}

// Handle Next (Send OTP)
nextButton.addEventListener("click", () => {
    const email = emailAddress.value;
    sendOTP(email);
    step1.style.display = "none";
    step2.style.display = "block";
    step3.style.display = "none";
});

// OTP input keyup handler
inputs.forEach((input, index) => {
    input.addEventListener("keyup", function (e) {
        this.value = this.value.substring(0, 1);
        if (this.value && inputs[index + 1]) {
            inputs[index + 1].focus();
        }

        const allFilled = Array.from(inputs).every(input => input.value !== "");
        verifyButton.classList.toggle("disable", !allFilled);

        // Remove red error text
        this.classList.remove("error-input");
    });
});

// Handle Verify
verifyButton.addEventListener("click", () => {
    let enteredOTP = Array.from(inputs).map(input => input.value).join("");

    if (enteredOTP === OTP) {
        step1.style.display = "none";
        step2.style.display = "none";
        step3.style.display = "block";
        inputs.forEach(input => input.classList.remove("error-input"));
    } else {
        verifyButton.classList.remove("error-shake");
        void verifyButton.offsetWidth;
        verifyButton.classList.add("error-shake");
        inputs.forEach(input => input.classList.add("error-input"));
    }
});

// Handle Resend
resendLink.addEventListener("click", () => {
    const email = emailAddress.value;
    sendOTP(email);
});

</script>


</body>
</html>
