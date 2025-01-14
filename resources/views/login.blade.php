<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UReadStory Login</title>
    <link rel="stylesheet" href="css/loginstyle.css">
</head>

<body>
<div class="container">
    <div class="left">
        <h1>UReadStory</h1>
    </div>
    <div class="right">
        <h2>Selamat Datang di</h2>
        <h3>UReadStory</h3>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" placeholder="Masukkan Username Anda">
        </div>
        <div class="form-group">
            <label for="password">Kata Sandi</label>
            <input type="password" id="password" placeholder="Masukkan Kata Sandi Anda">
        </div>
        <button class="btn">Login</button>
        <p class="login-link">Belum punya akun? <a href="../SignUp/SignUp.html">Daftar</a></p> <!-- cari cara bagaimana supaya "<a href="../SignUp/SignUp.html"" bisa nembak ke "signup.blade.php" HINT: Gunakna Routing -->
        <p class="or-text">OR</p>
        <a href="#" class="google-btn">
            <img src="image/google.jpeg" alt="Google Logo">
            Sign up with Google
        </a>
    </div>
</div>
</body>
</html>
