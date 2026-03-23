<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Pastikan kamu sudah punya Model Product

class ProductController extends Controller
{
    /**
     * Menampilkan daftar produk untuk user/pelanggan
     */
   public function index()
{
    try {
        // Coba ambil data produk
        $produks = \App\Models\Product::all();
    } catch (\Exception $e) {
        // JIKA ERROR (Model ga ada/DB mati), jangan kasih liat layar hitam!
        // Tapi kasih data kosong aja supaya yang muncul ANIMASI SKELETON
        $produks = collect();
    }

    return view('produk.index', compact('produks'));
}
    /**
     * Menampilkan detail produk tertentu
     */
    public function show($id)
    {
        $produk = Product::findOrFail($id);
        return view('produk.show', compact('produk'));
    }
}
