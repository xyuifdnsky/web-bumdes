<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMDes Putra Samudra Patimban</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;800&display=swap" rel="stylesheet">

    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
</head>

<style>
    .hero-bg {
        /* Gunakan folder 'asset' (tanpa s) sesuai struktur folder kamu */
        background: url('{{ asset("asset/img/berandabg.jpg") }}') no-repeat center center;
        background-size: cover;
        height: 100vh;
        position: relative;
        width: 100%;
    }
</style>

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
                <a href="#" class="glass-btn">Tentang</a>
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

    <script>
        function updateClock() {
            const now = new Date();

            // Format Jam (HH:MM:SS)
            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            document.getElementById('live-clock').innerText = `${hours} : ${minutes} : ${seconds}`;

            // Format Tanggal
            const options = { day: 'numeric', month: 'long', year: 'numeric' };
            const dateStr = now.toLocaleDateString('id-ID', options);
            document.getElementById('live-date').innerText = dateStr;
        }

        setInterval(updateClock, 1000);
        updateClock(); // Panggil sekali saat load agar tidak delay
    </script>
</body>
</html>
