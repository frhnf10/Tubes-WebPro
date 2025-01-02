<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - UReadStory</title>
    <link rel="stylesheet" href="css/signupstyle.css">
</head>
<body>
    <div class="container">
        <div class="left">
            <h1>UReadStory</h1>
        </div>
        <div class="right">
            <h2>Selamat Datang di <br> UReadStory</h2>
            <form>
                <label for="username">Username</label>
                <input type="text" id="username" placeholder="Masukkan Username Anda" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Masukkan Email Anda" required>
                
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" placeholder="Masukkan Kata Sandi Anda" required>
                
                <button type="submit">Buat Akun</button>
                <p>Sudah punya akun? <a href="../HTML/LOGIN.html">Masuk</a></p><!-- ubah bagaimana caranya supaya "<a href="../HTML/LOGIN.html"" supaya bisa nembak ke "login.blade.php" HINT: pakai routing -->
                <div class="or">OR</div>
                <button type="button" class="google-signup">
                    <img src="image/google.png" alt="Google Icon"> Sign up with Google
                </button>
            </form>
        </div>
    </div>
</body>
</html>
