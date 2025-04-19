<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<<<<<<< Updated upstream
    <link rel="stylesheet" href="../css folder/admin.css">
=======
    <link rel="stylesheet" href="admin.css">
>>>>>>> Stashed changes
    <title>User Page</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <img src="kldlogo.png" alt="kldlogo" width="50px" height="50px" style="margin: 5px;">
                <div class="logo-name">Kolehiyo ng Lungsod ng Dasmariñas</div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                    <i class='bx bx-search-alt' ></i>
                    <input type="text" placeholder="Search...">
                    <span class="tooltip">Search</span>
            </li>
            <br>
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links-name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-user' ></i>
                    <span class="links-name">Profile</span>
                </a>
                <span class="tooltip">User</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-chat' ></i>
                    <span class="links-name">Messages</span>
                </a>
                <span class="tooltip">Messages</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-megaphone'></i>
                    <span class="links-name">Announcements</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder-open' ></i>
                    <span class="links-name">Files</span>
                </a>
                <span class="tooltip">Files</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-wallet'></i>
                    <span class="links-name">Payments</span>
                </a>
                <span class="tooltip">Payments</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-arrow-to-bottom'></i>
                    <span class="links-name">Saved</span>
                </a>
                <span class="tooltip">Saved</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog' ></i>
                    <span class="links-name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
        </ul>
    </div>

<div class="home-content">
    <div class="navbar">
        <div class="navbar-left">
            <img src="kldlogo.png   " class="logo" alt="KLD Vehicle Logo">
            <h3 class="brand-name">KLD</h3>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutusbusiness.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="login.php" class="active">Logout</a></li>
        </ul>
    </div>
    <div class="text">Home</div>
    <div class="insights-container">
        <h2>👋 Welcome back, Lucky!</h2>
        <h3>Insights</h3>
    
        <div class="content">
            <div class="card">
                <h3>User Profile</h3>
                <p>Name: Ryan Lucky</p>
                <p>Email: RL@KLD.com</p>
                <a href="#" class="button">Edit Profile</a>
            </div>
            <div class="card">
                <h3>My Accounts</h3>
                <br>
                <p>Balance: $5,000</p>
                <a href="#" class="button">View Details</a>
            </div>
            <div class="card">
                <h3>Payments</h3>
                <br>
                <p>3 pending Payments</p>
                <a href="#" class="button">View Payments</a>
            </div>
            <div class="card">
                <h3>Community Announcements</h3>
                <p>2 new announcements</p>
                <a href="#" class="button">View Announcements</a>
            </div>
        </div>
    </div>
</div>

<script>

let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
let searchBtn = document.querySelector(".bx-search-alt");

btn.onclick = function(){
    sidebar.classList.toggle("active");
}

searchBtn.onclick = function(){
    sidebar.classList.toggle("active");
}

</script>

</body>
</html>