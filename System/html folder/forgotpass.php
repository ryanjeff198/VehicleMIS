<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Recovery</title>
    <link rel="stylesheet" href="../css folder/forgotpass.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <div class="navbar">
        <div class="navbar-left">
            <img src="kldlogo.png   " class="logo" alt="KLD Vehicle Logo">
            <h3 class="brand-name">KLD</h3>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutusbusiness.html">About Us</a></li>
            <li><a href="login.html">Log in</a></li>
            <li><a href="registration.html">Create an Account</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
        </ul>
    </div>


    <div class="container">
        <header>Recover your Account</header>
        <hr>
        <br>
        <form action="#">
            <ul class="option-buttons">
                <li><button>Email Address</button></li>
                <li><button>Phone number</button></li>
            </ul>

            <div class="form-first">
                <div class="input-field">
                    <i class='bx bx-envelope'></i>
                    <label for="Email">Email</label>
                    <input type="email" placeholder="Enter your email" required/>
                    <button type="submit" value="btn">Submit</button>
                </div>
            </div>
            <div class="form-second">
                <div class="input-field">
                    <i class='bx bxs-phone-incoming'></i>
                    <label for="Email">Phone number</label>
                    <input type="tel" placeholder="Enter your phone number"/>
                    <button type="submit" value="btn">Submit</button>
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
document.addEventListener("DOMContentLoaded", function () {
    const emailBtn = document.querySelector("li:first-child button");
    const phoneBtn = document.querySelector("li:last-child button");
    const formFirst = document.querySelector(".form-first");
    const formSecond = document.querySelector(".form-second");

    // Show email form by default
    formFirst.classList.add("active");

    emailBtn.addEventListener("click", function (e) {
        e.preventDefault();
        formFirst.classList.add("active");
        formSecond.classList.remove("active");
    });

    phoneBtn.addEventListener("click", function (e) {
        e.preventDefault();
        formSecond.classList.add("active");
        formFirst.classList.remove("active");
    });
});

// FOR THE ALERT MESSAGE //
document.addEventListener("DOMContentLoaded", function () {
    const submitBtns = document.querySelectorAll("button[value='btn']");

    submitBtns.forEach(submitBtn => {
        submitBtn.addEventListener("click", function (e) {
            e.preventDefault(); // Prevent form submission

            const inputField = this.previousElementSibling; // Get the input field before the button
            
            if (inputField.value.trim() === "") {
                alert("Please fill in the required field!");
            } else {
                if (inputField.type === "email") {
                    alert(`The code has been sent to your email: ${inputField.value}`);
                } else if (inputField.type === "tel") {
                    alert(`The code has been sent to your phone number: ${inputField.value}`);
                }
            }
        });
    });
});





    </script>

</body>
</html>
