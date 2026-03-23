<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - PasarDesa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .skeleton-card { background: #fff; border-radius: 15px; padding: 20px; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .shimmer {
            background: #f0f0f0;
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
            border-radius: 8px;
        }
        @keyframes shimmer { 0% { background-position: -200% 0; } 100% { background-position: 200% 0; } }
    </style>
</head>
<body class="bg-gray-50">
    <div class="container mx-auto p-8">
        <h1 class="text-2xl font-bold text-green-800 mb-6">Produk Unggulan BUMDes</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @forelse ($produks as $produk)
                <div class="bg-white p-4 rounded-xl shadow">
                    <h3 class="font-bold">{{ $produk->nama }}</h3>
                </div>
            @empty
                @for ($i = 0; $i < 6; $i++)
                <div class="skeleton-card">
                    <div class="shimmer h-40 w-full mb-4"></div>
                    <div class="shimmer h-4 w-3/4 mb-2"></div>
                    <div class="shimmer h-4 w-1/2"></div>
                </div>
                @endfor
            @endforelse
        </div>
    </div>
</body>
</html>
