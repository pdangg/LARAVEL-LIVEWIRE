<!-- resources/views/bc.blade.php -->
@extends('components.layouts.app')

@section('title', 'Package')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Package</h1>
            <div class="flex items-center">
                <div class="mr-6">
                    <span class="bg-green-200 text-green-800 py-1 px-3 rounded-full">1000 credit</span>
                </div>
                <div class="relative">
                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0018 14.158V11a6.002 6.002 0 00-5-5.917V5a2 2 0 10-4 0v.083A6.002 6.002 0 004 11v3.159c0 .538-.214 1.055-.595 1.436L2 17h5m8 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span class="absolute top-0 right-0 bg-red-600 text-white rounded-full px-1 text-xs">2</span>
                </div>
                <div class="ml-6">
                    <img src="{{ asset('images/about.jpg') }}" alt="Profile" class="w-10 h-10 rounded-full">
                    <span class="ml-2">Mr. Paijo</span>
                </div>
            </div>
        </header>
       <!-- Package Section -->
    <section class="mt-8">
        <h2 class="text-xl font-bold mb-4">Package</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded shadow relative">
                <span class="absolute top-2 right-2 bg-green-500 text-white py-1 px-3 rounded-full text-xs">HOT PROMO</span>
                <h3 class="text-lg font-bold mb-2">5000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 30 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 4.500,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-6 rounded shadow relative">
                <span class="absolute top-2 right-2 bg-green-500 text-white py-1 px-3 rounded-full text-xs">HOT PROMO</span>
                <h3 class="text-lg font-bold mb-2">10000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 45 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 9.500,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-6 rounded shadow relative">
                <span class="absolute top-2 right-2 bg-green-500 text-white py-1 px-3 rounded-full text-xs">HOT PROMO</span>
                <h3 class="text-lg font-bold mb-2">15000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 60 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 14.500,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 4 -->
            <div class="bg-white p-6 rounded shadow relative">
                <span class="absolute top-2 right-2 bg-green-500 text-white py-1 px-3 rounded-full text-xs">HOT PROMO</span>
                <h3 class="text-lg font-bold mb-2">20000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 60 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 19.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 5 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">7000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 30 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 7.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 6 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">8000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 30 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 8.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 7 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">9000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 45 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 9.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 8 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">11000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 60 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 11.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 9 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">25000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 30 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 25.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 10 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">30000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 45 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 30.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 11 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">40000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 60 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 40.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
            <!-- Card 12 -->
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-2">50000 credit</h3>
                <p class="text-sm text-gray-600 mb-2">Berlaku 60 hari</p>
                <p class="text-xl font-bold mb-4">Rp. 50.000,00</p>
                <a href="{{ route('buy') }}" class="block text-center bg-green-500 text-white py-2 rounded">Beli</a>
            </div>
        </div>
    </section>
</div>
@endsection