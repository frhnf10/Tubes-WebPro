<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preview Buku</title>
    <link rel="stylesheet" href="css/dashboard-previewstyle.css">
</head>
<body>
    <div class="preview-container">
        <div class="book-cover"></div>
        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" id="genre" value="Mystery, Fantasy, Action" readonly>
        </div>
        <div class="form-group">
            <label for="author">Pengarang:</label>
            <input type="text" id="author" value="Arthur Conan Doyle" readonly>
        </div>
        <div class="form-group">
            <label for="synopsis">Sinopsis:</label>
            <textarea id="synopsis" rows="4" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vehicula quam.</textarea>
        </div>
        <div class="form-group">
            <label for="published-year">Tahun Terbit:</label>
            <input type="text" id="published-year" value="1999" readonly>
        </div>
        <div class="btn-group">
            <button class="btn-read">Baca</button>
            <button class="btn-add">Tambah</button>
        </div>
    </div>
</body>
</html>
