<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AddLibrary</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/addlibrarystyle.css">
</head>

<body>
    <!-- Navbar -->
    <header>
        <nav class="navbar navbar-expand-lg bg-success text-white py-2">
            <div class="container">
                <a href="#" class="navbar-brand font-weight-bold text-white" style="font-size: 1.8rem;">UReadStory</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="d-flex align-items-center w-100">
                        <select class="form-control d-inline-block mx-3">
                            <option>Kategori</option>
                        </select>
                        <input type="text" class="form-control d-inline-block" placeholder="Jelajahi">
                        <div class="auth-buttons d-flex align-items-center ml-auto mt-2 mt-lg-0">
                            <button class="btn btn-outline-light mx-2">Masuk</button>
                            <button class="btn btn-light text-success mx-2">Daftar</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h2 class="text-center">Daftar Buku</h2>
        <div class="book">
            <div class="book-item">
                <div class="book-cover"></div>
                <p class="book-title">JUDUL</p>
                <div class="book-info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis facilisis diam. Curabitur
                        sagittis, velit et lobortis porta, augue ante dapibus sapien, et scelerisque eros leo eu quam.
                    </p>
                </div>
            </div>
            <div class="book-item">
                <div class="book-cover"></div>
                <p class="book-title">JUDUL</p>
                <div class="book-info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis facilisis diam. Curabitur
                        sagittis, velit et lobortis porta, augue ante dapibus sapien, et scelerisque eros leo eu quam.
                    </p>
                </div>
            </div>
            <div class="book-item">
                <div class="book-cover"></div>
                <p class="book-title">JUDUL</p>
                <div class="book-info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis facilisis diam. Curabitur
                        sagittis, velit et lobortis porta, augue ante dapibus sapien, et scelerisque eros leo eu quam.
                    </p>
                </div>
            </div>
            <div class="book-item">
                <div class="book-cover"></div>
                <p class="book-title">JUDUL</p>
                <div class="book-info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis facilisis diam. Curabitur
                        sagittis, velit et lobortis porta, augue ante dapibus sapien, et scelerisque eros leo eu quam.
                    </p>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-success text-white text-center py-3">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <p class="mb-0">&copy; 2024 UReadStory</p>
            <div class="footer-links d-flex">
                <a href="#" class="text-white mx-2">Privacy Policy</a>
                <a href="#" class="text-white mx-2">Help</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.book-item').hover(function () {
                $(this).toggleClass('shadow-lg');
            });
        });
    </script>
</body>

</html>