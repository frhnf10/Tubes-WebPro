<h1>My Library</h1>

<h2>Sedang Dibaca</h2>
<div>
    @foreach($books as $book)
        <div>
            <h3>{{ $book->title }}</h3>
            <p>Oleh: {{ $book->author }}</p>
            <p>Tahun: {{ $book->year }}</p>
            <p>Kategori: {{ $book->category }}</p>
        </div>
    @endforeach
</div>
