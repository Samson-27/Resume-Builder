<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
  <div class="dashboard">
    <!--Sidebar-->
    <aside class="sidebar">
      <h2 class="logo">Resume<br>Builder</h2>
      <ul class="menu">
        <li class="action"><i class="ri-dashboard-fill" id="menu-icon"></i>Dashboard</li>
        <li class="action"><i class="ri-home-2-line" id="menu-icon"></i>Home</li>
        <li class="action"><i class="ri-file-copy-2-line" id="menu-icon"></i>Create Resume</li>
        <li class="action"><i class="ri-file-copy-2-line" id="menu-icon"></i>My Resumes</li>
        <li class="action"><i class="ri-file-text-line" id="menu-icon"></i>Templates</li>
      </ul>
      <ul class="bottom-menu">
        <li><i class="ri-customer-service-line" id="menu-icon"></i>Help Center</li>
        <li><i class="ri-logout-box-line" id="menu-icon"></i>Log Out</li>
      </ul>
    </aside>
    <!--main content-->
    <main class="main-content">
      <!--top bar-->
      <header class="topbar">
        <h2>Dashboard</h2>
        <div class="user">
          <i class="ri-user-line" id="user-icon"></i>
        </div>
      </header>
      <h3>Welcome <?= $_SESSION['username'] ?></h3>

      <!--Cards-->
      <section class="cards">
        <div class="card">
          <h3>Total Resume</h3>
          <p>9</p>
        </div>
        <div class="card">
          <h3>Templates Used</h3>
          <p>9</p>
        </div>

        <div class="card">
          <h3>Downloads</h3>
          <p>25</p>
        </div>
        <div class="card">
          <h3>Last Login</h3>
          <p>21 Sep 2025</p>
        </div>
      </section>

      <!--RESUME ACTIVITY TABLE-->
      <section class="table-section">
        <h2>Recent Resume Activity</h2>
        <table>
          <thead>
            <tr>
              <th>Resume Name</th>
              <th>Template</th>
              <th>Date Created</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Software Engineer Resume</td>
              <td>Modern</td>
              <td>20 Sep 2025</td>
              <td><span class="status done">Downloaded</span></td>
            </tr>
            <tr>
              <td>Designer Resume</td>
              <td>Creative</td>
              <td>10 Sep 2025</td>
              <td><span class="status pending">In Progress</span></td>
            </tr>
          </tbody>
        </table>

      </section>

  </div>
</body>

</html>
