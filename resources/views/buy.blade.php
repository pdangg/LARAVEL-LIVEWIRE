<!-- resources/views/bc.blade.php -->
@extends('welcome')

@section('title', 'Pembelian')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Pembelian</h1>
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
         <!-- Main Content Area -->
    <main class="flex-1 p-8">
        <div class="max-w-lg mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="bg-green-600 p-6">
                <h2 class="text-center text-xl text-white font-semibold">PAKET BASIC</h2>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-bold text-gray-700 mb-4">Terima kasih!!!</h3>
                <p class="text-gray-700 mb-2">Anda telah memilih paket BASIC senilai Rp. 63.000,00</p>
                <p class="text-gray-700 mb-4">Jika Anda memiliki Kode Diskon, masukkan kode tersebut di bawah ini lalu klik "Gunakan".</p>
                <div class="mb-4">
                    <input type="text" placeholder="Masukkan kode voucher" class="border rounded p-2 w-full" />
                    <button class="bg-black text-white p-2 rounded mt-2 ml-2">Add</button>
                </div>
                <p class="text-gray-700 mb-4">Klik "Lanjutkan" untuk mengonfirmasi pesanan Anda.</p>
                <div class="flex justify-between">
                    <a href="{{ route('package') }}">
                        <button class="bg-gray-300 text-gray-700 p-2 rounded">&lt;&lt; Back</button>
                    </a>
                    <a href="{{ route('confirm') }}">
                        <button class="bg-green-600 text-white p-2 rounded">Lanjutkan &gt;&gt;</button>
                    </a>
                </div>
            </div>
        </div>
    </main>

            </div>
@endsection