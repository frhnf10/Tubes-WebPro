<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/adminpagestyle.css">
</head>

<body>
  <!-- Hamburger Icon for Toggling Sidebar -->
  <i class="fas fa-bars hamburger" id="hamburger" onclick="toggleSidebar()"></i>

  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <h5 class="text-center">UReadStory</h5>
      <a href="{{ url('/adminDashboard') }}"><i class="fas fa-th-large"></i> Dashboard</a>
      <a href="{{ url('/adminpage-userlist') }}"><i class="fas fa-users"></i> User List</a>
      <a href="{{ url('/bookrequest') }}"><i class="fas fa-book"></i> Book Request</a>
    </div>

    <!-- Main content -->
    <div class="content" id="mainContent">
      <!-- Dashboard Content -->
      <div class="dashboard-content">
        <h2 class="text-center">Dashboard</h2>
        <div class="dashboard-card mx-auto" style="max-width: 400px;">
          <!-- Menampilkan jumlah user dan buku dari database -->
         <strong>Buku Terdaftar: {{$booksTotal}}</strong>

        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    © 2024 UReadStory | Privacy Policy | Help
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/adminpagescript.js"></script>
</body>

</html>