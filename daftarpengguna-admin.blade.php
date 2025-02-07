@extends('dashboard.admin.base-admin')

@section('title', 'SAINS - List User')

@section('content')
<h1 class="text-3xl font-bold bg-yellow-400 w-fit px-5 py-2  rounded-md shadow-md text-primary">DAFTAR PENGGUNA</h1>

@if (session('success'))
<div id="success-message" class="relative bg-green-500 text-white p-4 rounded-md mb-4 mt-10" data-aos="fade">
    {{ session('success') }}
</div>
@endif

<!-- Form Pencarian -->
<form method="GET" action="" class="mb-4 mt-5 flex">
    <input type="text" name="search" placeholder="Cari pengguna..." class="border rounded p-2 w-full" value="{{ request()->get('search') }}">
    <button type="submit" class="bg-blue-500 text-white rounded p-2 mx-2">Cari</button>
</form>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Role</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                        <a href="" class="hover:underline">{{ $user->name }}</a>
                    </t>
                    <td class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">{{ $user->role }}</td>
                    <td class="px-6 py-4 flex">
                        <a href="" class="font-medium text-blue-600 hover:underline mx-2">Edit</a>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="submit" class="font-medium text-red-600 hover:underline mx-2">Hapus</button>
                        </form>
                    </td>
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $users->links() }}
</div>

<a href="{{ route('daftarpengguna.create') }}" class="bg-blue-500 text-white px-3 py-2 rounded-md mt-5">
    + Buat Akun
</a>


@endsection