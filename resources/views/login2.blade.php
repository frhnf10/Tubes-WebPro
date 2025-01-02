<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row w-100 shadow-lg rounded overflow-hidden" style="max-width: 800px;">
            <div class="col-md-6 d-none d-md-flex align-items-center justify-content-center bg-dark text-white p-4"
                style="background-image: url('image/pexels-cottonbro-9489279.jpg'); background-size: cover; position: relative;">
                <h1 class="position-absolute" style="top: 20px; left: 20px;">UReadStory</h1>
            </div>

            <div class="col-md-6 p-4 bg-white d-flex flex-column align-items-center">
                <h2 class="mb-1 text-center">Selamat Datang di</h2>
                <h3 class="mb-4 text-center">UReadStory</h3>
                <div class="form-group w-100">
                    <label for="username">Username</label>
                    <input type="text" id="username" class="form-control" placeholder="Masukkan Username Anda">
                </div>
                <div class="form-group w-100">
                    <label for="password">Kata Sandi</label>
                    <input type="password" id="password" class="form-control" placeholder="Masukkan Kata Sandi Anda">
                </div>
                <button id="loginBtn" class="btn btn-success btn-block mt-3">Login</button>
                <p class="mt-3">Belum punya akun? <a href="../daftar.html" 
                        class="text-success font-weight-bold">Daftar</a></p><!--tembak ke "signup.blade.php"-->
                <p class="text-center mt-3 mb-2">OR</p>
                <a href="#" class="btn btn-outline-secondary d-flex align-items-center justify-content-center w-100">
                    <img src="image/google.png" alt="Google Logo" style="width: 18px; height: 18px; margin-right: 8px;">
                    Sign up with Google
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#loginBtn').on('click', function () {
                alert('Error');
            });
        });
    </script>
</body>

</html>