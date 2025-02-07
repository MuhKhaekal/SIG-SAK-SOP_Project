@extends('dashboard.admin.base-admin')



@section('content')
<h1 class="text-3xl font-bold">Edit Data Sekolah</h1>
@if ($errors->any())
<div class="bg-red-500 text-white p-4 rounded-md mb-4 mt-10" data-aos="fade">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
]
    </ul>
</div>
@endif
<form action="{{ route('daftarsekolah.update', ['daftarsekolah'=>$school->id]) }}" method="POST">
    
    @csrf
    @method('PUT')
    <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="col-span-full mt-10">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Nama Sekolah</label>
            <div class="mt-2">
            <input type="text" name="nama_sekolah" id="nama_sekolah" value="{{ $school->nama_sekolah }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Deskripsi</label>
            <div class="mt-2">
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">{{ $school->deskripsi }}</textarea>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Kepala Sekolah</label>
            <div class="mt-2">
            <input type="text" name="kepsek" id="kepsek" value="{{ $school->kepsek }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Operator</label>
            <div class="mt-2">
            <input type="text" name="operator" id="operator" value="{{ $school->operator }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Akreditasi</label>
            <div class="mt-2">
                <select name="akreditasi" id="akreditasi" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    <option selected disabled>Pilih Akreditasi</option>
                    @foreach ($listakreditasi as $akreditasi)
                    <option value="{{ $akreditasi }}" {{ $school->akreditasi == $akreditasi ? 'selected' : '' }}>
                        {{ $akreditasi }}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>  
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Kurikulum</label>
            <div class="mt-2">
            <input type="text" name="kurikulum" id="kurikulum" value="{{ $school->kurikulum }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Waktu</label>
            <div class="mt-2">
            <input type="text" name="waktu" id="waktu" value="{{ $school->waktu }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>

        <h1 class="bg-primary p-3 text-white rounded-md mt-14 font-bold">Identitas Sekolah</h1>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">NPSN</label>
                <div class="mt-2">
                <input type="text" name="npsn" id="npsn" value="{{ $school->npsn }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Status</label>
                <div class="mt-2">
                    <select name="status" id="status" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <option selected disabled>-- Pilih Status</option>
                        @foreach ($status as $item)
                        <option value="{{ $item }}" {{ $school->status == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Bentuk Pendidikan</label>
                <div class="mt-2">
                    <select name="bentuk_pendidikan" id="bentuk_pendidikan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <option selected disabled>-- Pilih Bentuk Pendidikan</option>
                        @foreach ($bentukpendidikan as $item)
                        <option value="{{ $item }}" {{ $school->bentuk_pendidikan == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Status Kepemilikan</label>
                <div class="mt-2">
                    <select name="status_kepemilikan" id="status_kepemilikan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <option selected disabled>-- Pilih Status Kepemilikan</option>
                        @foreach ($statuskepemilikan as $item)
                        <option value="{{ $item }}" {{ $school->status_kepemilikan == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">SK Pendirian Sekolah</label>
                <div class="mt-2">
                <input type="text" name="sk_pendirian_sekolah" id="sk_pendirian_sekolah" value="{{ $school->sk_pendirian_sekolah }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Tanggal SK Pendirian</label>
                <div class="mt-2">
                <input type="text" name="tanggal_sk_pendirian" id="tanggal_sk_pendirian" value="{{ $school->tanggal_sk_pendirian }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">SK Izin Operasional</label>
                <div class="mt-2">
                <input type="text" name="sk_izin_operasional" id="sk_izin_operasional" value="{{ $school->sk_izin_operasional }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Tanggal SK Izin Operasional</label>
                <div class="mt-2">
                <input type="text" name="tanggal_sk_izin_operasional" id="tanggal_sk_izin_operasional" value="{{ $school->tanggal_sk_izin_operasional }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>

        <h1 class="bg-primary p-3 text-white rounded-md mt-14 font-bold">Data Pelengkap</h1>

        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Kebutuhan Khusus Dilayani</label>
            <div class="mt-2">
            <input type="text" name="kebutuhan_khusus_dilayani" id="kebutuhan_khusus_dilayani"  value="{{ $school->kebutuhan_khusus_dilayani }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Nama Bank</label>
            <div class="mt-2">
            <input type="text" name="nama_bank" id="nama_bank" value="{{ $school->nama_bank }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Cabang KCP/Unit</label>
            <div class="mt-2">
            <input type="text" name="cabang_kcpunit" id="cabang_kcpunit" value="{{ $school->cabang_kcpunit }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Rekening Atas Nama</label>
            <div class="mt-2">
            <input type="text" name="rekening_atas_nama" id="rekening_atas_nama" value="{{ $school->rekening_atas_nama }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>

        <h1 class="bg-primary p-3 text-white rounded-md mt-14 font-bold">Data Rinci</h1>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Status BOS</label>
                <div class="mt-2">
                <input type="text" name="status_bos" id="status_bos" value="{{ $school->status_bos }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Waktu Penyelenggaraan</label>
                <div class="mt-2">
                <input type="text" name="waktu_penyelenggaraan" id="waktu_penyelenggaraan" value="{{ $school->waktu_penyelenggaraan }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>

        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Sertifikat ISO</label>
                <div class="mt-2">
                <input type="text" name="sertifikasi_iso" id="sertifikasi_iso" value="{{ $school->sertifikasi_iso }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Sumber Listrik</label>
                <div class="mt-2">
                <input type="text" name="sumber_listrik" id="sumber_listrik" value="{{ $school->sumber_listrik }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Daya Listrik</label>
                <div class="mt-2">
                <input type="text" name="daya_listrik" id="daya_listrik"  value="{{ $school->daya_listrik }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Kecepatan Internet</label>
                <div class="mt-2">
                <input type="text" name="kecepatan_internet" id="kecepatan_internet" value="{{ $school->kecepatan_internet }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>



        <h1 class="bg-primary p-3 text-white rounded-md mt-14 font-bold">Data PTK dan PD</h1>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Guru <span class="font-bold">(Laki-laki)</span></label>
                <div class="mt-2">
                <input type="number" name="l_guru" id="l_guru" value="{{ $school->l_guru }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Guru <span class="font-bold">(Perempuan)</span></label>
                <div class="mt-2">
                <input type="number" name="p_guru" id="p_guru" value="{{ $school->p_guru }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Tenaga Pendidik <span class="font-bold">(Laki-laki)</span></label>
                <div class="mt-2">
                <input type="number" name="l_tendik" id="l_tendik" value="{{ $school->l_tendik }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Tenaga Pendidik <span class="font-bold">(Perempuan)</span></label>
                <div class="mt-2">
                <input type="number" name="p_tendik" id="p_tendik" value="{{ $school->p_tendik }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Peserta Didik <span class="font-bold">(Laki-laki)</span></label>
                <div class="mt-2">
                <input type="number" name="l_pd" id="l_pd" value="{{ $school->l_pd }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Peserta Didik <span class="font-bold">(Perempuan)</span></label>
                <div class="mt-2">
                <input type="number" name="p_pd" id="p_pd" value="{{ $school->p_pd }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>




        <h1 class="bg-primary p-3 text-white rounded-md mt-14 font-bold">Data Sarana dan Prasarana</h1>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <h1 class="text-primary rounded-md font-bold mb-2 text-lg">SEMESTER 2023/2024 GENAP</h1>
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Kelas</label>
                <div class="mt-2">
                <input type="number" name="ruang_kelas_24" id="ruang_kelas_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_kelas_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <h1 class="text-primary rounded-md font-bold mb-2 text-lg">SEMESTER 2024/2025 GANJIL</h1>
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Kelas</label>
                <div class="mt-2">
                <input type="number" name="ruang_kelas_25" id="ruang_kelas_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_kelas_25 }}" >
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Perpustakaan</label>
                <div class="mt-2">
                <input type="number" name="ruang_perpustakaan_24" id="ruang_perpustakaan_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_perpustakaan_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Perpustakaan</label>
                <div class="mt-2">
                <input type="number" name="ruang_perpustakaan_25" id="ruang_perpustakaan_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_perpustakaan_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Laboratorium</label>
                <div class="mt-2">
                <input type="number" name="ruang_laboratorium_24" id="ruang_laboratorium_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_laboratorium_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Laboratorium</label>
                <div class="mt-2">
                <input type="number" name="ruang_laboratorium_25" id="ruang_laboratorium_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_laboratorium_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Praktik</label>
                <div class="mt-2">
                <input type="number" name="ruang_praktik_24" id="ruang_praktik_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_praktik_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Praktik</label>
                <div class="mt-2">
                <input type="number" name="ruang_praktik_25" id="ruang_praktik_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_praktik_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Pimpinan</label>
                <div class="mt-2">
                <input type="number" name="ruang_pimpinan_24" id="ruang_pimpinan_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_pimpinan_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Pimpinan</label>
                <div class="mt-2">
                <input type="number" name="ruang_pimpinan_25" id="ruang_pimpinan_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_pimpinan_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Guru</label>
                <div class="mt-2">
                <input type="number" name="ruang_guru_24" id="ruang_guru_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_guru_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Guru</label>
                <div class="mt-2">
                <input type="number" name="ruang_guru_25" id="ruang_guru_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_guru_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Ibadah</label>
                <div class="mt-2">
                <input type="number" name="ruang_ibadah_24" id="ruang_ibadah_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_ibadah_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Ibadah</label>
                <div class="mt-2">
                <input type="number" name="ruang_ibadah_25" id="ruang_ibadah_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_ibadah_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang UKS</label>
                <div class="mt-2">
                <input type="number" name="ruang_uks_24" id="ruang_uks_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_uks_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang UKS</label>
                <div class="mt-2">
                <input type="number" name="ruang_uks_25" id="ruang_uks_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_uks_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Toilet</label>
                <div class="mt-2">
                <input type="number" name="ruang_toilet_24" id="ruang_toilet_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_toilet_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Toilet</label>
                <div class="mt-2">
                <input type="number" name="ruang_toilet_25" id="ruang_toilet_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_toilet_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Gudang</label>
                <div class="mt-2">
                <input type="number" name="ruang_gudang_24" id="ruang_gudang_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_gudang_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Gudang</label>
                <div class="mt-2">
                <input type="number" name="ruang_gudang_25" id="ruang_gudang_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_gudang_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Sirkulasi</label>
                <div class="mt-2">
                <input type="number" name="ruang_sirkulasi_24" id="ruang_sirkulasi_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_sirkulasi_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Sirkulasi</label>
                <div class="mt-2">
                <input type="number" name="ruang_sirkulasi_25" id="ruang_sirkulasi_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_sirkulasi_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Bermain / Olahraga</label>
                <div class="mt-2">
                <input type="number" name="ruang_olahraga_24" id="ruang_olahraga_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_olahraga_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Bermain / Olahraga</label>
                <div class="mt-2">
                <input type="number" name="ruang_olahraga_25" id="ruang_olahraga_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_olahraga_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Tata Usaha</label>
                <div class="mt-2">
                <input type="number" name="ruang_tu_24" id="ruang_tu_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_tu_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Tata Usaha</label>
                <div class="mt-2">
                <input type="number" name="ruang_tu_25" id="ruang_tu_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_tu_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Konseling</label>
                <div class="mt-2">
                <input type="number" name="ruang_konseling_24" id="ruang_konseling_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_konseling_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Konseling</label>
                <div class="mt-2">
                <input type="number" name="ruang_konseling_25" id="ruang_konseling_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_konseling_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang OSIS</label>
                <div class="mt-2">
                <input type="number" name="ruang_osis_24" id="ruang_osis_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_osis_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang OSIS</label>
                <div class="mt-2">
                <input type="number" name="ruang_osis_25" id="ruang_osis_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_osis_25 }}">
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Bangunan</label>
                <div class="mt-2">
                <input type="number" name="ruang_bangunan_24" id="ruang_bangunan_24" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_bangunan_24 }}">
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Ruang Bangunan</label>
                <div class="mt-2">
                <input type="number" name="ruang_bangunan_25" id="ruang_bangunan_25" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" min="0" required placeholder=0 value="{{ $school->ruang_bangunan_25 }}">
                </div>
            </div>
        </div>

        <h1 class="bg-primary p-3 text-white rounded-md mt-14 font-bold">Kontak Utama</h1>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Alamat</label>
                <div class="mt-2">
                <input type="text" name="alamat" id="alamat" value="{{ $school->alamat }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">RT/RW</label>
                <div class="mt-2">
                <input type="text" name="rt_rw" id="rt_rw" value="{{ $school->rt_rw }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Dusun</label>
                <div class="mt-2">
                <input type="text" name="dusun" id="dusun" value="{{ $school->dusun }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Desa/Kelurahan</label>
                <div class="mt-2">
                    <select name="desa_kelurahan" id="desa_kelurahan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <option selected disabled>-- Pilih Desa Kelurahan</option>
                        @foreach ($desakelurahan as $item)
                        <option value="{{ $item }}" {{ $school->desa_kelurahan == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Kecamatan</label>
                <div class="mt-2">
                    <select name="kecamatan" id="kecamatan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <option selected disabled>-- Pilih Kecamatan</option>
                        @foreach ($kecamatan as $item)
                        <option value="{{ $item }}" {{ $school->kecamatan == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Kabupaten</label>
                <div class="mt-2">
                    <select name="kabupaten" id="kabupaten" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <option selected disabled>-- Pilih Kabupaten</option>
                        @foreach ($kabupaten as $item)
                        <option value="{{ $item }}" {{ $school->kabupaten == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Provinsi</label>
                <div class="mt-2">
                    <select name="provinsi" id="provinsi" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                        <option selected disabled>-- Pilih Provinsi</option>
                        @foreach ($provinsi as $item)
                        <option value="{{ $item }}" {{ $school->provinsi == $item ? 'selected' : '' }}>
                            {{ $item }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Kode Pos</label>
                <div class="mt-2">
                <input type="text" name="kode_pos" id="kode_pos" value="{{ $school->kode_pos }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Lintang</label>
                <div class="mt-2">
                <input type="text" name="lintang" id="lintang" value="{{ $school->lintang }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Bujur</label>
                <div class="mt-2">
                <input type="text" name="bujur" id="bujur" value="{{ $school->bujur }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
        </div>
        <div class="flex space-x-5">
            <div class="w-full mt-5">
                <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Jumlah Kepadatan Penduduk (Jiwa)</label>
                <div class="mt-2">
                <input type="text" name="jumlah_kepadatan_penduduk" id="jumlah_kepadatan_penduduk" value="{{ $school->jumlah_kepadatan_penduduk }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                </div>
            </div>
            <div class="w-full">
                
            </div>
        </div>


        <h1 class="bg-primary p-3 text-white rounded-md mt-14 font-bold">Peta Geografis</h1>

        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Link <span class="font-bold">Google Earth</span></label>
            <div class="mt-2">
            <input type="text" name="link_street_view" id="link_street_view" value="{{ $school->link_street_view }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Link <span class="font-bold">Google Maps</span></label>
            <div class="mt-2">
            <input type="text" name="link_maps" id="link_maps" value="{{ $school->link_maps }}" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
            </div>
        </div>
        <div class="col-span-full mt-5">
            <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">File Gambar</label>
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
              <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                  <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                </svg>
                <div class="mt-4 flex text-sm/6 text-gray-600">
                  <label for="link_gambar" class="relative cursor-pointer rounded-md font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500 ">
                    <span>Upload a file</span>
                    <input id="link_gambar" name="link_gambar" type="file" class="sr-only" accept=".jpg" required>
                  </label>
                  <p class="pl-1 ms-1">or drag and drop</p>
                </div>
                <p class="text-xs/5 text-gray-600">PDF up to 10MB</p>
                <p id="fileLinkContainer" class="mt-3 text-sm underline text-blue-600"></p>
                <p class="errorContainer text-red-600"></p>
              </div>
            </div>
        </div>
        <div class="mt-5">
            <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-lg">Edit Data</button>
        </div>
    </div>

</form>

<script>
    function openModal() {
        document.getElementById('confirmationModal').classList.remove('hidden');
    }
  
    function closeModal() {
        document.getElementById('confirmationModal').classList.add('hidden');
    }
  
    document.getElementById('link_gambar').addEventListener('change', function(event) {
      const fileInput = event.target;
      const file = fileInput.files[0];
      const fileLinkContainer = document.getElementById('fileLinkContainer');
      const existingErrorMessage = document.querySelector('.text-red-500'); // Cari pesan error yang ada
  
      // Hapus pesan error sebelumnya jika ada
      if (existingErrorMessage) {
          existingErrorMessage.remove();
      }
  
      // Hapus link file yang sudah ada
      fileLinkContainer.innerHTML = '';
  
      if (file) {
          // Validasi tipe file
          const validTypes = ['pdf', 'doc', 'docx', 'png', 'jpg', 'jpeg'];
          const fileType = file.name.split('.').pop().toLowerCase();
  
          // Validasi ukuran file (maksimal 10MB)
          const maxSize = 10 * 1024 * 1024; // 10MB
          const fileSize = file.size;
  
          // Jika file tidak sesuai tipe atau ukuran
          if (!validTypes.includes(fileType)) {
              // Tampilkan pesan error jika tipe file tidak valid
              const errorMessage = document.createElement('div');
              errorMessage.classList.add('text-red-500', 'mt-2');
              errorMessage.textContent = 'Tipe file tidak valid. Hanya file PDF, DOC, DOCX, PNG, JPG, JPEG yang diperbolehkan.';
              fileInput.insertAdjacentElement('afterend', errorMessage);
              return;
          }
  
          if (fileSize > maxSize) {
              // Tampilkan pesan error jika ukuran file lebih besar dari 10MB
              const errorMessage = document.createElement('div');
              errorMessage.classList.add('text-red-500', 'mt-2');
              errorMessage.textContent = 'Ukuran file terlalu besar. Maksimal 10MB.';
              fileInput.insertAdjacentElement('afterend', errorMessage);
              return;
          }
  
          // Buat tag <a> untuk menampilkan nama file jika valid
          const link = document.createElement('a');
          link.href = URL.createObjectURL(file); // Buat URL dari file yang diunggah
          link.textContent = file.name;
          link.target = '_blank';
  
          // Tampilkan tautan file
          fileLinkContainer.appendChild(link);
      }
  });
  
  
  </script>
@endsection