<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            // Jika ingin dihubungkan dengan akun user yang sedang login, aktifkan baris di bawah ini:
            // $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('nama_usaha');
            $table->string('nama_pemilik');
            $table->string('jenis_usaha');
            $table->text('alamat_usaha');
            $table->string('rt_rw', 20);
            $table->string('dusun');

            // Kolom untuk menyimpan path/lokasi file yang di-upload
          $table->string('ktp_path')->nullable()->change();
        $table->string('sku_path')->nullable()->change();

            // Status persetujuan (Biar admin BUMDes bisa meninjau dulu sebelum aktif)
            $table->enum('status', ['pending', 'aktif', 'nonaktif'])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mitras');
    }
};
