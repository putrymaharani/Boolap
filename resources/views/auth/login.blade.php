<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Boolap</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
<style>
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background-color: #f0f0f0;
    }

    .container {
        display: flex;
        height: 100vh;
    }

    .left-panel {
        flex: 1;
        background-color: #2e4c75;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 2rem;
        position: relative;
    }

    .left-panel::before,
    .left-panel::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .left-panel::before {
        width: 150px;
        height: 150px;
        bottom: 20px;
        left: 20px;
    }

    .left-panel::after {
        width: 100px;
        height: 100px;
        top: 20px;
        right: 20px;
    }

    .left-panel h2 {
        font-size: 1.8rem;
        margin-bottom: 2rem;
        text-align: center;
    }

    .left-panel button {
        background-color: #1c2f4a;
        border: none;
        padding: 0.8rem 2rem;
        border-radius: 25px;
        color: white;
        cursor: pointer;
        font-size: 1rem;
    }

    .right-panel {
        flex: 1;
        background-color: #ffffff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 2rem 4rem;
    }

    .right-panel h2 {
        color: #2e4c75;
        text-align: center;
        margin-bottom: 1rem;
    }

    .social-icons {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 1rem;
    }

    .social-icons img {
        width: 40px;
        height: 40px;
        cursor: pointer;
        border-radius: 50%;
        border: 1px solid #ccc;
        padding: 5px;
        background-color: white;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group input {
        width: 100%;
        padding: 1rem;
        border: none;
        background-color: #e0e0e0;
        border-radius: 5px;
        font-size: 1rem;
    }

    .btn-submit {
        margin-top: 1rem;
        width: 100%;
        padding: 0.9rem;
        background-color: #1c2f4a;
        color: white;
        border: none;
        border-radius: 25px;
        font-size: 1rem;
        cursor: pointer;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        .left-panel, .right-panel {
            flex: none;
            width: 100%;
            height: auto;
        }
    }
</style>

</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h2>Selamat Datang <br> di BOOLAP!</h2>
            <button onclick="window.location.href='{{ route('register') }}'">Daftar</button>
        </div>

        <div class="right-panel">
            <h2>Masuk</h2>
            <div class="social-icons">
                <img src="{{ asset('/build/assets/Logo_Google.webp') }}" alt="Google">
                <img src="{{ asset('/build/assets/Logo_Facebook.png') }}" alt="Facebook">
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                @if ($errors->any())
                    <div style="color:red; text-align:center; margin-bottom:1rem;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" placeholder="Kata Sandi" required>
                </div>
                <button type="submit" class="btn-submit">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
