<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Library</title>
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

    <div class="library">
        <h1>My Library</h1>

        <!-- Bagian Sedang Dibaca Dikosongkan -->
        <h2>Sedang Dibaca</h2>
        <div class="grid">
            <!-- Kosong -->
        </div>

        <!-- Bagian Daftar Simpan -->
        <h2>Daftar Simpan</h2>
        <div class="grid">
            @foreach($books as $book)
                <div class="grid-item">
                    <h2>{{ $book->title }}</h2>
                    <p>{{ $book->author }}</p>
                    <p>{{ $book->category }}</p>
                    <p>{{ $book->year }}</p>
                    <p>{{ $book->synopsis }}</p>
                    <!-- Menampilkan Cover Buku -->
                    @if($book->cover)
                        <img src="{{ asset('storage/' . $book->cover) }}" alt="{{ $book->title }}" style="width: 100%; height: auto; border-radius: 8px;">
                    @else
                        <img src="https://via.placeholder.com/150x200?text=No+Cover" alt="No Cover" style="width: 100%; height: auto; border-radius: 8px;">
                    @endif
                    <a href="{{ asset('storage/' . $book->file) }}" target="_blank">Download PDF</a>
                    <!-- Menampilkan Judul Buku -->
                    <p><strong>{{ $book->title }}</strong></p>
                    <!-- Menampilkan Status (Publish/Pending) -->
                    <p class="{{ $book->status == 'pending' ? 'status-pending' : 'status-publish' }}">
                        {{ $book->status == 'pending' ? 'Pending Publish' : 'Publish' }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>

    <footer>
        © 2024 UReadStory - Privacy Policy | Help
    </footer>
</body>
</html>
