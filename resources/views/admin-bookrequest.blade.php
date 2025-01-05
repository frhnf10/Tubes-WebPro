<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Request</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="css/adminpagestyle.css">
</head>
<body>
  <div class="wrapper">
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
      <h5 class="text-center">UReadStory</h5>
      <a href="{{ url('/adminpage') }}"><i class="fas fa-th-large"></i> Dashboard</a>
      <a href="{{ url('/adminpage-userlist') }}"><i class="fas fa-users"></i> User List</a>
      <a href="{{ url('/admin-bookrequest') }}"><i class="fas fa-book"></i> Book Request</a>
    </div>

    <!-- Main content -->
    <div class="content">
      <h2 class="text-center mb-4">Book Request</h2>
      <div class="container">
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>User Name</th>
                <th>Book Title</th>
                <th>Author</th>
                <th>Date Requested</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <!-- Example Data -->
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Learn Laravel</td>
                <td>Jane Smith</td>
                <td>2025-01-01</td>
                <td>
                  <button class="btn btn-success btn-sm">Approve</button>
                  <button class="btn btn-danger btn-sm">Reject</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>MariaDB</td>
                <td>Advanced PHP</td>
                <td>David Johnson</td>
                <td>2025-01-03</td>
                <td>
                  <button class="btn btn-success btn-sm">Approve</button>
                  <button class="btn btn-danger btn-sm">Reject</button>
                </td>
              </tr>
              <!-- More rows can be added dynamically -->
            </tbody>
          </table>
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