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
    <link rel="stylesheet" href="../../css folder/admin.css">
    <title>Profile</title>
</head>
<body>
    <div class="sidebar">
        <div class="logo-content">
            <div class="logo">
                <img src="../../img folder/kldlogo.png" alt="kldlogo" width="50px" height="50px" style="margin: 5px;">
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
              <img src="../../img folder/noprofile.png" alt="gnik" class="profile" id="profileBtn">
              <div class="dropdown-content" id="profileDropdown">
                <a href="#">My Profile</a>
                <a href="#">Settings</a>
                <a href="#">Logout</a>
              </div>
            </div>
          </div>

          <h3 style="margin-top: 30px; margin-left: 20px;">User Information</h3>

          <!-- User Table -->
          <table id="userTable">
            <thead>
              <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>KLD Email</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                <?php foreach ($allUsers as $usr): ?>
                <tr id="userRow<?= $usr['ID'] ?>">
                    <td><?= htmlspecialchars($usr["ID"]) ?></td>
                    <td><?= htmlspecialchars($usr["firstName"]) ?></td>
                    <td><?= htmlspecialchars($usr["lastName"]) ?></td>
                    <td><?= htmlspecialchars($usr["kldEmail"]) ?></td>
                    <td><?= htmlspecialchars($usr["status"]) ?></td>
                    <td>
                        <button class="editBtn">Edit</button>
                        <button class="archiveBtn">Archive</button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
          
          <!-- Edit Modal -->
          <div id="editModal" class="modal">
            <div class="modal-content">
              <span class="close">&times;</span>
              <h2>Edit User</h2>
              <form id="editUserForm">
                <label for="editFName">First name:</label>
                <input type="text" id="editFName" name="editFName" required>

                <label for="editLName">Last name:</label>
                <input type="text" id="editLName" name="editLName" required>

                <label for="editEmail">KLD Email:</label>
                <input type="email" id="editEmail" name="editEmail" required>

                <label for="editStatus">Status:</label>
                <select id="editStatus" name="editStatus" required>
                  <option value="Active">Active</option>
                  <option value="Pending">Pending</option>
                  <option value="Suspended">Suspended</option>
                </select>
          
                <button type="submit">Save Changes</button>
              </form>
            </div>
          </div>

          <br>
          <br>
          
          <!-- Archived Users Table -->
          <div class="archived-users box">
            <h3 style="margin-top: 30px; margin-left: 20px;">Archived Information</h3>
            <div class="sales-details">
              <table id="archiveTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>KLD Email</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Archived users will appear here -->
                </tbody>
              </table>
            </div>
          </div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// Sidebar Toggle
let btn = document.querySelector("#btn");
let sidebar = document.querySelector(".sidebar");
btn.onclick = function() {
    sidebar.classList.toggle("active");
};

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

// Table and Modal functionality
const userTableBody = document.querySelector("#userTable tbody");
const archiveTableBody = document.querySelector("#archiveTable tbody");

const modal = document.getElementById("editModal");
const closeModal = document.querySelector(".close");
const editForm = document.getElementById("editUserForm");

let currentRow = null;

// Load data from localStorage
function loadData() {
    const users = JSON.parse(localStorage.getItem("users")) || [];
    const archives = JSON.parse(localStorage.getItem("archives")) || [];

    userTableBody.innerHTML = "";
    archiveTableBody.innerHTML = "";

    users.forEach(user => {
        const row = createUserRow(user.id, user.Fname, user.Lname, user.email, user.status);
        userTableBody.appendChild(row);
    });

    archives.forEach(user => {
        const row = createArchiveRow(user.id, user.Fname, user.Lname, user.email, user.status);
        archiveTableBody.appendChild(row);
    });
}

// Create a row for active users
function createUserRow(id, firstName, lastName, email, status) {
    const row = document.createElement("tr");
    row.innerHTML = `
        <td>${id}</td>
        <td>${firstName}</td>
        <td>${lastName}</td>
        <td>${email}</td>
        <td>${status}</td>
        <td>
            <button class="editBtn">Edit</button>
            <button class="archiveBtn">Archive</button>
        </td>
    `;
    return row;
}

// Create a row for archived users
function createArchiveRow(id, firstName, lastName, email, status) {
    const row = document.createElement("tr");
    row.innerHTML = `
        <td>${id}</td>
        <td>${firstName} ${lastName}</td>
        <td>${email}</td>
        <td>${status}</td>
        <td>Archived</td>
        <td>
            <button class="restoreBtn">Restore</button>
        </td>
    `;
    return row;
}

// Save data to localStorage
function saveData() {
    const users = Array.from(userTableBody.rows).map(row => ({
        id: row.cells[0].innerText,
        Fname: row.cells[1].innerText,
        Lname: row.cells[2].innerText,
        email: row.cells[3].innerText,
        status: row.cells[4].innerText
    }));

    const archives = Array.from(archiveTableBody.rows).map(row => ({
        id: row.cells[0].innerText,
        Fname: row.cells[1].innerText.split(" ")[0],
        Lname: row.cells[1].innerText.split(" ")[1],
        email: row.cells[2].innerText
    }));

    localStorage.setItem("users", JSON.stringify(users));
    localStorage.setItem("archives", JSON.stringify(archives));
}

// Table actions
document.addEventListener("click", function (e) {
    const target = e.target;

    // Edit functionality
    if (target.classList.contains("editBtn")) {
        currentRow = target.closest("tr");
        document.getElementById("editFName").value = currentRow.cells[1].innerText;
        document.getElementById("editLName").value = currentRow.cells[2].innerText;
        document.getElementById("editEmail").value = currentRow.cells[3].innerText;
        document.getElementById("editStatus").value = currentRow.cells[4].innerText;
        modal.style.display = "block";
    }

    // Archive functionality
    if (target.classList.contains("archiveBtn")) {
        const row = target.closest("tr");
        const id = row.cells[0].innerText;
        const firstName = row.cells[1].innerText;
        const lastName = row.cells[2].innerText;
        const email = row.cells[3].innerText;

        // Move to archive
        archiveTableBody.appendChild(createArchiveRow(id, firstName, lastName, email, "Archived"));
        row.remove();
        saveData();
    }

    // Restore functionality
    if (target.classList.contains("restoreBtn")) {
        const row = target.closest("tr");
        const id = row.cells[0].innerText;
        const firstName = row.cells[1].innerText.split(" ")[0];
        const lastName = row.cells[1].innerText.split(" ")[1];
        const email = row.cells[2].innerText;

        // Restore to user table
        userTableBody.appendChild(createUserRow(id, firstName, lastName, email, "Active"));
        row.remove();
        saveData();
    }
});

// Close modal
closeModal.onclick = () => modal.style.display = "none";
window.onclick = (e) => {
    if (e.target === modal) modal.style.display = "none";
};

// Handle form submission
editForm.onsubmit = function (e) {
    e.preventDefault();
    currentRow.cells[1].innerText = document.getElementById("editFName").value;
    currentRow.cells[2].innerText = document.getElementById("editLName").value;
    currentRow.cells[3].innerText = document.getElementById("editEmail").value;
    currentRow.cells[4].innerText = document.getElementById("editStatus").value;
    modal.style.display = "none";
    saveData();
};

// Load data when page loads
window.onload = loadData;
</script>
</body>
</html>
