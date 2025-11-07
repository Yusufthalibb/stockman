<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>StockMan - Solusi Manajemen Stok Modern</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
<style>
  /* Reset & basics */
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #121212;
    color: #e0e0e0;
    line-height: 1.6;
  }

  /* Reset & basics */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #121212;
  color: #e0e0e0;
  line-height: 1.6;
}

a {
  color: #f97316;
  text-decoration: none;
  transition: color 0.3s;
}
a:hover {
  color: #fb923c;
}

header {
  background-color: #1f2937;
  padding: 1rem 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 2px 8px rgba(0,0,0,0.7);
  position: sticky;
  top: 0;
  z-index: 100;
}
header .logo {
  font-size: 1.75rem;
  font-weight: 700;
  color: #f97316;
}
header nav a {
  background: #f97316;
  padding: 0.5rem 1.2rem;
  border-radius: 8px;
  font-weight: 600;
  color: #121212;
}
header nav a:hover {
  background: #ea580c;
}

/* Hero */
.hero {
  background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKUOqhfrzH5_snLswTFgktaMlkz9_rMNDPtw&s') center/cover no-repeat;
  color: #f9fafb;
  text-align: center;
  padding: 6rem 1.5rem 8rem;
  position: relative;
}
.hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(18, 18, 18, 0.75);
  z-index: 0;
}
.hero-content {
  position: relative;
  z-index: 1;
  max-width: 800px;
  margin: 0 auto;
}
.hero h1 {
  font-size: 3rem;
  margin-bottom: 1rem;
  font-weight: 900;
  text-shadow: 0 2px 10px rgba(0,0,0,0.7);
}
.hero p {
  font-size: 1.3rem;
  margin-bottom: 2rem;
  text-shadow: 0 1px 5px rgba(0,0,0,0.6);
}
.hero .btn-login {
  font-size: 1.1rem;
  padding: 0.9rem 2.5rem;
  background: #f97316;
  color: #121212;
  border-radius: 10px;
  font-weight: 700;
  box-shadow: 0 4px 14px rgba(249,115,22,0.6);
  transition: background 0.3s, box-shadow 0.3s;
  display: inline-block;
}
.hero .btn-login:hover {
  background: #ea580c;
  box-shadow: 0 6px 20px rgba(234,88,12,0.8);
}

/* Features */
.features {
  background: #1f2937;
  padding: 4rem 2rem;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 2.5rem;
}
.feature {
  background: #2e3a56;
  border-radius: 12px;
  max-width: 320px;
  padding: 2rem 1.5rem;
  text-align: center;
  box-shadow: 0 4px 20px rgba(0,0,0,0.7);
  transition: transform 0.3s ease;
}
.feature:hover {
  transform: translateY(-8px);
}
.feature i {
  font-size: 3rem;
  margin-bottom: 1rem;
  color: #f97316;
}
.feature h3 {
  font-size: 1.3rem;
  margin-bottom: 0.8rem;
  font-weight: 700;
}
.feature p {
  font-size: 1rem;
  color: #d1d5db;
}

/* About Section */
.about {
  background: #111827;
  color: #cbd5e1;
  padding: 5rem 2rem;
  max-width: 1000px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  gap: 2rem;
  align-items: center;
}
.about-text {
  flex: 1 1 450px;
}
.about-text h2 {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: #f97316;
}
.about-text p {
  font-size: 1.1rem;
  line-height: 1.7;
  margin-bottom: 1.5rem;
}
.about-img {
  flex: 1 1 450px;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0,0,0,0.8);
}
.about-img img {
  width: 100%;
  height: auto;
  display: block;
}

/* Services Section */
.services {
  background: #1f2937;
  padding: 5rem 2rem;
  max-width: 1000px;
  margin: 0 auto;
}
.services h2 {
  font-size: 2rem;
  color: #f97316;
  margin-bottom: 2rem;
  text-align: center;
}
.services-list {
  display: grid;
  grid-template-columns: repeat(auto-fit,minmax(280px,1fr));
  gap: 2rem;
}
.service-item {
  background: #2e3a56;
  border-radius: 12px;
  padding: 1.5rem 1.2rem;
  box-shadow: 0 4px 15px rgba(0,0,0,0.7);
  transition: transform 0.3s ease;
}
.service-item:hover {
  transform: translateY(-6px);
}
.service-item h3 {
  color: #fb923c;
  margin-bottom: 1rem;
  font-weight: 700;
}
.service-item p {
  font-size: 1rem;
  color: #cbd5e1;
}

/* Contact Section */
.contact {
  background: #111827;
  color: #cbd5e1;
  padding: 4rem 2rem;
  max-width: 600px;
  margin: 3rem auto 2rem;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.8);
}
.contact h2 {
  color: #f97316;
  text-align: center;
  margin-bottom: 1.5rem;
}
.contact p {
  margin-bottom: 1rem;
  text-align: center;
}
.contact a {
  display: inline-block;
  margin: 0 0.5rem;
  font-size: 1.4rem;
  color: #f97316;
  transition: color 0.3s;
}
.contact a:hover {
  color: #fb923c;
}

/* Footer */
footer {
  background-color: #1f2937;
  text-align: center;
  padding: 1.5rem 1rem;
  color: #6b7280;
  font-size: 0.9rem;
}

/* Responsive */
@media (max-width: 768px) {
  .features {
    flex-direction: column;
    padding: 3rem 1rem;
  }
  .about {
    flex-direction: column;
    padding: 3rem 1rem;
  }
  .about-text, .about-img {
    flex: 1 1 100%;
  }
  .services-list {
    grid-template-columns: 1fr;
  }
}

</style>
</head>
<body>
<header>
  <div class="logo">StockMan</div>
  <nav>
    <a href="{{ route('login') }}">Login</a>
  </nav>
</header>

<section class="hero">
  <div class="hero-content">
    <h1>Solusi Manajemen Stok Modern untuk Bisnis Anda</h1>
    <p>Mengoptimalkan pengelolaan inventaris dengan teknologi terbaru agar bisnis Anda selalu selangkah lebih maju.</p>
    <a href="{{ route('login') }}" class="btn-login">Masuk Sekarang</a>
  </div>
</section>

<section class="features" aria-label="Fitur Unggulan StockMan">
  <div class="feature">
    <i class="fas fa-boxes"></i>
    <h3>Manajemen Inventaris Lengkap</h3>
    <p>Kelola stok barang masuk dan keluar dengan sistem otomatis dan real-time.</p>
  </div>
  <div class="feature">
    <i class="fas fa-chart-line"></i>
    <h3>Laporan & Analitik</h3>
    <p>Dapatkan laporan lengkap dan insight untuk keputusan bisnis yang tepat.</p>
  </div>
  <div class="feature">
    <i class="fas fa-user-shield"></i>
    <h3>Keamanan Data Terjamin</h3>
    <p>Proteksi data bisnis Anda dengan sistem keamanan berbasis role dan autentikasi.</p>
  </div>
</section>

<section class="about" aria-label="Tentang StockMan">
  <div class="about-text">
    <h2>Mengapa Memilih StockMan?</h2>
    <p>StockMan dirancang khusus untuk membantu UMKM hingga perusahaan besar dalam mengelola persediaan dengan lebih mudah dan efisien. Dengan antarmuka yang user-friendly dan fitur canggih, Anda bisa meminimalkan risiko kehabisan stok dan meningkatkan produktivitas operasional.</p>
    <p>Kami percaya bahwa pengelolaan stok yang baik adalah kunci sukses bisnis, dan StockMan adalah partner terbaik Anda dalam mewujudkannya.</p>
  </div>
  <div class="about-img">
    <img src="https://tangselxpress.com/wp-content/uploads/2024/06/manajemen-persediaan-e1717666346498.jpeg" alt="Tim bekerja dengan komputer di kantor modern" />
  </div>
</section>

<section class="services" aria-label="Layanan dan Fitur StockMan">
  <h2>Layanan & Fitur Kami</h2>
  <div class="services-list">
    <div class="service-item">
      <h3>Integrasi Multi-Platform</h3>
      <p>Sinkronisasi data dari berbagai platform penjualan dan gudang secara otomatis.</p>
    </div>
    <div class="service-item">
      <h3>Pengelolaan Supplier</h3>
      <p>Kelola database supplier lengkap dengan riwayat transaksi dan evaluasi performa.</p>
    </div>
    <div class="service-item">
      <h3>Notifikasi dan Pengingat</h3>
      <p>Fitur pengingat stok minimum dan alert aktivitas transaksi penting.</p>
    </div>
    <div class="service-item">
      <h3>Customizable Reports</h3>
      <p>Buat laporan sesuai kebutuhan dengan filter dan format yang fleksibel.</p>
    </div>
    <div class="service-item">
      <h3>Support Pelanggan 24/7</h3>
      <p>Tim support kami siap membantu Anda kapan saja untuk menjamin kelancaran bisnis.</p>
    </div>
  </div>
</section>

<section class="contact" aria-label="Kontak StockMan">
  <h2>Hubungi Kami</h2>
  <p>Ingin tahu lebih lanjut? Jangan ragu untuk menghubungi kami melalui:</p>
  <p>
    <a href="mailto:info@stockman.id" aria-label="Email StockMan"><i class="fas fa-envelope"></i></a>
    <a href="https://wa.me/628123456789" target="_blank" rel="noopener" aria-label="WhatsApp StockMan"><i class="fab fa-whatsapp"></i></a>
    <a href="https://linkedin.com/company/stockman" target="_blank" rel="noopener" aria-label="LinkedIn StockMan"><i class="fab fa-linkedin"></i></a>
  </p>
</section>

<footer>
  &copy; {{ date('Y') }} StockMan. All rights reserved.
</footer>
</body>
</html>
