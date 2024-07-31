<!-- resources/views/bc.blade.php -->
@extends('welcome')

@section('title', 'Settings')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Settings</h1>
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
        <!-- Form -->
        <div class="bg-white p-6 rounded shadow">
            <form class="grid grid-cols-2 gap-6">
                <!-- Left Column -->
                <div>
                    <div class="mb-4 flex items-center">
                        <img src="https://via.placeholder.com/100" alt="Foto Profil"
                            class="w-24 h-24 rounded-full mr-4">
                        <button type="button" class="bg-blue-500 text-white py-2 px-4 rounded">Pilih Foto</button>
                    </div>
                    <div class="mb-4">
                        <label for="nama" class="block text-gray-700">Nama*</label>
                        <input type="text" id="nama" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email*</label>
                        <input type="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password*</label>
                        <input type="password" id="password"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="password-confirm" class="block text-gray-700">Konfirmasi Password*</label>
                        <input type="password" id="password-confirm"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="whatsapp" class="block text-gray-700">No. Handphone/Whatsapp*</label>
                        <input type="tel" id="whatsapp" pattern="[0-9]{11,15}"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="facebook" class="block text-gray-700">Akun Facebook</label>
                        <input type="text" id="facebook" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="instagram" class="block text-gray-700">Akun Instagram</label>
                        <input type="text" id="instagram"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                </div>

                <!-- Right Column -->
                <div>
                    <div class="mb-4">
                        <label for="nama-perusahaan" class="block text-gray-700">Nama Perusahaan*</label>
                        <input type="text" id="nama-perusahaan"
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div class="mb-4">
                        <label for="alamat" class="block text-gray-700">Alamat*</label>
                        <textarea id="alamat" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>
                    <div class="mb-4">
                        <label for="provinsi" class="block text-gray-700">Provinsi*</label>
                        <select id="provinsi" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>Pilih Provinsi</option>
                            <!-- Add options for all provinces in Indonesia -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="kota" class="block text-gray-700">Kota*</label>
                        <select id="kota" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option>Pilih Kota</option>
                            <!-- Add options for cities based on selected province -->
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Status Penggunaan</label>
                        <input type="text" value="Trial" disabled
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Expired Date</label>
                        <input type="text" value="21 Juli 2024" disabled
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100">
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700">Register Date</label>
                        <input type="text" value="6 Juni 2024" disabled
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm bg-gray-100">
                    </div>
                </div>

                <!-- Save Button -->
                <div class="col-span-2 text-right">
                    <button type="submit" class="bg-green-500 text-white py-2 px-4 rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

@endsection