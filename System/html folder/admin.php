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
            <img src="../img folder/kldlogo.png   " class="logo" alt="KLD Vehicle Logo">
            <h3 class="brand-name">KLD</h3>
        </div>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="aboutusbusiness.html">About Us</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="login.html" class="active">Logout</a></li>
        </ul>
    </div>
    <div class="text">Home</div>
    <div class="insights-container">
        <h2>👋 Welcome back, Lucky!</h2>
        <h3>Insights</h3>
    
        <div class="container">
            <h2>Dashboard: Data Insights</h2>
    
            <div class="card">
                <h3>Vehicle Registered</h3>
                <canvas id="visitorsChart" width="150" height="100"></canvas>
            </div>
    
            <div class="card">
                <h3>Pending Payments</h3>
                <canvas id="trafficChart" width="150" height="100"></canvas>
            </div>
    
            <div class="card">
                <h3>Approval Duration</h3>
                <canvas id="approvalChart" width="150" height="100"></canvas>
            </div>
    
            <div class="card">
                <h3>Engagement by Platform</h3>
                <canvas id="engagementChart" width="150" height="100"></canvas>
            </div>
        </div>

    <h3 style="margin-top: 30px; margin-left: 20px;">User Information</h3>
    <div class="user-info-table">
        <table>
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allUsers as $usr): ?>
                <tr>
                    <td><?= htmlspecialchars($usr["ID"]) ?></td>
                    <td><?= htmlspecialchars($usr["firstName"]) ?></td>
                    <td><?= htmlspecialchars($usr["lastName"]) ?></td>
                    <td><?= htmlspecialchars($usr["kldEmail"]) ?></td>
                    <td><div class="action-dropdown">
                        <i class='bx bx-cog action-icon' onclick="toggleDropdown()"></i>
                        <div class="dropdown-menu" id="dropdownMenu">
                            <button class="dropdown-item"><i class='bx bx-edit'></i> Edit</button>
                            <button class="dropdown-item"><i class='bx bx-trash'></i> Delete</button>
                        </div>
                    </div></td>
                    <?php endforeach; ?>
                </tr>

                <?php foreach ($allUsers as $usr): ?>
                <tr>
                    <td><?= htmlspecialchars($usr["ID"]) ?></td>
                    <td><?= htmlspecialchars($usr["firstName"]) ?></td>
                    <td><?= htmlspecialchars($usr["lastName"]) ?></td>
                    <td><?= htmlspecialchars($usr["kldEmail"]) ?></td>
                    <td><div class="action-dropdown">
                        <i class='bx bx-cog action-icon' onclick="toggleDropdown()"></i>
                        <div class="dropdown-menu" id="dropdownMenu">
                            <button class="dropdown-item"><i class='bx bx-edit'></i> Edit</button>
                            <button class="dropdown-item"><i class='bx bx-trash'></i> Delete</button>
                        </div>
                    </div></td>
                    <?php endforeach; ?>
                </tr>

                <?php foreach ($allUsers as $usr): ?>
                <tr>
                    <td><?= htmlspecialchars($usr["ID"]) ?></td>
                    <td><?= htmlspecialchars($usr["firstName"]) ?></td>
                    <td><?= htmlspecialchars($usr["lastName"]) ?></td>
                    <td><?= htmlspecialchars($usr["kldEmail"]) ?></td>
                    <td><div class="action-dropdown">
                        <i class='bx bx-cog action-icon' onclick="toggleDropdown()"></i>
                        <div class="dropdown-menu" id="dropdownMenu">
                            <button class="dropdown-item"><i class='bx bx-edit'></i> Edit</button>
                            <button class="dropdown-item"><i class='bx bx-trash'></i> Delete</button>
                        </div>
                    </div></td>
                    <?php endforeach; ?>
                </tr>
                
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

function toggleDropdown() {
    const menu = document.getElementById("dropdownMenu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

// Optional: Close dropdown if clicked outside
window.onclick = function(event) {
    if (!event.target.matches('.action-icon')) {
        const dropdowns = document.getElementsByClassName("dropdown-menu");
        for (let i = 0; i < dropdowns.length; i++) {
            dropdowns[i].style.display = "none";
        }
    }
}

new Chart(document.getElementById('visitorsChart').getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'Visitors',
            data: [120, 150, 180, 200],
            backgroundColor: '#1f9335'
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: { display: true, text: 'Monthly Visitors' }
        }
    }
});


new Chart(document.getElementById('trafficChart').getContext('2d'), {
    type: 'pie',
    data: {
        labels: ['Direct', 'Referral', 'Social Media'],
        datasets: [{
            label: 'Traffic',
            data: [55, 25, 20],
            backgroundColor: ['#1f9335', '#66bb6a', '#a5d6a7']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: { display: true, text: 'Violation' }
        }
    }
});

new Chart(document.getElementById('approvalChart').getContext('2d'), {
    type: 'doughnut',
    data: {
        labels: ['Approved', 'Pending'],
        datasets: [{
            label: 'Approval Rate',
            data: [10, 90],
            backgroundColor: ['#1f9335', '#a5d6a7']
        }]
    },
    options: {
        responsive: true,
        plugins: {
            title: { display: true, text: 'Vehicle Rgistration' }
        }
    }
});

new Chart(document.getElementById('engagementChart').getContext('2d'), {
    type: 'bar',
    data: {
        labels: ['Twitter', 'Facebook', 'Instagram'],
        datasets: [
            {
                label: 'Jan',
                data: [20, 15, 25],
                backgroundColor: '#1f9335'
            },
            {
                label: 'Feb',
                data: [25, 35, 15],
                backgroundColor: '#66bb6a'
            },
            {
                label: 'Mar',
                data: [50, 40, 35],
                backgroundColor: '#a5d6a7'
            }
        ]
    },
    options: {
        responsive: true,
        plugins: {
            title: { display: true, text: 'Engagement by Platform' }
        }
    }
});


</script>

</body>
</html>