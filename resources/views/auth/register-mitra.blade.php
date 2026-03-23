<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isi Formulir Mitra - PasarDesa Patimban</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #2a3222;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        body::after {
            content: '';
            position: fixed;
            bottom: 0; left: 0; right: 0;
            height: 15vh;
            background-color: #8a9a5b;
            z-index: -1;
        }

        .form-card {
            width: 100%;
            max-width: 420px;
            background: linear-gradient(180deg, rgba(255,255,255,0.15) 0%, rgba(0,0,0,0.6) 10%, rgba(0,0,0,0.8) 90%, rgba(255,255,255,0.2) 100%);
            border-radius: 8px;
            padding: 40px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            animation: fadeIn 0.4s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .title {
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 24px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.8);
        }

        /* --- Tombol Google --- */
        .btn-google {
            display: flex; align-items: center; justify-content: center; gap: 10px;
            width: 100%; background-color: #ffffff; color: #333333;
            border: 2px solid #000000; border-radius: 8px; padding: 12px;
            font-size: 15px; font-weight: 700; text-decoration: none;
            transition: all 0.2s; margin-bottom: 20px;
        }
        .btn-google:hover { background-color: #f1f1f1; transform: translateY(-2px); }

        /* --- Divider --- */
        .divider { display: flex; align-items: center; text-align: center; margin-bottom: 20px; }
        .divider::before, .divider::after { content: ''; flex: 1; border-bottom: 1px solid rgba(255,255,255,0.2); }
        .divider span { padding: 0 10px; font-size: 12px; color: rgba(255,255,255,0.6); font-weight: 600; letter-spacing: 1px; }

        /* --- Styling Input Dasar --- */
        .input-control {
            width: 100%; background-color: #fdf7e3; border: 2px solid #000000; border-radius: 8px;
            padding: 12px 16px; font-size: 14px; font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600; color: #333 !important; margin-bottom: 12px; outline: none; transition: all 0.2s;
        }
        .input-control:focus { box-shadow: 0 0 0 3px rgba(138, 154, 91, 0.5); }

        /* MENCEGAH WARNA BIRU AUTOFILL BROWSER */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus {
            -webkit-text-fill-color: #333;
            -webkit-box-shadow: 0 0 0px 1000px #fdf7e3 inset;
            transition: background-color 5000s ease-in-out 0s;
        }

        /* Styling untuk input yang Readonly (saat email terisi dari Google) */
        input[readonly] {
            background-color: #ece6d0 !important;
            color: #555 !important;
            cursor: not-allowed;
            border-style: dashed;
        }

        .password-wrapper { position: relative; width: 100%; }
        .password-wrapper .input-control { padding-right: 40px; }

        .toggle-password {
            position: absolute; right: 15px; top: 14px;
            color: #888; cursor: pointer; font-size: 16px;
        }

        .form-row { display: flex; gap: 12px; }
        .form-row .input-control { text-align: center; }

        .btn-upload-label {
            display: block; width: 100%; background-color: #fdf7e3; border: 2px solid #000000;
            border-radius: 8px; padding: 10px; text-align: center; font-size: 14px; font-weight: 600;
            color: #333; margin: 10px 0 20px 0;
        }

        .file-list { margin-bottom: 24px; padding-left: 10px; }
        .file-item { display: flex; align-items: center; gap: 12px; margin-bottom: 16px; cursor: pointer; }
        .file-item .folder-icon { font-size: 28px; color: #fbbc05; }
        .file-item .file-text { color: #ffffff; font-size: 15px; font-weight: 600; text-decoration: underline; }
        .real-file-input { display: none; }

        .btn-simpan {
            width: 100%; background-color: #8a9a5b; border: 2px solid #000000; border-radius: 8px;
            padding: 12px; font-size: 16px; font-weight: 700; color: #000000; cursor: pointer; transition: all 0.2s;
        }
        .btn-simpan:hover { background-color: #9cb066; transform: translateY(-2px); }

        .checkbox-group { display: flex; align-items: center; gap: 10px; justify-content: center; margin-top: 15px; }
        .checkbox-custom { appearance: none; width: 18px; height: 18px; border: 2px solid #fbbc05; border-radius: 4px; cursor: pointer; position: relative; }
        .checkbox-custom:checked::after { content: '\f00c'; font-family: 'Font Awesome 6 Free'; font-weight: 900; color: #fbbc05; position: absolute; left: 1px; top: -1px; font-size: 12px; }
        .checkbox-label { font-size: 13px; font-weight: 600; color: #ffffff; text-decoration: underline; cursor: pointer; }
    </style>
</head>
<body>

    <div class="form-card">
        <h1 class="title">Isi Formulir</h1>
        @if ($errors->any())
    <div style="background: #ffdbdb; color: #a94442; padding: 10px; border-radius: 8px; margin-bottom: 20px; font-size: 13px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <a href="{{ url('/auth/google') }}" class="btn-google">
            <img src="https://www.gstatic.com/images/branding/product/1x/gsa_512dp.png" width="20" alt="Google">
            Daftar dengan Google
        </a>

        <div class="divider"><span>ATAU DAFTAR MANUAL</span></div>

        <form method="POST" action="{{ route('mitra.store') }}" enctype="multipart/form-data">
            @csrf

            <input type="email"
                   name="email"
                   class="input-control"
                   placeholder="Email Aktif"
                   value="{{ session('google_email') }}"
                   {{ session('google_email') ? 'readonly' : 'required' }}>

            <div class="password-wrapper">
                <input type="password" name="password" id="password" class="input-control" placeholder="Password (Min. 8 Karakter)" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword('password', this)"></i>
            </div>

            <div class="password-wrapper">
                <input type="password" name="password_confirmation" id="password_confirm" class="input-control" placeholder="Konfirmasi Password" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword('password_confirm', this)"></i>
            </div>

            <input type="text" name="nama_usaha" class="input-control" placeholder="Nama Usaha" required>
            <input type="text" name="nama_pemilik" class="input-control" placeholder="Nama Pemilik" value="{{ session('google_name') }}" required>
            <input type="text" name="jenis_usaha" class="input-control" placeholder="Jenis Usaha" required>
            <input type="text" name="alamat_usaha" class="input-control" placeholder="Alamat Usaha" required>

            <div class="form-row">
                <input type="text" name="rt_rw" class="input-control" placeholder="RT/RW" required>
                <input type="text" name="dusun" class="input-control" placeholder="Dusun" required>
            </div>

            <div class="btn-upload-label">Upload Dokumen</div>

            <div class="file-list">
                <label class="file-item" for="ktp-upload">
                    <i class="fas fa-folder folder-icon"></i>
                    <span class="file-text" id="ktp-text">KTP</span>
                  <input type="file" name="ktp" id="ktp-upload" class="real-file-input" accept=".jpg,.png,.pdf" onchange="updateFileName(this, 'ktp-text')">
                </label>

                <label class="file-item" for="sku-upload">
                    <i class="fas fa-folder folder-icon"></i>
                    <span class="file-text" id="sku-text">Surat Keterangan Usaha</span>
                  <input type="file" name="sku" id="sku-upload" class="real-file-input" accept=".jpg,.png,.pdf" onchange="updateFileName(this, 'sku-text')">
                </label>
            </div>

            <button type="submit" class="btn-simpan">Simpan</button>

            <div class="checkbox-group">
                <input type="checkbox" id="syarat" name="syarat" class="checkbox-custom" required checked>
                <label for="syarat" class="checkbox-label">Syarat dan Ketentuan</label>
            </div>
        </form>
    </div>

    <script>
        function updateFileName(input, textId) {
            const textElement = document.getElementById(textId);
            if (input.files && input.files[0]) {
                let fileName = input.files[0].name;
                if (fileName.length > 20) { fileName = fileName.substring(0, 17) + '...'; }
                textElement.innerText = fileName;
                textElement.style.color = '#fbbc05';
            }
        }

        function togglePassword(inputId, icon) {
            const input = document.getElementById(inputId);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }
    </script>
</body>
</html>
