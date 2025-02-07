<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminDaftarSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('search');

        // Menggunakan paginate pada query untuk mendapatkan pengguna dengan role 'user' dan filter berdasarkan pencarian
        $schools = School::query()
                    ->when($search, function ($query) use ($search) {
                        return $query->where('nama_sekolah', 'like', "%{$search}%")
                                     ->orWhere('npsn', 'like', "%{$search}%");
                    })
                    ->paginate(5);
    
        return view('dashboard.admin.daftarsekolah-admin', compact('schools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $listakreditasi = ['A (Unggul)', 'B (Baik)', 'C (Cukup Baik)', 'TT (Tidak Terakreditasi)'];
        $status = ['Negeri'];
        $bentukpendidikan = ['Sekolah Menengah Atas (SMA)', 'Sekolah Menengah Kejuruan (SMK)'];
        $statuskepemilikan = ['Pemerintah Daerah', 'Pemerintah Pusat'];
        $desakelurahan = [
            'Desa Abbanuange', 'Desa Barae', 'Desa Barang', 'Desa Baringeng', 'Desa Belo', 'Desa BuluE',
            'Desa Citta', 'Desa Congko', 'Desa Donri Donri', 'Desa Enrekeng', 'Desa Ganra', 'Desa Gattarang',
            'Desa Gattarang Toa', 'Desa Goarie', 'Desa Jampu', 'Desa Kaca', 'Desa Kampiri', 'Desa Kebo',
            'Desa Kessing', 'Desa Labatae', 'Desa Labokong', 'Desa Lalabata Rilau', 'Desa Lalabatairaja',
            'Desa Laringgi', 'Desa Lompulle', 'Desa Macanre', 'Desa Maccile', 'Desa Marioriaja', 'Desa Mariorilau',
            'Desa Mariorittengnga', 'Desa Masing', 'Desa Mattabulu', 'Desa Ompo', 'Desa Panincong',
            'Desa Palangiseng', 'Desa Parening', 'Desa Paroto', 'Desa Patampanua', 'Desa Pattojo',
            'Desa Pesse', 'Desa Pising', 'Desa Rompegading', 'Desa Salokaraja', 'Desa Sering', 'Desa Soga',
            'Desa Tellulimpoe', 'Desa Tetewatu', 'Desa Timusu', 'Desa Tinco', 'Desa Tottong', 'Desa Umpungen',
            'Desa Watu', 'Desa Watu Toa',
            'Kelurahan Appanang', 'Kelurahan Attang Salo', 'Kelurahan Batu-Batu', 'Kelurahan Bila',
            'Kelurahan Botto', 'Kelurahan Cabenge', 'Kelurahan Galung', 'Kelurahan Jennae', 'Kelurahan Labessi',
            'Kelurahan Lajapang', 'Kelurahan Lalabata Rilau', 'Kelurahan Lemba', 'Kelurahan Limpomajang',
            'Kelurahan Macanre', 'Kelurahan Pajalesang', 'Kelurahan Salokaraja', 'Kelurahan Tettikenrarae', 'Kelurahan Ujung'
        ];
        $kecamatan = [
            'Kecamatan Citta',
            'Kecamatan Donri-donri',
            'Kecamatan Ganra',
            'Kecamatan Lalabata',
            'Kecamatan Liliriaja',
            'Kecamatan Lilirilau',
            'Kecamatan Marioriawa',
            'Kecamatan Marioriawo',
        ];
        $kabupaten = [
            'Kabupaten Soppeng',
        ];
        $provinsi = [
            'Provinsi Sulawesi Selatan',
        ];
        return view('dashboard.admin.buat-daftarsekolah', compact('listakreditasi', 'status', 'bentukpendidikan', 'statuskepemilikan', 'desakelurahan', 'kecamatan', 'kabupaten', 'provinsi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kepsek' => 'required|string',
            'operator' => 'required|string',
            'akreditasi' => 'required|string',
            'kurikulum' => 'required|string',
            'waktu' => 'required|string',
            'npsn' => 'required|string',
            'status' => 'required|string',
            'bentuk_pendidikan' => 'required|string',
            'status_kepemilikan' => 'required|string',
            'sk_pendirian_sekolah' => 'required|string',
            'tanggal_sk_pendirian' => 'required|string',
            'sk_izin_operasional' => 'required|string',
            'tanggal_sk_izin_operasional' => 'required|string',
            'kebutuhan_khusus_dilayani' => 'required|string',
            'nama_bank' => 'required|string',
            'cabang_kcpunit' => 'required|string',
            'rekening_atas_nama' => 'required|string',
            'status_bos' => 'required|string',
            'waktu_penyelenggaraan' => 'required|string',
            'sertifikasi_iso' => 'required|string',
            'sumber_listrik' => 'required|string',
            'daya_listrik' => 'required|string',
            'kecepatan_internet' => 'required|string',
            'l_guru' => 'required|integer',
            'p_guru' => 'required|integer',
            'l_tendik' => 'required|integer',
            'p_tendik' => 'required|integer',
            'l_pd' => 'required|integer',
            'p_pd' => 'required|integer',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string',
            'dusun' => 'required|string',
            'desa_kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string',
            'lintang' => 'required|string',
            'bujur' => 'required|string',
            'jumlah_kepadatan_penduduk' => 'required|integer',
            'link_street_view' => 'required|url|max:1000',
            'link_maps' => 'required|url|max:1000',
            'link_gambar' => 'nullable|max:10240',
            'ruang_kelas_24'  => 'required|integer',
            'ruang_perpustakaan_24'  => 'required|integer',
            'ruang_laboratorium_24'  => 'required|integer',
            'ruang_praktik_24'  => 'required|integer',
            'ruang_pimpinan_24'  => 'required|integer',
            'ruang_guru_24' => 'required|integer',
            'ruang_ibadah_24' => 'required|integer',
            'ruang_uks_24' => 'required|integer',
            'ruang_toilet_24' => 'required|integer',
            'ruang_gudang_24' => 'required|integer',
            'ruang_sirkulasi_24' => 'required|integer',
            'ruang_olahraga_24' => 'required|integer',
            'ruang_tu_24' => 'required|integer',
            'ruang_konseling_24' => 'required|integer',
            'ruang_osis_24' => 'required|integer',
            'ruang_bangunan_24' => 'required|integer',
            'ruang_kelas_25' => 'required|integer',
            'ruang_perpustakaan_25' => 'required|integer',
            'ruang_laboratorium_25' => 'required|integer',
            'ruang_praktik_25' => 'required|integer',
            'ruang_pimpinan_25' => 'required|integer',
            'ruang_guru_25' => 'required|integer',
            'ruang_ibadah_25' => 'required|integer',
            'ruang_uks_25' => 'required|integer',
            'ruang_toilet_25' => 'required|integer',
            'ruang_gudang_25' => 'required|integer',
            'ruang_sirkulasi_25' => 'required|integer',
            'ruang_olahraga_25' => 'required|integer',
            'ruang_tu_25' => 'required|integer',
            'ruang_konseling_25' => 'required|integer',
            'ruang_osis_25' => 'required|integer',
            'ruang_bangunan_25' => 'required|integer',
        ]);
    

    
        // $filePath = null;
        // if ($request->hasFile('link_gambar')) {
        //     $fileName = time() . '-' . $request->file('link_gambar')->getClientOriginalName();
        //     $filePath = 'uploads/gambarsekolah/' . $fileName;
        //     $request->file('link_gambar')->move(public_path('uploads/gambarsekolah'), $fileName);
        // }
        
        // dd($filePath);
        School::create([
            'nama_sekolah' => $request->input('nama_sekolah'),
            'deskripsi' => $request->input('deskripsi'),
            'kepsek' => $request->input('kepsek'),
            'operator' => $request->input('operator'),
            'akreditasi' => $request->input('akreditasi'),
            'kurikulum' => $request->input('kurikulum'),
            'waktu' => $request->input('waktu'),
            'npsn' => $request->input('npsn'),
            'status' => $request->input('status'),
            'bentuk_pendidikan' => $request->input('bentuk_pendidikan'),
            'status_kepemilikan' => $request->input('status_kepemilikan'),
            'sk_pendirian_sekolah' => $request->input('sk_pendirian_sekolah'),
            'tanggal_sk_pendirian' => $request->input('tanggal_sk_pendirian'),
            'sk_izin_operasional' => $request->input('sk_izin_operasional'),
            'tanggal_sk_izin_operasional' => $request->input('tanggal_sk_izin_operasional'),
            'kebutuhan_khusus_dilayani' => $request->input('kebutuhan_khusus_dilayani'),
            'nama_bank' => $request->input('nama_bank'),
            'cabang_kcpunit' => $request->input('cabang_kcpunit'),
            'rekening_atas_nama' => $request->input('rekening_atas_nama'),
            'status_bos' => $request->input('status_bos'),
            'waktu_penyelenggaraan' => $request->input('waktu_penyelenggaraan'),
            'sertifikasi_iso' => $request->input('sertifikasi_iso'),
            'sumber_listrik' => $request->input('sumber_listrik'),
            'daya_listrik' => $request->input('daya_listrik'),
            'kecepatan_internet' => $request->input('kecepatan_internet'),
            'l_guru' => $request->input('l_guru'),
            'p_guru' => $request->input('p_guru'),
            'l_tendik' => $request->input('l_tendik'),
            'p_tendik' => $request->input('p_tendik'),
            'l_pd' => $request->input('l_pd'),
            'p_pd' => $request->input('p_pd'),
            'alamat' => $request->input('alamat'),
            'rt_rw' => $request->input('rt_rw'),
            'dusun' => $request->input('dusun'),
            'desa_kelurahan' => $request->input('desa_kelurahan'),
            'kecamatan' => $request->input('kecamatan'),
            'kabupaten' => $request->input('kabupaten'),
            'provinsi' => $request->input('provinsi'),
            'kode_pos' => $request->input('kode_pos'),
            'lintang' => $request->input('lintang'),
            'bujur' => $request->input('bujur'),
            'link_street_view' => $request->input('link_street_view'),
            'link_maps' => $request->input('link_maps'),
            'link_gambar' => $request->input('link_gambar'),
            'jumlah_kepadatan_penduduk' => $request->input('jumlah_kepadatan_penduduk'),
            'ruang_kelas_24' => $request->input('ruang_kelas_24'),
            'ruang_perpustakaan_24' => $request->input('ruang_perpustakaan_24'),
            'ruang_laboratorium_24' => $request->input('ruang_laboratorium_24'),
            'ruang_praktik_24' => $request->input('ruang_praktik_24'),
            'ruang_pimpinan_24' => $request->input('ruang_pimpinan_24'),
            'ruang_guru_24' => $request->input('ruang_guru_24'),
            'ruang_ibadah_24' => $request->input('ruang_ibadah_24'),
            'ruang_uks_24' => $request->input('ruang_uks_24'),
            'ruang_toilet_24' => $request->input('ruang_toilet_24'),
            'ruang_gudang_24' => $request->input('ruang_gudang_24'),
            'ruang_sirkulasi_24' => $request->input('ruang_sirkulasi_24'),
            'ruang_olahraga_24' => $request->input('ruang_olahraga_24'),
            'ruang_tu_24' => $request->input('ruang_tu_24'),
            'ruang_konseling_24' => $request->input('ruang_konseling_24'),
            'ruang_osis_24' => $request->input('ruang_osis_24'),
            'ruang_bangunan_24' => $request->input('ruang_bangunan_24'),
            'ruang_kelas_25' => $request->input('ruang_kelas_25'),
            'ruang_perpustakaan_25' => $request->input('ruang_perpustakaan_25'),
            'ruang_laboratorium_25' => $request->input('ruang_laboratorium_25'),
            'ruang_praktik_25' => $request->input('ruang_praktik_25'),
            'ruang_pimpinan_25' => $request->input('ruang_pimpinan_25'),
            'ruang_guru_25' => $request->input('ruang_guru_25'),
            'ruang_ibadah_25' => $request->input('ruang_ibadah_25'),
            'ruang_uks_25' => $request->input('ruang_uks_25'),
            'ruang_toilet_25' => $request->input('ruang_toilet_25'),
            'ruang_gudang_25' => $request->input('ruang_gudang_25'),
            'ruang_sirkulasi_25' => $request->input('ruang_sirkulasi_25'),
            'ruang_olahraga_25' => $request->input('ruang_olahraga_25'),
            'ruang_tu_25' => $request->input('ruang_tu_25'),
            'ruang_konseling_25' => $request->input('ruang_konseling_25'),
            'ruang_osis_25' => $request->input('ruang_osis_25'),
            'ruang_bangunan_25' => $request->input('ruang_bangunan_25'),

            
        ]);
    
        return redirect()->route('daftarsekolah.index')->with('success', 'Data Sekolah telah berhasil ditambahkan.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $school = School::findorfail($id);
        $comments = Comment::where('school_id', $school->id)
        ->join('users', 'comments.user_id', 'users.id')
        ->select('users.id as users_id', 'users.name', 'comments.*')
        ->get();
        return view('dashboard.admin.detail-admindatasekolah', compact('school', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $school = School::findOrFail($id);
        $listakreditasi = ['A (Unggul)', 'B (Baik)', 'C (Cukup Baik)', 'TT (Tidak Terakreditasi)'];
        $status = ['Negeri'];
        $bentukpendidikan = ['Sekolah Menengah Atas (SMA)', 'Sekolah Menengah Kejuruan (SMK)'];
        $statuskepemilikan = ['Pemerintah Daerah', 'Pemerintah Pusat'];
        $desakelurahan = [
            'Desa Abbanuange', 'Desa Barae', 'Desa Barang', 'Desa Baringeng', 'Desa Belo', 'Desa BuluE',
            'Desa Citta', 'Desa Congko', 'Desa Donri Donri', 'Desa Enrekeng', 'Desa Ganra', 'Desa Gattarang',
            'Desa Gattarang Toa', 'Desa Goarie', 'Desa Jampu', 'Desa Kaca', 'Desa Kampiri', 'Desa Kebo',
            'Desa Kessing', 'Desa Labatae', 'Desa Labokong', 'Desa Lalabata Rilau', 'Desa Lalabatairaja',
            'Desa Laringgi', 'Desa Lompulle', 'Desa Macanre', 'Desa Maccile', 'Desa Marioriaja', 'Desa Mariorilau',
            'Desa Mariorittengnga', 'Desa Masing', 'Desa Mattabulu', 'Desa Ompo', 'Desa Panincong',
            'Desa Palangiseng', 'Desa Parening', 'Desa Paroto', 'Desa Patampanua', 'Desa Pattojo',
            'Desa Pesse', 'Desa Pising', 'Desa Rompegading', 'Desa Salokaraja', 'Desa Sering', 'Desa Soga',
            'Desa Tellulimpoe', 'Desa Tetewatu', 'Desa Timusu', 'Desa Tinco', 'Desa Tottong', 'Desa Umpungen',
            'Desa Watu', 'Desa Watu Toa',
            'Kelurahan Appanang', 'Kelurahan Attang Salo', 'Kelurahan Batu-Batu', 'Kelurahan Bila',
            'Kelurahan Botto', 'Kelurahan Cabenge', 'Kelurahan Galung', 'Kelurahan Jennae', 'Kelurahan Labessi',
            'Kelurahan Lajapang', 'Kelurahan Lalabata Rilau', 'Kelurahan Lemba', 'Kelurahan Limpomajang',
            'Kelurahan Macanre', 'Kelurahan Pajalesang', 'Kelurahan Salokaraja', 'Kelurahan Tettikenrarae', 'Kelurahan Ujung'
        ];
        $kecamatan = [
            'Kecamatan Citta',
            'Kecamatan Donri-donri',
            'Kecamatan Ganra',
            'Kecamatan Lalabata',
            'Kecamatan Liliriaja',
            'Kecamatan Lilirilau',
            'Kecamatan Marioriawa',
            'Kecamatan Marioriawo',
        ];
        $kabupaten = [
            'Kabupaten Soppeng',
        ];
        $provinsi = [
            'Provinsi Sulawesi Selatan',
        ];
        return view('dashboard.admin.edit-daftarsekolah', compact('school','listakreditasi', 'status', 'bentukpendidikan', 'statuskepemilikan', 'desakelurahan', 'kecamatan', 'kabupaten', 'provinsi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'kepsek' => 'required|string',
            'operator' => 'required|string',
            'akreditasi' => 'required|string',
            'kurikulum' => 'required|string',
            'waktu' => 'required|string',
            'npsn' => 'required|string',
            'status' => 'required|string',
            'bentuk_pendidikan' => 'required|string',
            'status_kepemilikan' => 'required|string',
            'sk_pendirian_sekolah' => 'required|string',
            'tanggal_sk_pendirian' => 'required|string',
            'sk_izin_operasional' => 'required|string',
            'tanggal_sk_izin_operasional' => 'required|string',
            'kebutuhan_khusus_dilayani' => 'required|string',
            'nama_bank' => 'required|string',
            'cabang_kcpunit' => 'required|string',
            'rekening_atas_nama' => 'required|string',
            'status_bos' => 'required|string',
            'waktu_penyelenggaraan' => 'required|string',
            'sertifikasi_iso' => 'required|string',
            'sumber_listrik' => 'required|string',
            'daya_listrik' => 'required|string',
            'kecepatan_internet' => 'required|string',
            'l_guru' => 'required|integer',
            'p_guru' => 'required|integer',
            'l_tendik' => 'required|integer',
            'p_tendik' => 'required|integer',
            'l_pd' => 'required|integer',
            'p_pd' => 'required|integer',
            'alamat' => 'required|string',
            'rt_rw' => 'required|string',
            'dusun' => 'required|string',
            'desa_kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string',
            'lintang' => 'required|string',
            'bujur' => 'required|string',
            'jumlah_kepadatan_penduduk' => 'required|integer',
            'link_street_view' => 'required|url|max:1000',
            'link_maps' => 'required|url|max:1000',
            'link_gambar' => 'nullable|max:10240',
            'ruang_kelas_24'  => 'required|integer',
            'ruang_perpustakaan_24'  => 'required|integer',
            'ruang_laboratorium_24'  => 'required|integer',
            'ruang_praktik_24'  => 'required|integer',
            'ruang_pimpinan_24'  => 'required|integer',
            'ruang_guru_24' => 'required|integer',
            'ruang_ibadah_24' => 'required|integer',
            'ruang_uks_24' => 'required|integer',
            'ruang_toilet_24' => 'required|integer',
            'ruang_gudang_24' => 'required|integer',
            'ruang_sirkulasi_24' => 'required|integer',
            'ruang_olahraga_24' => 'required|integer',
            'ruang_tu_24' => 'required|integer',
            'ruang_konseling_24' => 'required|integer',
            'ruang_osis_24' => 'required|integer',
            'ruang_bangunan_24' => 'required|integer',
            'ruang_kelas_25' => 'required|integer',
            'ruang_perpustakaan_25' => 'required|integer',
            'ruang_laboratorium_25' => 'required|integer',
            'ruang_praktik_25' => 'required|integer',
            'ruang_pimpinan_25' => 'required|integer',
            'ruang_guru_25' => 'required|integer',
            'ruang_ibadah_25' => 'required|integer',
            'ruang_uks_25' => 'required|integer',
            'ruang_toilet_25' => 'required|integer',
            'ruang_gudang_25' => 'required|integer',
            'ruang_sirkulasi_25' => 'required|integer',
            'ruang_olahraga_25' => 'required|integer',
            'ruang_tu_25' => 'required|integer',
            'ruang_konseling_25' => 'required|integer',
            'ruang_osis_25' => 'required|integer',
            'ruang_bangunan_25' => 'required|integer',
        ]);

        $school = School::findOrFail($id);
        $school->update($request->only('nama_sekolah',
        'deskripsi',
        'link_gambar',
        'link_street_view',
        'link_maps',
        'kepsek',
        'operator',
        'akreditasi',
        'kurikulum',
        'waktu',
        'npsn',
        'status',
        'bentuk_pendidikan',
        'status_kepemilikan',
        'sk_pendirian_sekolah',
        'tanggal_sk_pendirian',
        'sk_izin_operasional',
        'tanggal_sk_izin_operasional',
        'kebutuhan_khusus_dilayani',
        'nama_bank',
        'cabang_kcpunit',
        'rekening_atas_nama',
        'status_bos',
        'waktu_penyelenggaraan',
        'sertifikasi_iso',
        'sumber_listrik',
        'daya_listrik',
        'kecepatan_internet',
        'l_guru',
        'p_guru',
        'l_tendik',
        'p_tendik',
        'l_pd',
        'p_pd',
        'alamat',
        'rt_rw',
        'dusun',
        'desa_kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'kode_pos',
        'lintang',
        'bujur',
        'jumlah_kepadatan_penduduk',
        'ruang_kelas_24',
        'ruang_perpustakaan_24',
        'ruang_laboratorium_24',
        'ruang_praktik_24',
        'ruang_pimpinan_24',
        'ruang_guru_24',
        'ruang_ibadah_24',
        'ruang_uks_24',
        'ruang_toilet_24',
        'ruang_gudang_24',
        'ruang_sirkulasi_24',
        'ruang_olahraga_24',
        'ruang_tu_24',
        'ruang_konseling_24',
        'ruang_osis_24',
        'ruang_bangunan_24',
        'ruang_kelas_25',
        'ruang_perpustakaan_25',
        'ruang_laboratorium_25',
        'ruang_praktik_25',
        'ruang_pimpinan_25',
        'ruang_guru_25',
        'ruang_ibadah_25',
        'ruang_uks_25',
        'ruang_toilet_25',
        'ruang_gudang_25',
        'ruang_sirkulasi_25',
        'ruang_olahraga_25',
        'ruang_tu_25',
        'ruang_konseling_25',
        'ruang_osis_25',
        'ruang_bangunan_25',));

        return redirect()->route('daftarsekolah.index')->with('success', 'Data Sekolah telah berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $school = School::findOrFail($id);
        $school->delete();    
        return redirect()->route('daftarsekolah.index')->with('success', 'Data Sekolah telah berhasil dihapus');
    }
}
