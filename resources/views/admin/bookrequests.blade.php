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
      <a href="{{ url('/adminDashboard') }}"><i class="fas fa-th-large"></i> Dashboard</a>
      <a href="{{ url('/adminpage-userlist') }}"><i class="fas fa-users"></i> User List</a>
      <a href="{{ url('/bookrequest') }}"><i class="fas fa-book"></i> Book Request</a>
    </div>

    <!-- Main content -->
    <div class="content">
      <h2 class="text-center mb-4">Book Request</h2>
      <div class="container">
        <div class="table-responsive">
        <table class="table table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Pengarang</th>
      <th>Kategori</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($books as $book)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $book->title }}</td>
      <td>{{ $book->author }}</td>
      <td>{{ $book->category }}</td>
      <td>
        <form action="{{ route('admin.bookrequests.approve', $book->id) }}" method="POST" style="display: inline-block;">
          @csrf
          <button class="btn btn-success btn-sm">Approve</button>
        </form>
        <form action="{{ route('admin.bookrequests.reject', $book->id) }}" method="POST" style="display: inline-block;">
          @csrf
          <button class="btn btn-danger btn-sm">Reject</button>
        </form>
      </td>
    </tr>
    @endforeach
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