@extends('dashboard.admin.base-admin')



@section('content')

<div class="container mx-auto px-20 bg-white pt-10" data-aos="fade">

    @if (session('success'))
<div id="success-message" class="relative bg-green-500 text-white p-4 rounded-md mb-4" data-aos="fade">
{{ session('success') }}
</div>
@endif
<p class="font-extrabold text-2xl mb-5 text-center bg-yellow-500 p-4 text-primary rounded-lg shadow-xl" data-aos="fade-left">{{ $school->nama_sekolah }}</p>
<img src="{{ asset('images/' . $school->link_gambar) }}" alt="" class="w-full">

<p class="text-justify mt-5" data-aos="fade-up">{{ $school->deskripsi }}</p>

<div class="flex mt-10">
    <div class="flex flex-col items-center bg-primary p-8 rounded-md" data-aos="fade-right">
        <img src="{{ asset('images/school.png') }}" alt="" class="w-24 align-middle">
        <div class=" flex mt-3 w-full text-left">
            <svg class="w-6 h-6 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/></svg>
            <p class="font-semibold text-gray-300 ms-5">Kepala Sekolah : </p>
            <p class="font-semibold text-gray-300 ms-5">{{ $school->kepsek }}</p>
        </div>
        <div class=" flex mt-3 w-full text-left">
            <svg class="w-6 h-6 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M12 2a7 7 0 0 0-7 7 3 3 0 0 0-3 3v2a3 3 0 0 0 3 3h1a1 1 0 0 0 1-1V9a5 5 0 1 1 10 0v7.083A2.919 2.919 0 0 1 14.083 19H14a2 2 0 0 0-2-2h-1a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1a2 2 0 0 0 1.732-1h.351a4.917 4.917 0 0 0 4.83-4H19a3 3 0 0 0 3-3v-2a3 3 0 0 0-3-3 7 7 0 0 0-7-7Zm1.45 3.275a4 4 0 0 0-4.352.976 1 1 0 0 0 1.452 1.376 2.001 2.001 0 0 1 2.836-.067 1 1 0 1 0 1.386-1.442 4 4 0 0 0-1.321-.843Z" clip-rule="evenodd"/>
              </svg>  
            <p class="font-semibold text-gray-300 ms-5">Operator : </p>
            <p class="font-semibold text-gray-300 ms-5">{{ $school->operator }}</p>
        </div>
        <div class=" flex mt-3 w-full text-left">
            <svg class="w-6 h-6 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
              </svg>
              
            <p class="font-semibold text-gray-300 ms-5">Akreditasi : </p>
            <p class="font-semibold text-gray-300 ms-5">{{ $school->akreditasi }}</p>
        </div>
        <div class=" flex mt-3 w-full text-left">
            <svg class="w-6 h-6 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
              </svg>
              
            <p class="font-semibold text-gray-300 ms-5">Kurikulum : </p>
            <p class="font-semibold text-gray-300 ms-5">{{ $school->kurikulum }}</p>
        </div>
        <div class=" flex mt-3 w-full text-left">
            <svg class="w-6 h-6 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
              </svg>
              
            <p class="font-semibold text-gray-300 ms-5">Waktu : </p>
            <p class="font-semibold text-gray-300 ms-5">{{ $school->waktu }}</p>
        </div>

        
    </div>
    <div class="flex-1 mx-5" data-aos="fade-left">
        <h1 class="bg-primary p-3 text-white rounded-md font-bold ">Identitas Sekolah</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                </thead>
                <tbody>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            NPSN
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->npsn }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Status
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->status }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Bentuk Pendidikan
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->bentuk_pendidikan }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Status Kepemilikan
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->status_kepemilikan }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            SK Pendirian Sekolah
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->sk_pendirian_sekolah }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Tanggal SK Pendirian
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->tanggal_sk_pendirian }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            SK Izin Operasional
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->sk_izin_operasional }}
                        </td>
                    </tr>
                    <tr class="bg-white border-b  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Tanggal SK Izin Operasional
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->tanggal_sk_izin_operasional }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>            
    </div>
</div>

<div class="flex mt-10 space-x-3">
    <div class="flex-1" data-aos="fade-up">
        <h1 class="bg-primary p-3 text-white rounded-md font-bold ">Data Pelengkap</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                </thead>
                <tbody>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Kebutuhan Khusus Dilayani
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->kebutuhan_khusus_dilayani }}
                        </td>
                    </tr>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Nama Bank
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->nama_bank }}
                        </td>
                    </tr>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Cabang KCP/Unit
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->cabang_kcpunit }}
                        </td>
                    </tr>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Rekening Atas Nama
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->rekening_atas_nama }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="flex-1" data-aos="fade-up">
        <h1 class="bg-primary p-3 text-white rounded-md font-bold ">Data Rinci</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">

                </thead>
                <tbody>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Status Bos
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->status_bos }}
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Waktu Penyelenggaraan
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->waktu_penyelenggaraan }}
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Sertifikasi ISO
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->sertifikasi_iso }}
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Sumber Listrik
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->sumber_listrik }}
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Daya Listrik
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->daya_listrik }}
                        </td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="bg-white border  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            Kecepatan Internet
                        </th>
                        <td class="px-6 py-4">
                            : {{ $school->kecepatan_internet }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>  
    </div>
</div>

<h1 class="bg-primary p-3 text-white rounded-md font-bold mt-10"  data-aos="fade-right">Data PTK dan PD</h1>
<div class="relative overflow-x-auto mt-5" data-aos="fade-up">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Uraian
                </th>
                <th scope="col" class="px-6 py-3">
                    Guru
                </th>
                <th scope="col" class="px-6 py-3">
                    Tendik
                </th>
                <th scope="col" class="px-6 py-3">
                    PTK
                </th>
                <th scope="col" class="px-6 py-3">
                    TD
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Laki-laki
                </th>
                <td class="px-6 py-4">
                    {{ $school->l_guru }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->l_tendik }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->l_guru + $school->l_tendik }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->l_pd }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Perempuan
                </th>
                <td class="px-6 py-4">
                    {{ $school->p_guru }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->p_tendik }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->p_guru + $school->p_tendik }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->p_pd }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200 font-bold">
                <th scope="row" class="px-6 py-4 text-gray-900 whitespace-nowrap">
                    Total
                </th>
                <td class="px-6 py-4">
                    {{ $school->l_guru + $school->p_guru }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->l_tendik + $school->p_tendik }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->p_guru + $school->p_tendik + $school->l_guru + $school->l_tendik }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->l_pd + $school->p_pd }}
                </td>
            </tr>

        </tbody>
    </table>
    <h2 class="mb-2 font-semibold text-gray-900 ">Keterangan:</h2>
    <ul class="space-y-1 text-gray-500 list-disc list-inside ">
        <li>
            Data Rekap Per Tanggal 30 Januari 2025
        </li>
        <li>
            Penghitungan PTK adalah yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk
        </li>
        <li>
            Singkatan :
            <ol class="ms-10 list-decimal">
                <li>PTK = Guru ditambah Tendik</li>
                <li>PD = Peserta Didik</li>
            </ol>
        </li>
    </ul>
</div>

<h1 class="bg-primary p-3 text-white rounded-md font-bold mt-10" data-aos="fade-left">Sarana dan Prasana</h1>
<div class="relative overflow-x-auto mt-5" data-aos="fade-up">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Jenis Sarana dan Prasarana
                </th>
                <th scope="col" class="px-6 py-3">
                    Semester 2023/2024 Genap
                </th>
                <th scope="col" class="px-6 py-3">
                    Semester 2024/2025 Ganjil
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Kelas
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_kelas_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_kelas_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Perpustakaan
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_perpustakaan_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_perpustakaan_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Laboratorium
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_laboratorium_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_laboratorium_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Praktik
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_praktik_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_praktik_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Pimpinan
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_pimpinan_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_pimpinan_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Guru
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_guru_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_guru_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Ibadah
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_ibadah_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_ibadah_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang UKS
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_uks_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_uks_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Toilet
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_toilet_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_toilet_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Gudang
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_gudang_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_gudang_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Sirkulasi
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_sirkulasi_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_sirkulasi_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Tempat Bermain / Olahraga
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_olahraga_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_olahraga_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Tata Usaha
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_tu_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_tu_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Konseling
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_konseling_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_konseling_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Osis
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_osis_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_osis_25 }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Ruang Bangunan
                </th>
                <td class="px-6 py-4">
                    {{ $school->ruang_bangunan_24 }}
                </td>
                <td class="px-6 py-4">
                    {{ $school->ruang_bangunan_25 }}
                </td>
            </tr>

        </tbody>
    </table>
</div>

<h1 class="bg-primary p-3 text-white rounded-md font-bold mt-10" data-aos="fade-right">Kontak Utama</h1>
<div class="relative overflow-x-auto" data-aos="fade-up">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <tbody>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Alamat
                </th>
                <td class="px-6 py-4">
                    {{ $school->alamat }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    RT / RW
                </th>
                <td class="px-6 py-4">
                    {{ $school->rt_rw }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Dusun
                </th>
                <td class="px-6 py-4">
                    {{ $school->dusun }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Desa Kelurahan
                </th>
                <td class="px-6 py-4">
                    {{ $school->desa_kelurahan }}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Kecamatan
                </th>
                <td class="px-6 py-4">
                    {{ $school->kecamatan}}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Kabupaten
                </th>
                <td class="px-6 py-4">
                    {{ $school->kabupaten}}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Provinsi
                </th>
                <td class="px-6 py-4">
                    {{ $school->provinsi}}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Kode Pos
                </th>
                <td class="px-6 py-4">
                    {{ $school->kode_pos}}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Lintang
                </th>
                <td class="px-6 py-4">
                    {{ $school->lintang}}
                </td>
            </tr>
            <tr class="bg-white border-b border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    Bujur
                </th>
                <td class="px-6 py-4">
                    {{ $school->bujur}}
                </td>
            </tr>
        </tbody>
    </table>        
</div>


<h1 class="bg-primary p-3 text-white rounded-md font-bold mt-10" data-aos="fade-left">Lihat Lokasi</h1>
<div class="md:flex-1 mx-5" data-aos="fade-right">
    <div class="border-b border-gray-300">
        <button class="w-full flex justify-between items-center text-left py-4" onclick="toggleAccordion('accordion1', 'icon1')">
            <span class="font-semibold">Google Maps</span>
            <span id="icon1" class="text-2xl font-bold">+</span>
        </button>
        <div id="accordion1" class="accordion-content hidden" style="max-height: 0;">
            <iframe src="{{ $school->link_maps }}" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mb-5"></iframe>

        </div>
    </div>
    <div class="border-b border-gray-300">
        <button class="w-full flex justify-between items-center text-left py-4" onclick="toggleAccordion('accordion2', 'icon2')">
            <span class="font-semibold">Street View</span>
            <span id="icon2" class="text-2xl font-bold">+</span>
        </button>
        <div id="accordion2" class="accordion-content hidden" style="max-height: 0;">
            <iframe src="{{ $school->link_street_view }}" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mb-5"></iframe>

        </div>
    </div>
    
</div>







<div class="my-5 pb-5" data-aos="fade-left">
    @if ($comments->isNotEmpty())
    @foreach ($comments as $comment)
    <div class="flex items-start gap-2.5 my-4">  
        <div class="flex flex-col gap-1 w-full max-w-[320px]">
            <div class="flex items-center space-x-2">
                <span class="text-sm font-semibold text-gray-900">{{ $comment->name }}</span>
                <span class="text-sm text-gray-500">{{ $comment->date_post }} || {{ $comment->time_post }}</span>
            </div>
            <div class="p-4 bg-gray-500 rounded-md">
                <p class="text-sm text-white">{{ $comment->comments }}</p>
            </div>


        </div>
    </div>
@endforeach

    @else
        <h1 class="font-bold text-2xl">Daftar Komentar</h1>
        <p class="text-center italic text-gray-400 pb-5">Belum ada Komentar Saat ini</p>
    @endif
    
</div>



@endsection