<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SIG SAK SOP</title>
    <link rel="icon" type="image/png" href="{{ asset('images/soppeng.png') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        function toggleAccordion(id, iconId) {
             const content = document.getElementById(id);
             const icon = document.getElementById(iconId);
 
             // Toggle hidden class
             content.classList.toggle('hidden');
 
             // Toggle max height for smooth transition
             if (content.classList.contains('hidden')) {
                 content.style.maxHeight = '0';
                 icon.innerHTML = '+';
             } else {
                 content.style.maxHeight = content.scrollHeight + 'px'; // Set max height to actual height
                 icon.innerHTML = '×';
             }
         }
     </script>

    <script>
       function toggleAccordion(id, iconId) {
            const content = document.getElementById(id);
            const icon = document.getElementById(iconId);

            // Toggle hidden class
            content.classList.toggle('hidden');

            // Toggle max height for smooth transition
            if (content.classList.contains('hidden')) {
                content.style.maxHeight = '0';
                icon.innerHTML = '+';
            } else {
                content.style.maxHeight = content.scrollHeight + 'px'; // Set max height to actual height
                icon.innerHTML = '×';
            }
        }
    </script>
    <style>
    .accordion-content {
        transition: max-height 0.3s ease;
        overflow: hidden;
    }
    </style>
</head>
<body class="bg-gray-100 font-poppins">

    

<nav class="fixed top-0 z-50 w-full bg-primary">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200=">
              <span class="sr-only">Open sidebar</span>
              <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="" class="flex ms-2 md:me-24">
            <img src="{{ asset('images/soppeng.png') }}" class="h-12 me-3" alt="FlowBite Logo" />
            <div class="flex flex-col">
                <span class=" text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">SIG SAK SOP</span>
                <span class="text-yellow-400"> SISTEM INFORMASI GEOGRAFIS SMA & SMK DI KABUPATEN SOPPENG</span>
            </div>
          </a>
        </div>
        <div class="flex items-center">
            <div class="hidden sm:flex  sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md bg-primary text-white hover:text-gray-400 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        {{-- <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link> --}}

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
          </div>
      </div>
    </div>
  </nav>

  <div class="flex">
    <div class="">
        <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-primary border-r border-gray-200 sm:translate-x-0" aria-label="Sidebar">
            <div class="h-full px-3 pb-4 overflow-y-auto bg-primary">
               <ul class="space-y-4 font-medium">
                   
                   <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 rounded-md {{ request()->routeIs('dashboard', 'daftarsekolah.show') ? 'text-white bg-gray-600' : ' text-white  hover:bg-gray-700 group' }}">
                        <svg class="w-5 h-5 {{ request()->routeIs('dashboard', 'daftarsekolah.show') ? 'text-white' : ' transition duration-75 text-gray-400 group-hover:text-white' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                            <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap {{ request()->routeIs('dashboard' , 'daftarsekolah.show') ? 'font-semibold' : 'text-gray-500 hover:text-gray-400' }}">
                            {{ __('Dashboard') }}
                        </span>
                    </a>
                   </li>
                   <li>
                    <a href="{{ route('daftarpengguna.index') }}" class="flex items-center p-2 rounded-md {{ request()->routeIs('daftarpengguna.index', 'daftarpengguna.create', 'daftarpengguna.edit') ? 'text-white bg-gray-600' : ' text-white  hover:bg-gray-700 group' }}">
                        <svg class="w-5 h-5 {{ request()->routeIs('adminuser.index', 'daftarpengguna.create', 'daftarpengguna.edit') ? 'text-white' : ' transition duration-75 text-gray-400 group-hover:text-white' }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                          </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap {{ request()->routeIs('daftarpengguna.index', 'daftarpengguna.create', 'daftarpengguna.edit') ? 'font-semibold' : 'text-gray-500 hover:text-gray-400' }}">
                            {{ __('Daftar Pengguna') }}
                        </span>
                    </a>
                   </li>
                   <li>
                    <a href="{{ route('daftarsekolah.index') }}" class="flex items-center p-2 rounded-md {{ request()->routeIs('daftarsekolah.index', 'daftarsekolah.create', 'daftarsekolah.edit') ? 'text-white bg-gray-600' : ' text-white  hover:bg-gray-700 group' }}">
                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z" clip-rule="evenodd"/>
                            <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z"/>
                          </svg>
                          
                        <span class="flex-1 ms-3 whitespace-nowrap {{ request()->routeIs('daftarsekolah.index', 'daftarsekolah.create', 'daftarsekolah.edit') ? 'font-semibold' : 'text-gray-500 hover:text-gray-400' }}">
                            {{ __('Daftar Sekolah') }}
                        </span>
                    </a>
                   </li>
       
               </ul>
            </div>
         </aside>
    </div>
    <div class="flex-1 justify-center">
        <div class="p-4">
            <div class="flex-1 p-6 ml-64 mt-16">
                @yield('content')
            </div>
          </div>
    </div>
  </div>
  

  


  
    <script>
        AOS.init({
            duration: 900,
            easing: 'ease-in-out',
            once: true,
        });
    </script>

</body>     
</html>