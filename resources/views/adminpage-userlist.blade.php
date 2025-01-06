<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/adminpagestyle.css">
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <h5 class="text-center">UReadStory</h5>
      <a href="{{ url('/adminDashboard') }}"><i class="fas fa-th-large"></i> Dashboard</a>
      <a href="{{ url('/adminpage-userlist') }}"><i class="fas fa-users"></i> User List</a>
      <a href="{{ url('/admin-bookrequest') }}"><i class="fas fa-book"></i> Book Request</a>
    </div>

    <!-- Main content -->
    <div class="content">
      <h2 class="text-center mb-4">User List</h2>
      <div class="container">
        <div class="row">
          <!-- User Card Template -->
          <div class="col-md-6 mb-3">
            <div class="user-card p-3 d-flex align-items-center">
              <img src="user.jpg" alt="User Image" class="user-img">
              <div class="ms-3">
                <div><strong>MariaDBBB</strong></div>
                <div>MariaDB@gmail.com</div>
              </div>
            </div>
          </div>

          <!-- Duplicate user cards for display purposes -->
          <div class="col-md-6 mb-3">
            <div class="user-card p-3 d-flex align-items-center">
              <img src="user.jpg" alt="User Image" class="user-img">
              <div class="ms-3">
                <div><strong>MariaDBBB</strong></div>
                <div>MariaDB@gmail.com</div>
              </div>
            </div>
          </div>

          <!-- Add more user cards as needed -->
        </div>
      </div>
    </div>
  </div>

  <footer>
    © 2024 UReadStory | Privacy Policy | Help
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>