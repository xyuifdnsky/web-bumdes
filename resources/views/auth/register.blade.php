<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilih Jenis Registrasi - PasarDesa</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            /* Warna latar belakang hijau gelap sesuai gambar */
            background-color: #1b3529;
            /* Sedikit variasi warna di bagian bawah untuk meniru efek gambar */
            background-image: linear-gradient(to bottom, #1b3529 80%, #4a6d5c 100%);
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Card Glassmorphism */
        .role-card {
            width: 100%;
            max-width: 400px; /* Ukuran maksimal untuk Web */
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.1) 0%, rgba(255, 255, 255, 0.02) 100%);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            /* Efek garis terang di atas dan bawah */
            border-top: 3px solid rgba(255, 255, 255, 0.6);
            border-bottom: 3px solid rgba(255, 255, 255, 0.6);
            border-radius: 16px;
            padding: 50px 30px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .title {
            font-size: 32px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 40px;
            letter-spacing: 0.5px;
        }

        /* Tombol Pilihan */
        .btn-role {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            padding: 14px 24px;
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(255,255,255,0.1);
        }

        .btn-role i {
            font-size: 18px;
        }

        .btn-role:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2), inset 0 2px 4px rgba(255,255,255,0.2);
        }

        /* Link Panduan */
        .guide-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #e0e0e0;
            text-decoration: none;
            font-size: 13px;
            margin-top: 20px;
            margin-bottom: 40px;
            transition: color 0.3s ease;
        }

        .guide-link i {
            font-size: 24px;
            color: #f4f1de; /* Warna icon agak krem/putih tulang */
        }

        .guide-link:hover {
            color: #ffffff;
        }
        .guide-link:hover i {
            transform: translateX(3px);
            transition: transform 0.3s ease;
        }

        /* Footer Login */
        .footer-text {
            font-size: 14px;
            color: #d1d1d1;
        }

        .footer-text a {
            color: #ffffff;
            font-weight: 600;
            text-decoration: none;
            display: block;
            margin-top: 4px;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }

        /* Responsive Mobile */
        @media (max-width: 480px) {
            .role-card {
                padding: 40px 20px;
            }
            .title {
                font-size: 28px;
                margin-bottom: 30px;
            }
            .btn-role {
                padding: 12px 20px;
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="role-card">
        <h1 class="title">Registrasi<br>Sebagai</h1>

        <a href="{{ route('register.mitra') }}" class="btn-role">
            <i class="far fa-handshake"></i> Daftar Mitra
        </a>

        <a href="#" class="btn-role">
            <i class="far fa-user-circle"></i> Pelanggan
        </a>

        <a href="#" class="guide-link">
            Panduan Pendaftaran <i class="fas fa-arrow-circle-right"></i>
        </a>

        <div class="footer-text">
            Sudah punya akun?
            <a href="{{ route('login') }}">Login</a>
        </div>
    </div>

</body>
</html>
