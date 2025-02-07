@extends('dashboard.admin.base-admin')


@section('content')
<h1 class="text-3xl font-bold">BUAT AKUN</h1>
@if ($errors->any())
<div class="bg-red-500 text-white p-4 rounded-md mb-4 mt-10" data-aos="fade">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('daftarpengguna.store') }}" method="POST">
    
    @csrf
    <div class=" grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="col-span-full mt-10">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Nama</label>
            <div class="mt-2">
            <input type="text" name="name" id="name" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required placeholder="Masukkan Nama">
            </div>
        </div>
        <div class="col-span-full">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Email</label>
            <div class="mt-2">
            <input type="email" name="email" id="email" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required placeholder="Masukkan Email">
            </div>
        </div>
        <div class="col-span-full">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Role</label>
            <div class="mt-2">
            <select name="role" id="role" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required>
                <option disabled selected>-- Pilih Role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            </div>
        </div>
        <div class="col-span-full">
            <label for="pertemuan" class="block text-sm/6 font-medium text-gray-900">Password</label>
            <div class="mt-2">
            <input type="password" name="password" id="password" autocomplete="topik-pertemuan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-md ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6" required placeholder="Masukkan Password">
            </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-lg">+ Buat Akun</button>
    </div>

</form>
@endsection