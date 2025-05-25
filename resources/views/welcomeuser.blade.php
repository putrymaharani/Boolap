<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boolap - Booking Lapangan Badminton</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #2e4c75;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            height: 70px;
        }

        .logo img {
            height: 80px;
            max-height: 100%;
        }
 

        .nav-buttons {
            display: flex;
            gap: 1rem;
        }

        .nav-buttons button {
            font-weight: 600;
            border: none;
            border-radius: 20px;
            padding: 0.5rem 1.2rem;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
        }

        .btn-login {
            background-color: transparent;
            color: white;
        }

        .btn-register {
            background-color: #1c2f4a;
            color: white;
        }

        .badminton-section {
            position: relative;
            width: 100%;
            height: 90vh;
            background-image: url('/build/assets/badminton.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .badminton-text {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
        }

        .badminton-text h1 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .badminton-text p {
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('/build/assets/logoboolap.png') }}" alt="Logo Boolap">
        </div>
        <div class="nav-buttons">
            <button class="btn-login" onclick="window.location.href='/login'">Masuk</button>
            <button class="btn-register" onclick="window.location.href='/register'">Daftar</button>
        </div>
    </div>

    <div class="badminton-section">
        <div class="badminton-text">
            <h1>SELAMAT DATANG DI BOOLAP!!</h1>
            <p>Siap bermain hari ini? Cek ketersediaan lapangan <br>dan lakukan pemesanan dengan mudah.</p>
        </div>
    </div>
</body>
</html>
