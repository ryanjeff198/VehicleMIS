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
              <img src="../../img folder/kldlogo.png" class="logo" alt="KLD Vehicle Logo"> 
              <h3 class="brand-name">KLD</h3>
            </div>
          
            <div class="profile-dropdown">
              <img src="../../img folder/noprofile.png" alt="gnik" class="profile" id="profileBtn"> <!--THIS IS FOR PROFILE PICTURE-->
              <div class="dropdown-content" id="profileDropdown">
                <a href="#">My Profile</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
              </div>
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
        <tbody id="userTableBody">
            <?php foreach ($allUsers as $usr): ?>
            <tr id="userRow<?= $usr['ID'] ?>">
                <td><?= htmlspecialchars($usr["firstName"]) ?> <?= htmlspecialchars($usr["lastName"]) ?></td>
                <td><?= htmlspecialchars($usr["kldEmail"]) ?></td>
                <td><?= htmlspecialchars($usr["username"]) ?></td>
                <td><?= htmlspecialchars($usr["role"]) ?></td>
                <td>
                    <div class="action-dropdown">
                        <i class='bx bx-cog action-icon' onclick="toggleDropdown(<?= $usr['ID'] ?>)"></i>
                        <div class="dropdown-menu" id="dropdownMenu<?= $usr['ID'] ?>">
                            <button class="dropdown-item" onclick="openEditModal(<?= $usr['ID'] ?>, '<?= htmlspecialchars($usr["firstName"]) ?>', '<?= htmlspecialchars($usr["lastName"]) ?>', '<?= htmlspecialchars($usr["kldEmail"]) ?>', '<?= htmlspecialchars($usr["username"]) ?>', '<?= htmlspecialchars($usr["role"]) ?>')">
                                <i class='bx bx-edit'></i> Edit
                            </button>
                            <button class="dropdown-item" onclick="deleteUser(<?= $usr['ID'] ?>)">
                                <i class='bx bx-trash'></i> Delete
                            </button>
                            <button class="dropdown-item" onclick="archiveUser(<?= $usr['ID'] ?>)">
                                <i class='bx bx-archive-in'></i> Archive
                            </button>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h3 style="margin-top: 50px; margin-left: 20px;">Archived Users</h3>
    <table class="table" id="archiveTable">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Archived</th>
                <th>Restore</th>
            </tr>
        </thead>
        <tbody>
            <!-- Archived Users will be added dynamically -->
        </tbody>
    </table>
</div>

<!-- Edit User Modal -->
<div id="editModal" class="modal">
    <div class="modal-content">
      <span class="close-button" onclick="closeModal()">&times;</span>
      <h2>Edit User</h2>
      <form id="editUserForm">
        <input type="hidden" id="editUserId">
        <label>First Name:</label>
        <input type="text" id="editFirstName" required>
        <label>Last Name:</label>
        <input type="text" id="editLastName" required>
        <label>Email:</label>
        <input type="email" id="editEmail" required>
        <label>Username:</label>
        <input type="text" id="editUsername" required>
        <label>Role:</label>
        <input type="text" id="editRole" required>
        <button type="submit" class="btn-save">Save Changes</button>
      </form>
    </div>
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

// Profile Dropdown
const profileBtn = document.getElementById('profileBtn');
const profileDropdown = document.getElementById('profileDropdown');

profileBtn.addEventListener('click', () => {
  profileDropdown.style.display = profileDropdown.style.display === 'block' ? 'none' : 'block';
});

// Close dropdown when clicking outside
window.addEventListener('click', function(e) {
  if (!profileBtn.contains(e.target) && !profileDropdown.contains(e.target)) {
    profileDropdown.style.display = 'none';
  }
});

function toggleDropdown() {
    const menu = document.getElementById("dropdownMenu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

function toggleDropdown(userId) {
    const menu = document.getElementById(`dropdownMenu${userId}`);
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
}

function openEditModal(id, firstName, lastName, email, username, role) {
    document.getElementById('editUserId').value = id;
    document.getElementById('editFirstName').value = firstName;
    document.getElementById('editLastName').value = lastName;
    document.getElementById('editEmail').value = email;
    document.getElementById('editUsername').value = username;
    document.getElementById('editRole').value = role;
    document.getElementById('editModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('editModal').style.display = 'none';
}

// Save Changes
document.getElementById('editUserForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const id = document.getElementById('editUserId').value;
    const firstName = document.getElementById('editFirstName').value;
    const lastName = document.getElementById('editLastName').value;
    const email = document.getElementById('editEmail').value;
    const username = document.getElementById('editUsername').value;
    const role = document.getElementById('editRole').value;

    // Update the row directly
    const row = document.getElementById('userRow' + id);
    row.innerHTML = `
        <td>${firstName} ${lastName}</td>
        <td>${email}</td>
        <td>${username}</td>
        <td>${role}</td>
        <td>
            <div class="action-dropdown">
                <i class='bx bx-cog action-icon' onclick="toggleDropdown(${id})"></i>
                <div class="dropdown-menu" id="dropdownMenu${id}">
                    <button class="dropdown-item" onclick="openEditModal(${id}, '${firstName}', '${lastName}', '${email}', '${username}', '${role}')"><i class='bx bx-edit'></i> Edit</button>
                    <button class="dropdown-item" onclick="deleteUser(${id})"><i class='bx bx-trash'></i> Delete</button>
                    <button class="dropdown-item" onclick="archiveUser(${id})"><i class='bx bx-archive-in'></i> Archive</button>
                </div>
            </div>
        </td>
    `;

    closeModal();
    alert('Changes saved!');
});

function deleteUser(id) {
    const row = document.getElementById('userRow' + id);
    if (confirm('Are you sure you want to delete this user?')) {
        row.remove();
    }
}

function archiveUser(id) {
    const row = document.getElementById('userRow' + id);
    const name = row.children[0].innerText;
    const email = row.children[1].innerText;
    const archiveTableBody = document.querySelector('#archiveTable tbody');

    const newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td>${id}</td>
        <td>${name}</td>
        <td>${email}</td>
        <td>${new Date().toLocaleString()}</td>
        <td><button class="btn btn-success" onclick="restoreUser(${id}, '${name}', '${email}')">Restore</button></td>
    `;
    archiveTableBody.appendChild(newRow);

    row.remove();
}

function restoreUser(id, name, email) {
    const userTableBody = document.getElementById('userTableBody');
    const newRow = document.createElement('tr');
    newRow.setAttribute('id', 'userRow' + id);
    newRow.innerHTML = `
        <td>${name}</td>
        <td>${email}</td>
        <td>-</td>
        <td>-</td>
        <td>
            <div class="action-dropdown">
                <i class='bx bx-cog action-icon' onclick="toggleDropdown(${id})"></i>
                <div class="dropdown-menu" id="dropdownMenu${id}">
                    <button class="dropdown-item" onclick="openEditModal(${id}, '${name.split(' ')[0]}', '${name.split(' ')[1] || ''}', '${email}', '-', '-')"><i class='bx bx-edit'></i> Edit</button>
                    <button class="dropdown-item" onclick="deleteUser(${id})"><i class='bx bx-trash'></i> Delete</button>
                    <button class="dropdown-item" onclick="archiveUser(${id})"><i class='bx bx-archive-in'></i> Archive</button>
                </div>
            </div>
        </td>
    `;
    userTableBody.appendChild(newRow);
    updateArchiveTable();
}

function updateArchiveTable() {
    const archiveTableBody = document.querySelector('#archiveTable tbody');
    archiveTableBody.innerHTML = ''; // clear archive after restoring
}



</script>

</body>
</html>