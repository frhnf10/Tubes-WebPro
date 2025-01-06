<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">UReadStory</div>
        <div class="search-bar">
            <input type="text" placeholder="Jelajahi">
        </div>
        <div class="profile">
            <span>@siti_marlina</span>
            <img src="https://via.placeholder.com/30" alt="Profile Picture">
        </div>
    </header>

    <div class="container">
    <h1>Tambah Buku</h1>
    
    <!-- Pemberitahuan -->
    <div class="alert alert-info">
        <p>Setelah mengajukan buku, admin akan memverifikasi dan menyetujui buku Anda sebelum ditampilkan di My Library.</p>
    </div>

    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Judul Buku</label>
        <input type="text" name="title" required>

        <label for="author">Pengarang</label>
        <input type="text" name="author" required>

        <label for="category">Kategori</label>
        <input type="text" name="category" required>

        <label for="year">Tahun Terbit</label>
        <input type="number" name="year" required>

        <label for="synopsis">Sinopsis Buku</label>
        <textarea name="synopsis"></textarea>

        <label for="cover">Cover Buku</label>
        <input type="file" name="cover">

        <label for="file">Masukkan file buku (PDF only)</label>
        <input type="file" name="file" required>

        <button type="submit">Request Submit</button>
    </form>
</div>


    <footer>
        © 2024 UReadStory - Privacy Policy | Help
    </footer>
</body>
</html>
