@extends('layouts.guest')

@section('content')
<div class="bg-primary p-12 rounded-md border border-solid border-secondary text-white outline-none ring-2 ring-blue-500 focus:ring-offset-2 shadow-lg">
    <div class="flex items-center justify-center space-x-5">
        <div class="">
            <img src="{{ asset('images/soppeng.png') }}" alt="" class="w-16">
        </div>
        <div class="">
            <h1 class=" text-4xl font-extrabold">LOGIN</h1>
            <p class="text-center  text-md">SIG SAK SOP APP</p>        
        </div>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- NIM -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('EMAIL')" class="text-white" />
            <x-text-input id="email" class="block mt-1 w-full text-primary" type="text" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="text-gray-400 mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" class="text-white mt-5"/>
            <x-text-input id="password" class="text-primary block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="text-gray-400 mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm ">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="">
            <div class="">
                
            </div>
        </div>
        <!-- Submit and Forgot Password -->
        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-gray-500 focus:outline-none hover:underline focus-visible:ring-[#FF2D20]">Register</a>
            <x-primary-button class="ms-3">
                {{ __('MASUK') }}
            </x-primary-button>
            
        </div>
    </form>
</div>

@endsection