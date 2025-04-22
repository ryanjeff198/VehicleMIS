<?php
require_once "DBcon.php";
require_once "User.php";

$DBcon = new DBcon();
$conn = $DBcon->connect();

$user = new User($conn);
$allUsers = $user->fetchAllUsers();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../favicon/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css folder/admin.css">
    <title>Admin Page</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <img src="../img folder/kldlogo.png" alt="kldlogo" width="50px" height="50px" style="margin: 5px;">
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
                    <span class="links-name">User</span>
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
                    <i class='bx bx-line-chart' ></i>
                    <span class="links-name">Analytics</span>
                </a>
                <span class="tooltip">Analytics</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder-open' ></i>
                    <span class="links-name">File Manager</span>
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
        <div class="profile-content">
            <div class="profile">
                <div class="profile-details">
                    <img src="jeff.jpg" alt="">
                    <div class="name-job">
                        <div class="name">Ryan Jeff L. Felizardo </div>
                            <div class="job">IS Manager</div>
                    </div>
                </div>
                <i class='bx bx-log-out' id="log-out" ></i>
            </div>
        </div>
    </div>

<div class="home-content">
    <div class="text">Home</div>
    <div class="insights-container">
        <h2>👋 Welcome back, Ryan!</h2>
        <h3>Insights</h3>
    
        <div class="insights-grid">
            <div class="insight-box">
                <p class="insight-number">100 <span class="info-icon">ℹ️</span></p>
                <p class="insight-label">Active User</p>
            </div>
            <div class="insight-box">
                <p class="insight-number">6 <span class="info-icon">ℹ️</span></p>
                <p class="insight-label">Inactive User</p>
            </div>
            <div class="insight-box">
                <p class="insight-number">9 <span class="info-icon">ℹ️</span></p>
                <p class="insight-label">Managers</p>
            </div>
            <div class="insight-box">
                <p class="insight-number">0 <span class="info-icon">ℹ️</span></p>
                <p class="insight-label">Pending Activation</p>
            </div>
            <div class="insight-box">
                <p class="insight-number">6,807 <span class="info-icon">ℹ️</span></p>
                <p class="insight-label">Time Spent</p>
            </div>
            <div class="insight-box">
                <p class="insight-number">58 <span class="info-icon">ℹ️</span></p>
                <p class="insight-label">User Violation</p>
            </div>
        </div>
    </div>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>KLD Email</th>
        </tr>
        <?php foreach ($allUsers as $usr): ?>
            <tr>
                <td><?= htmlspecialchars($usr["ID"]) ?></td>
                <td><?= htmlspecialchars($usr["firstName"]) ?></td>
                <td><?= htmlspecialchars($usr["lastName"]) ?></td>
                <td><?= htmlspecialchars($usr["kldEmail"]) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
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