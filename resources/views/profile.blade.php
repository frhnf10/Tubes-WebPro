<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profilestyle.css">
</head>

<body class="bg-light d-flex flex-column align-items-center">

    <div class="w-100 bg-success text-white p-3">
        <h1 class="m-0">UReadStory</h1>
    </div>

    <div class="container mt-4">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body text-center">
                <h2 class="card-title mb-4">My Profile</h2>
                <div class="mb-3">
                    <img src="image/profil.png" alt="Profile Picture" class="rounded-circle" width="80" height="80">
                </div>
                <form>
                    <div class="form-group text-left">
                        <label>Email :</label>
                        <input type="email" class="form-control" value="Blablabla@gmail.com" readonly>
                    </div>
                    <div class="form-group text-left position-relative">
                        <label>Password :</label>
                        <input type="password" class="form-control" value="password" readonly id="passwordField">
                        <button type="button" class="btn btn-link position-absolute" style="right: 10px; top: 0; transform: translateY(50%);" id="togglePassword">
                            👁️
                        </button>
                    </div>
                    <div class="form-group text-left">
                        <label>Username :</label>
                        <input type="text" class="form-control" value="BlaBlaBla" readonly>
                    </div>
                    <a href="../Profilku/main.html" class="btn btn-danger w-100 mt-3">Logout</a> <!--tembak ke "login2.blade.php"-->
                </form>
            </div>
        </div>
    </div>

    <footer class="footer text-center w-100">
        <p class="m-0">© 2024 UReadStory</p>
        <div>
            <a href="#" class="text-white">Privacy Policy</a> |
            <a href="#" class="text-white">Help</a>
        </div>
    </footer>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#togglePassword').on('click', function() {
                const passwordField = $('#passwordField');
                const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
                passwordField.attr('type', type);
                $(this).text(type === 'password' ? '👁️' : '👁️');
            });
        });
    </script>
</body>
</html>
