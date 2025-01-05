<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="title">Judul Buku</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="author">Pengarang</label>
            <input type="text" name="author" required>
        </div>
        <div>
            <label for="category">Kategori</label>
            <input type="text" name="category" required>
        </div>
        <div>
            <label for="year">Tahun Terbit</label>
            <input type="number" name="year" required>
        </div>
        <div>
            <label for="synopsis">Sinopsis Buku</label>
            <textarea name="synopsis"></textarea>
        </div>
        <div>
            <label for="cover">Cover Buku</label>
            <input type="file" name="cover">
        </div>
        <div>
            <label for="file">Masukkan file buku (PDF only)</label>
            <input type="file" name="file" required>
        </div>
        <button type="submit">Request Submit</button>
    </form>
</body>
</html>
