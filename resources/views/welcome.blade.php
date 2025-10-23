<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inaklug - Layanan, Mitra & Artikel</title>
   <!-- Tambahkan link Font Awesome untuk ikon -->
   <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />

  <style>
    /* ===== RESET ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      color: #333;
      background-color: #fff;
    }

    /* ===== NAVBAR ===== */
.navbar {
  width: 100%;
  background: linear-gradient(90deg, #4b006e, #2576ff);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 60px;
  position: fixed;
  top: 0;
  z-index: 1000;
}

.logo {
  position: relative;
  color: #ffffff;
  font-size: 69px;
  font-weight: 500;
  text-transform: lowercase;
  letter-spacing: 2px;
  display: inline-block;
  top: -10px;   
  left: 80px;  
  font-family: "Arial", sans-serif;
}

/* ===== GARIS ATAS & BAWAH ===== */
.logo::before,
    .logo::after {
      content: "";
      position: absolute;
      height: 4px;
      background: #ffffff;
      border-radius: 2px;
    }

    /* Garis atas (di atas huruf "g") */
    .logo::before {
      width: 60%;
      top: 15px;
      right: 0;
    }

    /* Garis bawah (di bawah huruf "k") */
    .logo::after {
      width: 70%;
      bottom: 9px;
      left: 0;
    }


.navbar ul {
  list-style: none;
  display: flex;
  gap: 60px;
  align-items: center;
}

.navbar ul li a {
  color: #fff;
  text-decoration: none;
  font-weight: 500;
  position: relative;
  transition: 0.3s;
}

.navbar ul li a:hover::after {
  content: "";
  position: absolute;
  bottom: -5px;
  left: 0;
  width: 100%;
  height: 2px;
  background-color: #fff;
}

/* ===== ATUR JARAK MASING-MASING MENU ===== */
.menu-home {
  position: relative;
  left: -80px; /* tetap */
}

.menu-tentang {
  position: relative;
  left: -90px; /* geser ke kanan */
}

.menu-layanan {
  position: relative;
  left: -100px; /* geser ke kanan */
}

.menu-artikel {
  position: relative;
  left: -120px; /* geser ke kanan */
}

.menu-hubungi {
  position: relative;
  left: -130px; /* geser ke kanan */
}

/* ===== SEARCH DAN BUTTON ===== */
.right-section {
  display: flex;
  align-items: center;
  gap: 25px;
  position: relative;
  right: 180px; /* atur jarak dari kanan navbar */
}

/* ====== KOTAK PENCARIAN ====== */
.search-box {
  display: flex;
  align-items: center;
  gap: 10px;
  border-bottom: 1px solid rgba(255, 255, 255, 0.6);
  position: relative;
}

/* ====== TEKS INPUT ====== */
.search-box input {
  background: transparent;
  border: none !important;  /* pastikan hilang semua border */
  outline: none;
  color: #fff;
  font-size: 16px;
  width: 160px;
  box-shadow: none !important;  /* kadang garis kedua berasal dari shadow */
}

/* Placeholder */
.search-box input::placeholder {
  color: rgba(255, 255, 255, 0.8);
  font-style: italic;
}

/* ====== IKON KACA PEMBESAR ====== */
.search-box i {
  color: #fff;
  font-size: 18px;
  cursor: pointer;
}

/* ====== Efek fokus ====== */
.search-box:focus-within {
  border-bottom: 1px solid #ffde59;
}




/* ====== IKON DI SEBELAH KANAN ====== */
.search-box input {
  background: transparent;   
  border: none;              
  outline: none;             
  color: #fff;              
  font-size: 16px;           
  width: 160px;             
  border-bottom: 1px solid rgba(255, 255, 255, 0.6); /* Garis tipis bawah */
  padding-bottom: 5px; /* beri jarak agar teks tidak menempel ke garis */
  transition: border-color 0.3s ease;
}

.search-box input:focus {
  border-bottom: 1px solid #ffde59; /* warna garis berubah saat fokus */
}



.btn-online {
  background-color: #0a3c8f;
  color: #fff;
  border: none;
  border-radius: 25px;
  padding: 8px 22px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

.btn-online:hover {
  background-color: #0044cc;
  transform: translateY(-2px);
}



    /* ===== HERO SECTION ===== */
    .hero {
  position: relative;
  width: 100%;
  height: 100vh;
  background: url('../image/picgedung.png') center center / cover no-repeat;
}

.hero-overlay {
  position: absolute;
  bottom: 90px;     /* jarak dari bawah */
  left: 105px;       /* jarak dari kiri */
  background: linear-gradient(90deg, rgba(91, 43, 255, 0.85), rgba(38, 132, 255, 0.85));
  color: #fff;
  padding: 30px 50px;
  border-radius: 10px;
  width: 850px;
  height: 130px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
}

.hero-overlay h1 {
  font-size: 1.8rem;
  font-weight: 700;
  line-height: 1.6;
  text-align: left;
  color: #fff;
  font-family: 'Poppins', sans-serif;
  letter-spacing: 1px;
}


.hero-overlay a {
  background: transparent;
  color: #fff;
  border: 2px solid #fff;
  padding: 10px 25px;
  border-radius: 30px;
  text-decoration: none;
  font-weight: 500;
  transition: 0.3s ease;
}

.hero-overlay a:hover {
  background: #fff;
  color: #5b2bff;
}


    /* ===== TENTANG KAMI ===== */
    .about {
      color: white;
      text-align: center;
      padding: 150px 20px;
    }

    .about h2 {
      font-size: 1.8rem;                    
      font-weight: 700;
      color: #333;
      margin-bottom: 25px;
      text-transform: uppercase;
    }

    .about p {
      display: inline-block; 
      max-width: 700px;
      text-align: center;
      font-size: 1.0rem;            
      font-weight: 500;             
      line-height: 1.9;         
      color: #4A4A4A;               
      font-family: "Poppins", sans-serif; 
      letter-spacing: 0.3px;        
    }

    .divider {
      width: 80%;                
      margin: 40px auto;         
      border: none;              
      border-top: 2px solid #ddd; 
  }


    /* ===== LAYANAN KAMI ===== */
    .services {
      padding: 90px 80  px;
      text-align: center;
    }

    .services h2 {
      font-size: 1.8rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 60px;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: 380px 290px;
      gap: 30px;
    }

    .service-item h3 {
      font-family: "Poppins", sans-serif; 
      font-size: 22px;                    
      font-weight: 700;                   
      color: #222;                        
      text-align: center;                
      margin-top: 15px;                   
      letter-spacing: 0.5px;              
    }

    .service-item p {
      font-size: 0.95rem;
      font-weight: 400;
      color: #555;
      line-height: 1.6;
    }

    .service-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .service-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }

    .service-item:hover img {
      transform: scale(1.05);
    }

    .service-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(270deg, rgba(91, 43, 255, 0.55), rgba(38, 132, 255, 0.55));
      display: flex;
      align-items: flex-end;
      justify-content: flex-start;
      padding: 25px 30px;
      color: #fff;
      font-size: 1.15rem;
      font-weight: 600;
  }


    /* ===== MITRA KAMI ===== */
    .partners {
      padding: 80px 40px;
      text-align: center;
    }

    .partners h2 {
      font-size: 1.9rem;
      font-weight: 700;
      margin-bottom: 50px;
      color: #333;
      text-transform: uppercase;
    }

    .partner-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 40px;
      margin-bottom: 80px;
    }

    .partner-logo {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px 40px;
      width: 220px;
      height: 120px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .partner-logo img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
    }

    .partner-logo:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    /* ===== BANNER KONSELING ===== */
    .consult-banner {
      background: linear-gradient(90deg, #46074E, #5b2bff, #2684ff);
      border-radius: 10px;
      padding: 30px 50px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1100px;
      margin: 0 auto 40px auto; /* ⬅️ dari 100px jadi 40px */
      flex-wrap: wrap;
      gap: 20px;
    }

    .consult-text {
      font-size: 1.2rem;
      font-weight: 600;
    }

    .consult-subtext {
      font-size: 1rem;
      font-weight: 400;
      opacity: 0.9;
      margin-top: 5px;
    }

    .consult-button {
      background: rgba(255, 255, 255, 0.15);
      border: 2px solid #fff;
      border-radius: 50px;
      padding: 12px 28px;
      font-size: 1rem;
      color: #fff;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .consult-button:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    /* ===== ARTIKEL TERBARU ===== */
    .articles {
      width: 90%;
      max-width: 1100px;
      margin: 100px auto;
      text-align: center;
    }

    .articles h2 {
      font-size: 1.9rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 50px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .article-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 60px 40px;
      justify-items: center;
    }

    .article-item {
      width: 100%;
      max-width: 500px;
      text-align: center;
      transition: transform 0.3s ease;
    }

    .article-item:hover {
      transform: translateY(-4px);
    }

    .article-item img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 12px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-item img:hover {
      transform: scale(1.02);
      box-shadow: 0 10px 18px rgba(0, 0, 0, 0.15);
    }

    .article-item p {
      font-size: 1.05rem;
      color: #4a4a4a;
      font-weight: 500;
      line-height: 1.6;
      text-align: center;
    }

    .article-button {
      display: inline-block;
      margin-top: 60px;
      border: 2px solid #5b2bff;
      color: #5b2bff;
      border-radius: 40px;
      padding: 10px 30px;
      font-size: 1rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .article-button:hover {
      background: #5b2bff;
      color: #fff;
    }

    /* ===== HUBUNGI KAMI ===== */
    .contact {
      text-align: center;
      padding: 80px 40px;
    }

    .contact h2 {
      font-size: 1.9rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 10px;
    }

    .contact h3 {
      font-size: 1.2rem;
      color: #555;
      margin-bottom: 25px;
    }

    .contact p {
      font-size: 1rem;
      color: #444;
      margin-bottom: 8px;
    }

    .contact-buttons {
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-top: 35px;
    }

    .contact-buttons a {
      display: inline-block;
      padding: 12px 32px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 500;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .btn-lokasi {
      background: linear-gradient(90deg, #4b0082, #3b1fa8, #2684ff);
      color: white;
    }

    .btn-lokasi:hover {
      opacity: 0.9;
    }

    .btn-pesan {
      border: 2px solid #4b0082;
      color: #4b0082;
      background: transparent;
    }

    .btn-pesan:hover {
      background: #4b0082;
      color: white;
    }

    /* ===== FOOTER ===== */
    footer {
      background: linear-gradient(90deg, #46074E, #197BD0);
      color: white;
      text-align: center;
      padding: 20px 10px;
      font-size: 0.95rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .navbar {
        flex-wrap: wrap;
        padding: 15px 25px;
      }

      .navbar ul {
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        margin-top: 10px;
      }

      .right-section {
        flex-direction: column;
        gap: 10px;
        margin-top: 10px;
      }

      .hero {
        padding: 50px 25px;
        justify-content: center;
      }

      .hero-overlay {
        max-width: 100%;
        text-align: center;
      }

      .service-grid {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(6, 280px);
      }

      .services, .partners, .articles, .contact {
        padding: 60px 30px;
      }

      .consult-banner {
        padding: 25px 20px;
      }

      .contact-buttons {
        flex-direction: column;
        gap: 15px;
      }
    }
  </style>
</head>

<body>
  <!-- ===== NAVBAR ===== -->
<nav class="navbar">
  <div class="logo">klug</div>
  <ul>
    <li><a href="index.html" class="active">Home</a></li>
    <li><a href="tentang.html">Tentang Kami</a></li>
    <li><a href="#layanan">Layanan Kami</a></li>
    <li><a href="#artikel">Artikel</a></li>
    <li><a href="#hubungi">Hubungi Kami</a></li>
  </ul>
  <div class="right-section">
    <div class="search-box">
      <i class="fa-solid fa-magnifying-glass"></i>
      <input type="text" placeholder="Ketik pencarian" />
    </div>
    <button class="btn-online">DAFTAR ON-LINE</button>
  </div>
</nav>

  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="hero-overlay">
      <h1>INGIN KULIAH DAN BERKARIR DI LUAR NEGERI?</h1>
      <a href="#">SELENGKAPNYA</a>
    </div>
  </section>

  <!-- ===== ABOUT ===== -->
  <section class="about">
  <h2>TENTANG KAMI</h2>
  <p>
    INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah<br>
    memberangkatkan lebih dari 3000 mahasiswa Indonesia yang ingin kuliah,<br>
    perjalanan wisata, dan berkarir di negara maju di dunia.
  </p>
</section>

<hr class="divider">



  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #fff;
      color: #333;
    }

    /* ===== SECTION LAYANAN KAMI ===== */
    .services {
      padding: 90px 80px;
      text-align: center;
    }

    .services h2 {
      font-size: 1.9rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 60px;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .service-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-template-rows: 380px 290px;
      gap: 30px;
    }

    .service-item {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .service-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s ease;
    }

    .service-item:hover img {
      transform: scale(1.05);
    }

    .service-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(270deg, rgba(91, 43, 255, 0.55), rgba(38, 132, 255, 0.55));
      display: flex;
      align-items: flex-end;
      justify-content: flex-start;
      padding: 25px 30px;
      color: #fff;
      font-size: 1.15rem;
      font-weight: 600;
    }

    /* ===== MITRA KAMI ===== */
    .partners {
      padding: 80px 40px;
      text-align: center;
    }

    .partners h2 {
      font-size: 1.9rem;
      font-weight: 700;
      margin-bottom: 50px;
      color: #333;
      text-transform: uppercase;
    }

    .partner-logos {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      gap: 40px;
      margin-bottom: 80px;
    }

    .partner-logo {
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px 40px;
      width: 220px;
      height: 120px;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .partner-logo img {
      max-width: 100%;
      max-height: 80px;
      object-fit: contain;
    }

    .partner-logo:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    /* ===== BANNER KONSELING ===== */
    .consult-banner {
      background: linear-gradient(90deg, #4b0082, #5b2bff, #2684ff);
      border-radius: 10px;
      padding: 30px 50px;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      max-width: 1100px;
      margin: 0 auto 100px auto;
      flex-wrap: wrap;
      gap: 20px;
    }

    .consult-text {
      font-size: 1.2rem;
      font-weight: 600;
    }

    .consult-subtext {
      font-size: 1rem;
      font-weight: 400;
      opacity: 0.9;
      margin-top: 5px;
    }

    .consult-button {
      background: rgba(255, 255, 255, 0.15);
      border: 2px solid #fff;
      border-radius: 50px;
      padding: 12px 28px;
      font-size: 1rem;
      color: #fff;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .consult-button:hover {
      background: rgba(255, 255, 255, 0.3);
    }

    /* ===== ARTIKEL TERBARU ===== */
    .articles {
      padding: 80px 80px 100px 80px;
      text-align: center;
    }

    .articles h2 {
      font-size: 1.9rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 50px;
      text-transform: uppercase;
    }

    .article-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 50px;
      justify-items: center;
      margin-bottom: 60px;
    }

    .article-item {
      text-align: center;
      width: 100%;
      max-width: 500px;
    }

    .article-item img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article-item img:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .article-item p {
      font-size: 1rem;
      font-weight: 500;
      color: #333;
      line-height: 1.5;
    }

    .article-button {
      display: inline-block;
      border: 2px solid #5b2bff;
      color: #5b2bff;
      border-radius: 50px;
      padding: 10px 30px;
      font-size: 1rem;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .article-button:hover {
      background: #5b2bff;
      color: white;
    }

    /* ===== HUBUNGI KAMI ===== */
    .contact {
      text-align: center;
      padding: 80px 40px;
    }

    .contact h2 {
      font-size: 1.9rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 10px;
    }

    .contact h3 {
      font-size: 1.2rem;
      color: #555;
      margin-bottom: 25px;
    }

    .contact p {
      font-size: 1rem;
      color: #444;
      margin-bottom: 8px;
    }

    .contact-buttons {
      display: flex;
      justify-content: center;
      gap: 25px;
      margin-top: 35px;
    }

    .contact-buttons a {
      display: inline-block;
      padding: 12px 32px;
      border-radius: 40px;
      text-decoration: none;
      font-weight: 500;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .btn-lokasi {
      background: linear-gradient(90deg, #4b0082, #3b1fa8, #2684ff);
      color: white;
    }

    .btn-lokasi:hover {
      opacity: 0.9;
    }

    .btn-pesan {
      border: 2px solid #4b0082;
      color: #4b0082;
      background: transparent;
    }

    .btn-pesan:hover {
      background: #4b0082;
      color: white;
    }

    /* ===== FOOTER ===== */
    footer {
      background: linear-gradient(90deg, #2b003f, #3b1fa8, #5b8de6);
      color: white;
      text-align: center;
      padding: 20px 10px;
      font-size: 0.95rem;
    }

    /* ===== RESPONSIVE ===== */
    @media (max-width: 768px) {
      .service-grid {
        grid-template-columns: 1fr;
        grid-template-rows: repeat(6, 280px);
      }

      .services, .partners, .articles, .contact {
        padding: 60px 30px;
      }

      .consult-banner {
        padding: 25px 20px;
      }

      .contact-buttons {
        flex-direction: column;
        gap: 15px;
      }
    }
  </style>
</head>

<body>
  <!-- ===== LAYANAN KAMI ===== -->
  <section class="services">
    <h2>LAYANAN KAMI</h2>
    <div class="service-grid">
      <div class="service-item">
        <img src="../image/wisuda.jpeg" alt="S1" />
        <div class="service-overlay">Studi S1 - Bachelor</div>
      </div>
      <div class="service-item">
        <img src="../image/master.png" alt="S2" />
        <div class="service-overlay">Studi S2 - Master</div>
      </div>
      <div class="service-item">
        <img src="../image/gunung.jpeg" alt="S3" />
        <div class="service-overlay">Studi S3 - Ph.D</div>
      </div>
      <div class="service-item">
        <img src="../image/kursus.png" alt="Bahasa" />
        <div class="service-overlay">Kursus Bahasa Asing</div>
      </div>
      <div class="service-item">
        <img src="../image/studytour.png" alt="Tour" />
        <div class="service-overlay">Study Tour</div>
      </div>
      <div class="service-item">
        <img src="../image/suntik.jpeg" alt="Ausbildung" />
        <div class="service-overlay">Ausbildung</div>
      </div>
    </div>
  </section>

  <!-- ===== MITRA KAMI ===== -->
  <section class="partners">
    <h2>MITRA KAMI</h2>
    <div class="partner-logos">
      <div class="partner-logo"><img src="../image/aviation.jpg" alt="424 Aviation"></div>
      <div class="partner-logo"><img src="../image/adrew.png" alt="St Andrews College"></div>
      <div class="partner-logo"><img src="../image/htw.png" alt="HTW Berlin"></div>
      <div class="partner-logo"><img src="/image/studygroup.png" alt="StudyGroup"></div>
    </div>

    <div class="consult-banner">
      <div>
        <div class="consult-text">GRATIS KONSELING STUDI DI LUAR NEGERI !!!</div>
        <div class="consult-subtext">Konsultasi seputar kuliah / bekerja di Luar Negeri</div>
      </div>
      <button class="consult-button">MULAI KONSULTASI ⮟</button>
    </div>
  </section>

  <section class="articles">
    <h2>ARTIKEL TERBARU</h2>
    <div class="article-grid">
      <div class="article-item">
        <img src="../image/studijerman.png" alt="Artikel 1">
        <p>5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
      </div>
      <div class="article-item">
        <img src="../image/korona.png" alt="Artikel 2">
        <p>Uni Eropa Menghadapi Virus Korona</p>
      </div>
      <div class="article-item">
        <img src="../image/bahasajerman.png" alt="Artikel 3">
        <p>Belajar Bahasa Jerman Bersama Goethe Insitut</p>
      </div>
      <div class="article-item">
        <img src="../image/gatescambride.png" alt="Artikel 4">
        <p>Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
      </div>
    </div>
    <a href="#" class="article-button">ARTIKEL LAINNYA</a>
  </section>

  <!-- ===== HUBUNGI KAMI ===== -->

<section class="contact" id="hubungi">
  <h2>HUBUNGI KAMI</h2>
  <h3>KANTOR PUSAT</h3>
  <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
  <p>Phone : (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
  <p>Hotline: +6281519040071 / +62811998167</p>

  <div class="contact-buttons">
    <a href="#" class="btn-lokasi">LOKASI KAMI</a>
    <a href="#" class="btn-pesan">KIRIM PESAN</a>
  </div>
</section>


  <!-- ===== FOOTER ===== -->
  <footer>
    Copyright © 2020 - Inaklug Indonesia | Hak cipta dilindungi undang-undang
  </footer>
</body>
</html>
