<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah');
            $table->text('deskripsi');
            $table->string('link_gambar');
            $table->text('link_street_view');
            $table->text('link_maps');
            $table->string('kepsek');
            $table->string('operator');
            $table->string('akreditasi');
            $table->string('kurikulum');
            $table->string('waktu');
            $table->string('npsn');
            $table->string('status');
            $table->string('bentuk_pendidikan');
            $table->string('status_kepemilikan');
            $table->string('sk_pendirian_sekolah');
            $table->string('tanggal_sk_pendirian');
            $table->string('sk_izin_operasional');
            $table->string('tanggal_sk_izin_operasional');
            $table->string('kebutuhan_khusus_dilayani');
            $table->string('nama_bank');
            $table->string('cabang_kcpunit');
            $table->string('rekening_atas_nama');
            $table->string('status_bos');
            $table->string('waktu_penyelenggaraan');
            $table->string('sertifikasi_iso');
            $table->string('sumber_listrik');
            $table->string('daya_listrik');
            $table->string('kecepatan_internet');
            $table->integer('l_guru');
            $table->integer('p_guru');
            $table->integer('l_tendik');
            $table->integer('p_tendik');
            $table->integer('l_pd');
            $table->integer('p_pd');
            $table->string('alamat');
            $table->string('rt_rw');
            $table->string('dusun');
            $table->string('desa_kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('provinsi');
            $table->string('kode_pos');
            $table->string('lintang');
            $table->string('bujur');
            $table->integer('jumlah_kepadatan_penduduk');
            $table->integer('ruang_kelas_24');
            $table->integer('ruang_kelas_25');
            $table->integer('ruang_perpustakaan_24');
            $table->integer('ruang_perpustakaan_25');
            $table->integer('ruang_laboratorium_24');
            $table->integer('ruang_laboratorium_25');
            $table->integer('ruang_praktik_24');
            $table->integer('ruang_praktik_25');
            $table->integer('ruang_pimpinan_24');
            $table->integer('ruang_pimpinan_25');
            $table->integer('ruang_guru_24');
            $table->integer('ruang_guru_25');
            $table->integer('ruang_ibadah_24');
            $table->integer('ruang_ibadah_25');
            $table->integer('ruang_uks_24');
            $table->integer('ruang_uks_25');
            $table->integer('ruang_toilet_24');
            $table->integer('ruang_toilet_25');
            $table->integer('ruang_gudang_24');
            $table->integer('ruang_gudang_25');
            $table->integer('ruang_sirkulasi_24');
            $table->integer('ruang_sirkulasi_25');
            $table->integer('ruang_olahraga_24');
            $table->integer('ruang_olahraga_25');
            $table->integer('ruang_tu_24');
            $table->integer('ruang_tu_25');
            $table->integer('ruang_konseling_24');
            $table->integer('ruang_konseling_25');
            $table->integer('ruang_osis_24');
            $table->integer('ruang_osis_25');
            $table->integer('ruang_bangunan_24');
            $table->integer('ruang_bangunan_25');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
