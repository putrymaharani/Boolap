<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Lapangan - Boolap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #f9f9f9;
    }
    .navbar {
      background-color: #2e4c75;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 2rem;
      height: 70px;
      color: white;
    }
    .nav-menu {
      display: flex;
      align-items: center;
      list-style: none;
      gap: 2rem;
      padding: 0;
      margin: 0;
    }
    .nav-menu li a {
      display: flex;
      align-items: center;
      color: white;
      text-decoration: none;
      font-size: 1.1rem;
    }
    .nav-menu li a.logout .arrow {
      margin-left: 5px;
      font-size: 1.1rem;
    }
    .logo img {
      height: 80px;
      max-height: 100%;
    }
    .content {
      padding: 2rem;
    }
    .lapangan-card {
      display: flex;
      background: #fff;
      border-radius: 20px;
      box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      margin-bottom: 1.5rem;
    }
    .lapangan-card img {
      width: 200px;
      height: 150px;
      object-fit: cover;
    }
    .lapangan-info {
      padding: 1.2rem;
      flex: 1;
    }
    .lapangan-info h3 {
      margin: 0;
      color: #2e4c75;
      font-size: 1.2rem;
    }
    .status {
      font-weight: 600;
      margin-top: 0.5rem;
    }
    .status.tersedia {
      color: green;
    }
    .status.tidak-tersedia {
      color: red;
    }
    .jam {
      margin-top: 0.5rem;
      display: flex;
      flex-wrap: wrap;
      gap: 0.5rem;
    }
    .jam span {
      background: #ddd;
      padding: 0.4rem 0.8rem;
      border-radius: 10px;
    }
    .btn-pesan {
      margin-left: auto;
      background: #2e4c75;
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: 10px;
      cursor: pointer;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div class="logo">
      <img src="{{ asset('/assets/logoboolap.png') }}" alt="Logo Boolap">
    </div>
    <ul class="nav-menu">
      <li><a href="/beranda">Beranda</a></li>
      <li><a href="/lapangan">Daftar Lapangan</a></li>
      <li><a href="/pesanan">Pesanan Saya</a></li>
      <li><a href="/profil">Profil Saya</a></li>
      <li>
        <form method="POST" action="{{ route('logout') }}" id="logout-form">
          @csrf
          <button type="submit" class="logout" style="background: none; border: none; color: white; font: inherit; cursor: pointer; display: flex; align-items: center;">
            Keluar <i class="fa-solid fa-right-from-bracket" style="margin-left: 5px"></i>
          </button>
        </form>
      </li>
    </ul>
  </div>

  <div class="content">
    <!-- Daftar lapangan ditampilkan di sini -->
    <div class="lapangan-card">
      <img src="/assets/lapangan1.jpg" alt="Lapangan 1">
      <div class="lapangan-info">
        <h3>Lapangan 1</h3>
        <div class="status tersedia">Tersedia</div>
        <div class="jam">
          <span>14:00</span>
          <span>15:00</span>
        </div>
      </div>
      <button class="btn-pesan">Pesan</button>
    </div>

    <div class="lapangan-card">
      <img src="/assets/lapangan2.jpg" alt="Lapangan 2">
      <div class="lapangan-info">
        <h3>Lapangan 2</h3>
        <div class="status tidak-tersedia">Tidak Tersedia</div>
        <div class="jam">
          <span>16:00</span>
          <span>17:00</span>
        </div>
      </div>
      <button class="btn-pesan" disabled>Pesan</button>
    </div>
  </div>

</body>
</html>
