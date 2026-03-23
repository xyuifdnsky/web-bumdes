<x-app-layout>
    <div class="mb-6">
        <h1 class="text-xl md:text-2xl font-extrabold text-gray-800">Halo, {{ Auth::user()->name }}!</h1>
        <p class="text-gray-500 text-sm">Ringkasan usaha BUMDes kamu hari ini.</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-6 mb-8">
        <div class="bg-white p-4 md:p-6 rounded-2xl shadow-sm border border-gray-100">
            <div class="w-10 h-10 bg-green-100 text-green-600 rounded-lg flex items-center justify-center mb-3">
                <i class="fas fa-wallet text-sm"></i>
            </div>
            <p class="text-gray-400 text-[10px] md:text-xs font-bold uppercase tracking-wider">Pendapatan</p>
            <h3 class="text-sm md:text-xl font-extrabold text-gray-800">Rp 4,8 Jt</h3>
        </div>

        <div class="bg-white p-4 md:p-6 rounded-2xl shadow-sm border border-gray-100">
            <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center mb-3">
                <i class="fas fa-box text-sm"></i>
            </div>
            <p class="text-gray-400 text-[10px] md:text-xs font-bold uppercase tracking-wider">Produk</p>
            <h3 class="text-sm md:text-xl font-extrabold text-gray-800">24 Item</h3>
        </div>

        <div class="bg-white p-4 md:p-6 rounded-2xl shadow-sm border border-gray-100">
            <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center mb-3">
                <i class="fas fa-shopping-bag text-sm"></i>
            </div>
            <p class="text-gray-400 text-[10px] md:text-xs font-bold uppercase tracking-wider">Pesanan</p>
            <h3 class="text-sm md:text-xl font-extrabold text-gray-800">12 Baru</h3>
        </div>

        <div class="bg-white p-4 md:p-6 rounded-2xl shadow-sm border border-gray-100">
            <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center mb-3">
                <i class="fas fa-star text-sm"></i>
            </div>
            <p class="text-gray-400 text-[10px] md:text-xs font-bold uppercase tracking-wider">Rating</p>
            <h3 class="text-sm md:text-xl font-extrabold text-gray-800">4.8 / 5</h3>
        </div>
    </div>

    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-5 border-b border-gray-50 flex justify-between items-center">
            <h3 class="font-bold text-gray-800 text-sm md:text-base">Pesanan Terbaru</h3>
            <button class="text-green-600 text-xs font-bold">Lihat Semua</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-xs md:text-sm">
                <thead class="bg-gray-50 text-gray-500 uppercase">
                    <tr>
                        <th class="p-4">Customer</th>
                        <th class="p-4">Total</th>
                        <th class="p-4">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    <tr>
                        <td class="p-4 font-medium">Rangga Agung</td>
                        <td class="p-4">Rp 150.000</td>
                        <td class="p-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded-full text-[10px] font-bold">DIKIRIM</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
