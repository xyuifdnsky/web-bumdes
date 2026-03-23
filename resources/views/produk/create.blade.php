<x-app-layout>
    <div class="page-heading">
        <h1>Input Produk/Jasa</h1>
        <p>Tambahkan produk baru ke marketplace</p>
    </div>

    <div class="input-produk-card animate-in">
        <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="section-title"><i class="fas fa-box" style="margin-right:8px"></i>Informasi Produk</div>

            <div class="form-group">
                <label class="form-label">Nama Produk <span style="color:var(--accent2)">*</span></label>
                <input type="text" name="nama" id="prod-nama" class="form-control" placeholder="Nama produk/jasa" required>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Kategori <span style="color:var(--accent2)">*</span></label>
                    <select name="kategori" id="prod-kategori" class="form-control" required>
                        <option value="">-- Pilih --</option>
                        <option>Kuliner</option>
                        <option>Kerajinan</option>
                        <option>Pertanian</option>
                        <option>Jasa</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Mitra</label>
                    <select name="mitra_id" class="form-control">
                        <option>Warung Bu Sari</option>
                        <option>Kerajinan Pak Hadi</option>
                        <option>Kebun Segar Desa</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group">
                    <label class="form-label">Harga (Rp) <span style="color:var(--accent2)">*</span></label>
                    <input type="number" name="harga" id="prod-harga" class="form-control" placeholder="15000" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" id="prod-stok" class="form-control" placeholder="50">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="prod-desc" class="form-control" rows="4" placeholder="Jelaskan produk/jasa kamu..."></textarea>
            </div>

            <div class="section-title" style="margin-top:16px"><i class="fas fa-image" style="margin-right:8px"></i>Foto Produk</div>

            <div class="upload-area" onclick="document.getElementById('file-upload').click()" style="margin-bottom:20px">
                <i class="fas fa-cloud-upload-alt"></i>
                <p>Klik untuk upload foto produk</p>
                <small>Maks. 5MB — JPG / PNG / WEBP</small>
                <input type="file" name="foto" id="file-upload" style="display:none;" accept="image/*">
            </div>

            <div style="display:flex; gap:12px">
                <button type="submit" class="btn btn-primary" style="flex:1"><i class="fas fa-save"></i> Simpan Produk</button>
                <button type="reset" class="btn btn-outline"><i class="fas fa-redo"></i> Reset</button>
            </div>
        </form>
    </div>
</x-app-layout>
