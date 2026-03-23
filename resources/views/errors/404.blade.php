<section id="tentang" class="section-container bg-light">
    <div class="badge-center">Tentang</div>
    <div class="content-box-full">
        <p>Tuliskan deskripsi singkat BUMDes Putra Samudra Patimban di sini. Misalnya sejarah singkat atau visi misi desa Patimban dalam memajukan ekonomi masyarakat melalui produk lokal.</p>
    </div>
</section>

<section id="produk-1" class="section-container">
    <div class="side-title">Produk</div>
    <div class="product-wrapper">
        <div class="product-image">
            <img src="{{ asset('asset/img/produk1.jpg') }}" alt="Gambar Produk 1">
            <div class="label-overlay">Gambar</div>
        </div>
        <div class="product-info">
            <div class="name-tag">NAMA PRODUK 1</div>
            <div class="desc-box">
                <p>Deskripsi Produk 1: Penjelasan mengenai keunggulan produk, bahan, atau manfaatnya untuk pembeli.</p>
            </div>
            <a href="#" class="cta-btn">CTA (Beli Sekarang)</a>
        </div>
    </div>
</section>

<section id="produk-2" class="section-container bg-light">
    <div class="side-title">Produk 2</div>
    <div class="product-wrapper reversed">
        <div class="product-info">
            <div class="desc-box-large">
                <p>PRODUK Deskripsi: Untuk produk kedua, tampilannya lebih lebar untuk menonjolkan detail informasi produk unggulan lainnya.</p>
            </div>
            <a href="#" class="cta-btn">CTA</a>
        </div>
    </div>
</section>

<footer class="main-footer">
    <p>Footer - &copy; 2026 BUMDes Putra Samudra Patimban</p>
</footer>

<style>
    /* CSS UNTUK SKETSA BARU */
    .section-container {
        padding: 80px 10%;
        position: relative;
        min-height: 500px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .bg-light { background-color: #f4f4f4; color: #333; }

    .badge-center {
        background: white;
        padding: 10px 40px;
        border: 1px solid #ddd;
        margin-bottom: 30px;
        font-weight: bold;
    }

    .content-box-full {
        width: 100%;
        height: 300px;
        border: 1px solid #333;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        text-align: center;
    }

    /* Produk Grid Layout */
    .product-wrapper {
        display: flex;
        gap: 40px;
        width: 100%;
        margin-top: 20px;
    }

    .product-image {
        flex: 1;
        height: 400px;
        border: 1px solid #333;
        position: relative;
        overflow: hidden;
    }

    .product-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .name-tag {
        background: white;
        padding: 20px;
        text-align: center;
        border: 1px solid #ddd;
        font-weight: 800;
    }

    .desc-box, .desc-box-large {
        border: 1px solid #333;
        padding: 20px;
        flex-grow: 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cta-btn {
        background: white;
        padding: 15px;
        text-align: center;
        border: 1px solid #333;
        text-decoration: none;
        color: black;
        font-weight: bold;
        transition: 0.3s;
    }

    .cta-btn:hover { background: #333; color: white; }

    .side-title {
        position: absolute;
        top: 20px;
        left: 20px;
        font-weight: bold;
        opacity: 0.5;
    }

    /* Footer */
    .main-footer {
        padding: 40px;
        text-align: center;
        background: white;
        border-top: 2px solid #333;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .product-wrapper { flex-direction: column; }
    }
</style>
