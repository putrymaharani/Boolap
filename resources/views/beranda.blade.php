<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Boolap</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    html, body {
      overflow-x: hidden;
    }
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
      gap: 2rem; /* jarak antar menu */
      padding: 0;
      margin: 0;
    }
    .nav-menu li a {
      display: flex;
      align-items: center; /* ini bikin tulisan + icon rata tengah */
      color: white;
      text-decoration: none;
      font-weight: normal;
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
    .hero {
      margin-bottom: 2rem;
      margin-top: 2rem;
      margin-left: 2rem;
      display: flex;
      align-items: center;
      gap: 1rem;
    }
    
    .hero-icon {
      height: 50px;
      width: auto;
    }

    .hero-text h2 {
      margin: 0;
      color: #2e4c75;
      font-size: 1.2rem;
      font-weight: 700;
    }

    .hero-text p {
      margin: 0;
      font-size: 0.9rem;
      color: #2e4c75;
      font-weight: 500;
    }

    .jadwal-box {
      background-color: #2e4c75;
      color: white;
      padding: 2rem 3rem;
      border-radius: 40px;
      box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.2);
      width: fit-content;
      margin: 2rem;
      font-family: 'Poppins', sans-serif;
    }

    .jadwal-box .title {
      font-size: 1rem;
      font-weight: 600;
      margin-bottom: 0.3rem;
    }

    .jadwal-box .lapangan {
      font-size: 1.5rem;
      font-weight: 700;
      margin-bottom: 0.3rem;
    }

    .jadwal-box .waktu {
      font-size: 1rem;
      font-weight: 500;
    }


    /* Swiper Styles */
    .swiper {
      width: 100%;
      padding-top: 20px;
      padding-bottom: 40px;
    }
    .swiper-slide {
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .swiper-slide img {
      width: 100%;
      height: auto;
      display: block;
    }


.grid {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  padding: 30px;
  font-family: sans-serif;
}

.box {
  border-radius: 30px;
  padding: 30px;
  box-shadow: 8px 8px 10px rgba(0, 0, 0, 0.2);
  color: white;
}

.fasilitas {
  background-color: #2e4c75;
  flex: 1;
  min-width: 280px;
}

.fasilitas h3 {
  font-size: 24px;
  margin-bottom: 20px;
}

.fasilitas ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.fasilitas li {
  margin-bottom: 12px;
  font-size: 16px;
  display: flex;
  align-items: center;
  gap: 8px;
}

.rules {
  background-color: #2e4c75;
  position: relative;
  overflow: hidden;
  flex: 2;
  min-width: 280px;
  padding: 0;
  display: flex;
  flex-direction: column;
}

.rules .wave {
  width: 100%;
  height: 80px;
  display: block;
}

.rules-content {
  padding: 30px;
  padding-top: 10px;
}

.rules-content h3 {
  font-size: 24px;
  margin-bottom: 20px;
  color: #fff;
}

.rules-content ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.rules-content li {
  margin-bottom: 12px;
  font-size: 16px;
  color: #fff;
  display: flex;
  align-items: center;
  gap: 8px;
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
        <li><a href=/lapangan>Daftar Lapangan</a></li>
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

  <div class="hero">
    <img src="{{ asset('/assets/human_welcome.png') }}" alt="Welcome" class="hero-icon">
    <div class="hero-text">
      <h2>Halo, Saveridica!</h2>
      <p>Selamat datang di layanan peminjaman lapangan bulu tangkis.</p>
    </div>
  </div>

    <div class="jadwal-box">
      <div class="title">Jadwal anda hari ini</div>
      <div class="lapangan">Lapangan 2</div>
      <div class="waktu">Pukul 16:00 – 17:00</div>
    </div>

    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="/images/lapangan1.jpg" alt="Lapangan 1"></div>
        <div class="swiper-slide"><img src="/images/lapangan2.jpg" alt="Lapangan 2"></div>
        <div class="swiper-slide"><img src="/images/lapangan3.jpg" alt="Lapangan 3"></div>
        <div class="swiper-slide"><img src="/images/lapangan4.jpg" alt="Lapangan 4"></div>
        <div class="swiper-slide"><img src="/images/lapangan5.jpg" alt="Lapangan 5"></div>
      </div>
      <!-- Optional navigation (arrows) -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="grid">
      <div class="box fasilitas">
        <h3>Fasilitas</h3>
        <ul>
          <li>Lapangan Karpet</li>
          <li>Kantin</li>
          <li>Wi-Fi</li>
          <li>CCTV</li>
          <li>Lampu Terang</li>
          <li>Toilet Bersih</li>
          <li>Parkir Luas</li>
        </ul>
      </div>

      <div class="box rules">
        <div class="rules-content">
          <h3>Peraturan</h3>
          <ul>
            <li>Wajib memakai <strong>sepatu khusus badminton</strong></li>
            <li>Harap menjaga <strong>kebersihan area</strong></li>
            <li>Dilarang merokok di area lapangan</li>
            <li>Waktu bermain sesuai jadwal yang dipesan</li>
            <li>Wajib mengganti semua kerusakan yang terjadi pada saat penggunaan</li>
          </ul>
        </div>
      </div>
    </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

  <script>
    const swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 20,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      breakpoints: {
        768: {
          slidesPerView: 3
        },
        480: {
          slidesPerView: 2
        },
        0: {
          slidesPerView: 1
        }
      }
    });
  </script>

</body>
</html>
