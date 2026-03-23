<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Waduh, Kamu Nyasar ke Luar Angkasa!</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        body, html {
            margin: 0; padding: 0; height: 100%;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #1a1a1a; /* Warna Gelap Luar Angkasa */
            color: white;
            display: flex; align-items: center; justify-content: center;
            overflow: hidden;
        }

        .container { text-align: center; padding: 20px; z-index: 10; }

        /* Ilustrasi (Ganti URL ini dengan gambar astronot kamu sendiri jika punya) */
        .illustration {
            width: 100%; max-width: 400px;
            margin-bottom: 40px;
            animation: float 4s infinite ease-in-out; /* Efek Melayang */
        }

        .error-code {
            font-size: 120px; font-weight: 800;
            margin: 0; line-height: 1;
            background: linear-gradient(to right, #6366f1, #a855f7);
            -webkit-background-clip: text; -webkit-text-fill-color: transparent;
        }

        .error-text { font-size: 24px; font-weight: 600; margin: 10px 0 30px 0; opacity: 0.8; }

        /* Tombol Pulang Ke Bumi */
        .back-btn {
            display: inline-block;
            padding: 14px 30px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            color: white; text-decoration: none;
            font-weight: 600; font-size: 16px;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }
        .back-btn:hover { background: white; color: #1a1a1a; transform: scale(1.05); }

        /* Animasi Melayang */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Background Bintang (Optional) */
        .stars {
            position: absolute; width: 100%; height: 100%;
            background-image: radial-gradient(white, rgba(255,255,255,.2) 2px, transparent 3px);
            background-size: 50px 50px; opacity: 0.3; z-index: 1;
        }
    </style>
</head>
<body>
    <div class="stars"></div>

    <div class="container">
        <img src="https://img.freepik.com/free-vector/floating-astronaut-concept-illustration_114360-12821.jpg" alt="Astronot Nyasar" class="illustration">

        <h1 class="error-code">404</h1>
        <p class="error-text">Waduh! Halaman ini hilang di telan Black Hole.</p>

       <a href="{{ url()->previous() }}" class="back-btn">
    <i class="fas fa-arrow-left"></i> Kembali ke Halaman Sebelumnya
</a>
    </div>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
