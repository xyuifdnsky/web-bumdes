<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasarDesa - BUMDes Patimban</title>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        :root { --primary: #2d6a4f; --sidebar-bg: #1a1c23; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f4f7f6; margin: 0; }

        .wrapper { display: flex; min-height: 100vh; position: relative; }

        /* SIDEBAR */
        .sidebar {
            width: 260px; background: var(--sidebar-bg); color: white;
            transition: 0.3s; position: sticky; top: 0; height: 100vh; z-index: 40;
        }

        /* MOBILE NAV */
        .mobile-nav {
            display: none; position: fixed; bottom: 0; width: 100%;
            background: white; border-top: 1px solid #ddd; z-index: 50;
            justify-content: space-around; padding: 10px 0;
        }

        @media (max-width: 768px) {
            .sidebar { display: none; }
            .mobile-nav { display: flex; }
            .main-content { padding-bottom: 70px; }
        }

        .main-content { flex: 1; min-width: 0; display: flex; flex-direction: column; }
        .container-fluid { padding: 20px; }

        .nav-link {
            display: flex; align-items: center; gap: 12px; padding: 12px 15px;
            color: rgba(255,255,255,0.7); text-decoration: none; border-radius: 8px;
        }
        .nav-link.active { background: var(--primary); color: white; }

        /* DROPDOWN MENU */
        .profile-dropdown {
            display: none;
            position: absolute;
            right: 0;
            top: 110%;
            background: white;
            min-width: 180px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid #edf2f7;
            z-index: 100;
        }
        .profile-dropdown.show { display: block; }
        .dropdown-item {
            display: flex; align-items: center; gap: 10px;
            padding: 12px 16px; color: #4a5568; text-decoration: none; font-size: 14px;
            transition: 0.2s; border: none; width: 100%; text-align: left; background: none;
        }
        .dropdown-item:hover { background: #f7fafc; color: var(--primary); }
    </style>
</head>
<body>

    <div class="wrapper">
        <aside class="sidebar">
            <div class="p-6 text-xl font-extrabold text-white"><i class="fas fa-store"></i> MITRA BUMDes</div>
            <nav class="px-4">
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-chart-pie"></i> Dashboard
                </a>
                <a href="product" class="nav-link"><i class="fas fa-box"></i> Produk</a>
                <a href="orders" class="nav-link"><i class="fas fa-shopping-basket"></i> Pesanan</a>
            </nav>
        </aside>

        <main class="main-content">
            <header class="bg-white p-4 shadow-sm flex justify-between items-center px-6 sticky top-0 z-30">
                <div class="font-bold text-green-800 md:text-lg text-sm">Dashboard MITRA</div>

                <div class="flex items-center gap-4">
                    <div class="relative cursor-pointer text-gray-400 hover:text-green-700 transition">
                        <i class="fas fa-bell text-xl"></i>
                        <span class="absolute -top-1 -right-1 w-2 h-2 bg-red-500 rounded-full border-2 border-white"></span>
                    </div>

                <div class="relative">
    <div id="profileTrigger" class="w-10 h-10 bg-green-800 text-green-100 rounded-full flex items-center justify-center font-extrabold cursor-pointer hover:bg-green-900 transition shadow-md border-2 border-green-100 overflow-hidden">
        @if(Auth::check())
            {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
        @else
            <i class="fas fa-user"></i>
        @endif
    </div>

    <div id="profileMenu" class="profile-dropdown">
        <div class="px-4 py-3 border-b border-gray-100 bg-gray-50">
            <p class="text-[10px] text-gray-400 font-bold uppercase tracking-widest leading-none mb-1">Akun Saya</p>
            <p class="text-sm font-bold text-gray-800 truncate">{{ Auth::user()->name ?? 'User' }}</p>
        </div>
        <a href="{{ route('profile.edit') }}" class="dropdown-item">
            <i class="fas fa-user-edit text-gray-400"></i> Edit Profil
        </a>
        <hr class="border-gray-100">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="dropdown-item text-red-500 font-bold">
                <i class="fas fa-power-off"></i> Keluar
            </button>
        </form>
    </div>
</div>
            </header>

            <div class="container-fluid">
                {{ $slot }}
            </div>
        </main>

        <nav class="mobile-nav">
            <a href="{{ route('dashboard') }}" class="text-center {{ request()->routeIs('dashboard') ? 'text-green-700' : 'text-gray-400' }}">
                <i class="fas fa-home block text-lg"></i><span class="text-[10px]">Home</span>
            </a>
            <a href="#" class="text-center text-gray-400">
                <i class="fas fa-box block text-lg"></i><span class="text-[10px]">Produk</span>
            </a>
            <a href="#" class="text-center text-gray-400">
                <i class="fas fa-shopping-cart block text-lg"></i><span class="text-[10px]">Pesanan</span>
            </a>
            <a href="{{ route('profile.edit') }}" class="text-center text-gray-400">
                <i class="fas fa-user block text-lg"></i><span class="text-[10px]">Akun</span>
            </a>
        </nav>
    </div>

    <script>
        const trigger = document.getElementById('profileTrigger');
        const menu = document.getElementById('profileMenu');

        trigger.addEventListener('click', (e) => {
            e.stopPropagation();
            menu.classList.toggle('show');
        });

        document.addEventListener('click', () => {
            menu.classList.remove('show');
        });
    </script>
</body>
</html>
