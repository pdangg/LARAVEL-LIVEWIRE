<!-- resources/views/bc.blade.php -->
@extends('components.layouts.app')

@section('title', 'Broadcast')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Broadcast</h1>
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
        <!-- Main Content -->
<div class="flex flex-col mt-8">
    <!-- Broadcast Menu Section -->
    <div class="bg-white p-6 rounded shadow-lg w-full max-w-7xl mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center">Broadcast Menu</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Form Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-4">Formulir Broadcast</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Broadcast</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan Nama Broadcast">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Template</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>Template A</option>
                            <option>Template B</option>
                            <option>Template C</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kontak</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>Bapak A</option>
                            <option>Bapak B</option>
                            <option>Bapak C</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jadwal</label>
                        <input type="datetime-local" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gambar</label>
                        <input type="file" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Isi Pesan</label>
                        <textarea class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" rows="4" placeholder="Masukkan Isi Pesan"></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tombol Interaksi</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>Ada</option>
                            <option>Tidak</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Alamat URL</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Masukkan Alamat URL">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tombol</label>
                        <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>Tombol A</option>
                            <option>Tombol B</option>
                            <option>Tombol C</option>
                        </select>
                    </div>
                </div>
                <a href="bc_list.html">
                    <button class="mt-6 bg-green-600 text-white py-2 px-4 rounded">Kirim Broadcast</button>
                </a>
            </div>
            <!-- Preview Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-4">Pratinjau Broadcast</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Broadcast</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Nama Broadcast yang diisi</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Template</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Template yang dipilih</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kontak</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Kontak yang dipilih</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jadwal</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Tanggal dan waktu yang dipilih</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Gambar</label>
                        <div class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">
                            <img src="https://via.placeholder.com/150" alt="Pratinjau Gambar">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Isi Pesan</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Isi pesan yang diisi</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tombol Interaksi</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Pilihan Tombol Interaksi</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Alamat URL</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Alamat URL yang diisi</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tombol</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Tombol yang dipilih</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
         </div>
@endsection
