<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UReadStory</title>

    <link rel="stylesheet" href="css/mylibrarystyle.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Logo -->
        <a class="navbar-brand" href="#">UReadStory</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Kategori dan username -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Kategori dan isi -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
              <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Kategori
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Aksi</a>
                <a class="dropdown-item" href="#">Fiksi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Thriller</a>
              </div>
            </li>
          </ul>
          <!-- dropdown Username -->
          <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img id="Profile" src="plate.jpg" alt="plate">
                @Username
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">My Library</a>
                <a class="dropdown-item" href="#">Log Out</a>
              </div>
          </div>
        </div>
    </nav>
    <!-- judul -->
    <h2 class="pad">My Library</h2>
    <!-- border kotak -->
    <div class="kontainer">
      <!-- Sedang dibaca -->
      <div class="bagian">
          <h3>Sedang dibaca</h3>
          <div class="buku">
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
          </div>
      </div>

      <!-- Daftar Simpan -->
      <div class="bagian">
          <h3>Daftar Simpan</h3>
          <div class="buku">
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
              <div id="kover" data-bs-toggle="modal" data-bs-target="#bookModal">JUDUL</div>
          </div>
      </div>
    </div>

    <!-- untuk popup -->
    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="bookModalLabel">Detail Buku</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
              </div>
              <div class="modal-body">
                  <p><strong>Judul Buku:</strong> <span id="modalTitle">Judul</span></p>
                  <p><strong>Genre:</strong> <span id="modalAuthor">Mystery, Fantasy, Action</span></p>
                  <p><strong>Pengarang:</strong> <span id="modalAuthor">Arthur Conan Doyle</span></p>
                  <p><strong>Sinopsis:</strong></p>
                  <p id="modalDescription">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum non iusto deserunt velit officia maxime odit eligendi itaque illo fugiat, eum nulla voluptate libero culpa doloremque sit praesentium ducimus porro.</p>
                  <p><strong>Tahun Terbit:</strong> <span id="modalYear">2024</span></p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
          </div>
      </div>
  </div>

    <!-- Footer -->
    <div class="footer">
      &copy; 2024 UreadStory
      <a href="#">Privacy Policy</a>
      <a href="#">Help</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      $(document).ready(function() {
          // click untuk button
          $('#kover').on('click', function() {
              $('#modalTitle');
              $('#modalAuthor');
              $('#modalYear');
              $('#modalDescription');
          });
      });
    </script>
</body>
</html>