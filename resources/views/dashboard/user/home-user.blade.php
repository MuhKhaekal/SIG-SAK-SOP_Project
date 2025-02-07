<x-app-layout>
    
    <div class="container mx-auto px-40">
        <div class="relative min-h-96 bg-contain bg-center flex items-center justify-center" style="background-image: url({{ asset('images/home.png')}}); background-repeat: no-repeat" data-aos="fade-right">      
        </div>
    
        <form method="GET" action="{{ route('dashboard') }}" class="mb-4  flex">
            <input type="text" name="search" placeholder="Cari sekolah..." class="border rounded p-2 w-full" value="{{ request()->get('search') }}">
            <button type="submit" class="bg-blue-500 text-white rounded p-2 mx-2">Cari</button>
        </form>

        @foreach ($schoolssearchs as $school)
            
    
        <div class="bg-white p-4 rounded-md shadow-lg my-5">
            <a href="{{ route('sekolah.show', ['sekolah' => $school->id]) }}" class="font-extrabold text-xl hover:underline hover:text-primary">{{ $school->nama_sekolah }}</a>
            <div class="flex mt-4 items-center">
                <div class="">
                    <img src="{{ asset('images/'. $school->link_gambar) }}" alt="" class="w-20">
                </div>
                <div class="ms-5 text-gray-400">
                    <p>NPSN : {{ $school->npsn }}</p>
                    <p>Akreditasi : {{ $school->akreditasi }}</p>
                    <p>Alamat : {{ $school->alamat}}</p>
                </div>
            </div>
        </div>
    
        @endforeach
    </div>


</x-app-layout>


