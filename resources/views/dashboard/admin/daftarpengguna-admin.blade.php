@extends('dashboard.admin.base-admin')



@section('content')
<h1 class="text-3xl font-bold bg-yellow-400 w-fit px-5 py-2  rounded-md shadow-md text-primary" data-aos="fade-down">DAFTAR PENGGUNA</h1>

@if (session('success'))
<div id="success-message" class="relative bg-green-500 text-white p-4 rounded-md mb-4 mt-10" data-aos="fade">
    {{ session('success') }}
</div>
@endif

<!-- Form Pencarian -->
<form method="GET" action="" class="mb-4 mt-5 flex" data-aos="fade-left">
    <input type="text" name="search" placeholder="Cari pengguna..." class="border rounded p-2 w-full" value="{{ request()->get('search') }}">
    <button type="submit" class="bg-blue-500 text-white rounded p-2 mx-2">Cari</button>
</form>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg" data-aos="fade-right">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs uppercase bg-primary  text-gray-400">
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
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                              </svg>
                            <a href="{{ route('daftarpengguna.edit', ['daftarpengguna'=>$user->id]) }}" class="font-medium text-blue-600 hover:underline me-4" class="flex items-center">Edit</a>
                        </div>
                        <form action="{{ route('daftarpengguna.destroy', ['daftarpengguna'=>$user->id]) }}" method="POST" class="flex items-center">
                            @csrf
                            @method('DELETE')
                            <svg class="w-6 h-6 text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                              </svg>
                               
                            <button onclick="submit" class="font-medium text-red-600 hover:underline">Hapus</button>
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

<div class="mt-10" data-aos="fade">
    <a href="{{ route('daftarpengguna.create') }}" class="bg-blue-500 text-white px-3 py-2 rounded-md mt-5 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-lg">+ Tambah Pengguna</a>
</div>



@endsection