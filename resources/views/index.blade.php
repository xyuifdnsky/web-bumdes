<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMDes Putra Samudra Patimban</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">

    <style>
        /* SMOOTH SCROLL */
        html { scroll-behavior: smooth; }

        body {
            margin: 0; padding: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #d1d1d1; /* Abu-abu sesuai sketsa */
            overflow-x: hidden;
        }

        /* --- SECTION HERO (Lama) --- */
        .hero-bg {
            background: url('{{ asset("asset/img/berandabg.jpg") }}') no-repeat center center;
            background-size: cover;
            height: 100vh;
            position: relative;
            width: 100%;
        }

        .overlay {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.4);
        }

        header {
            position: absolute; top: 0; width: 100%; display: flex;
            justify-content: space-between; align-items: flex-start;
            padding: 30px 5%; box-sizing: border-box; z-index: 100;
        }

        .top-left .brand { font-weight: 800; font-size: 1.5rem; color: white; }
        .top-left .clock { font-size: 1.2rem; color: #00ffcc; margin-top: 5px; }
        .top-left .date { font-size: 0.9rem; color: white; opacity: 0.8; }

        .nav-links { display: flex; gap: 15px; }
        .glass-btn {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 10px 20px; color: white; border-radius: 50px;
            text-decoration: none; font-weight: 600; font-size: 0.9rem;
            transition: 0.3s;
        }
        .glass-btn:hover { background: rgba(255, 255, 255, 0.3); transform: translateY(-3px); }

        .main-content {
            position: relative; z-index: 10; height: 100%;
            display: flex; flex-direction: column; justify-content: center;
            align-items: center; text-align: center; color: white;
        }

        .badge { background: #00ffcc; color: #003322; padding: 5px 15px; border-radius: 50px; font-weight: 800; font-size: 0.8rem; margin-bottom: 20px; }
        .title-main { font-size: 4rem; font-weight: 800; margin: 0; letter-spacing: -2px; }
        .action-btns { display: flex; gap: 20px; margin-top: 40px; }

        /* --- SECTION BARU (Sesuai Sketsa) --- */
        .section-container {
            min-height: 100vh; padding: 80px 10%;
            position: relative; display: flex; flex-direction: column;
            align-items: center; justify-content: center; box-sizing: border-box;
        }

        .side-label { position: absolute; top: 30px; left: 30px; font-weight: 800; opacity: 0.3; color: #333; }

        .badge-center {
            background: white; border: 1px solid #333;
            padding: 10px 60px; font-weight: bold; margin-bottom: 50px;
        }

        /* Kotak dengan Garis Silang (X) */
        .box-placeholder {
            border: 2px solid #333; position: relative;
            background: transparent; display: flex; align-items: center; justify-content: center;
            overflow: hidden;
        }

        /* Membuat Tanda Silang (X) */
        .box-placeholder::before, .box-placeholder::after {
            content: ""; position: absolute; width: 150%; height: 1px; background: #333; z-index: 1;
        }
        .box-placeholder::before { transform: rotate(25deg); }
        .box-placeholder::after { transform: rotate(-25deg); }
        .box-placeholder span { background: #d1d1d1; padding: 5px 15px; z-index: 2; font-weight: bold; }

        /* Layout Tentang (Foto 1) */
        .content-box-full { width: 100%; height: 400px; }

        /* Layout Produk 1 (Foto 2) */
        .product-grid { display: grid; grid-template-columns: 1.2fr 1fr; gap: 50px; width: 100%; }
        .box-image { height: 450px; width: 100%; }
        .product-details { display: flex; flex-direction: column; gap: 20px; }
        .label-white { background: white; border: 1px solid #333; padding: 20px; text-align: center; font-weight: 800; }
        .box-desc { height: 250px; width: 100%; }
        .cta-container { width: 150px; margin: 10px auto; }

        /* Layout Produk 2 (Foto 3) */
        .product-grid-full { width: 100%; display: flex; flex-direction: column; align-items: center; }
        .box-desc-large { width: 70%; height: 350px; margin-bottom: 20px; }

        /* FOOTER */
        .footer-simple {
            background: white; padding: 60px; text-align: center;
            font-weight: 800; border-top: 2px solid #333;
        }

        @media (max-width: 768px) {
            .title-main { font-size: 2.5rem; }
            .product-grid { grid-template-columns: 1fr; }
            .box-desc-large { width: 100%; }
        }
    </style>
</head>
<body>

    <div class="hero-bg">
        <div class="overlay"></div>
        <header>
            <div class="top-left">
                <div class="brand">PUTRA SAMUDRA PATIMBAN</div>
                <div class="clock" id="live-clock">00:00:00</div>
                <div class="date" id="live-date">Memuat tanggal...</div>
            </div>
            <div class="nav-links">
                <a href="#" class="glass-btn">Beranda</a>
                <a href="#tentang" class="glass-btn">Tentang</a>
                <a href="{{ route('login') }}" class="glass-btn">Login</a>
                <a href="{{ route('register') }}" class="glass-btn">Register</a>
            </div>
        </header>

        <div class="main-content">
            <div class="badge">Badan Usaha Milik Desa</div>
            <h1 class="title-main">PUTRA SAMUDRA PATIMBAN</h1>
            <div class="action-btns">
                <a href="{{ route('register.mitra') }}" class="glass-btn">Daftar menjadi Mitra</a>
                <a href="{{ route('produk.index') }}" class="glass-btn">Jelajahi Produk</a>
            </div>
        </div>
    </div>

    <section id="tentang" class="section-container">
        <div class="side-label">Tentang</div>
        <div class="badge-center">Tentang</div>
        <div class="box-placeholder content-box-full">
            <span>Teks</span>
        </div>
    </section>

    <section id="produk-1" class="section-container" style="background-color: #c4c4c4;">
        <div class="side-label">Produk</div>
        <div class="product-grid">
            <div class="box-placeholder box-image">
                <span>Gambar</span>
            </div>
            <div class="product-details">
                <div class="label-white">NAMA PRODUK 1</div>
                <div class="box-placeholder box-desc">
                    <span>Deskripsi</span>
                </div>
                <div class="cta-container">
                    <div class="label-white">CTA</div>
                </div>
            </div>
        </div>
    </section>

    <section id="produk-2" class="section-container">
        <div class="side-label">Produk 2</div>
        <div class="product-grid-full">
            <div class="box-placeholder box-desc-large">
                <span>PRODUK Deskripsi</span>
            </div>
            <div class="cta-container" style="width: 250px;">
                <div class="label-white">CTA</div>
            </div>
        </div>
    </section>

    <footer class="footer-simple">
        Footer
    </footer>

    <script>
        function updateClock() {
            const now = new Date();
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('live-clock').innerText = `${hours} : ${minutes} : ${seconds}`;
            const options = { day: 'numeric', month: 'long', year: 'numeric' };
            const dateStr = now.toLocaleDateString('id-ID', options);
            document.getElementById('live-date').innerText = dateStr;
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>
</html>
