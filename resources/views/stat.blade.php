<!-- resources/views/bc.blade.php -->
@extends('welcome')

@section('title', 'Statistik')

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
            <!-- Preview Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-4">Pratinjau Broadcast</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Broadcast</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Diskon Merdeka</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Template</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Template 1</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Kontak</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">Kontak Grup Pak Joko</p>
                    </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">Start</label>
                                <input type="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700"></label>
                                <input type="time" class="mt-6 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="grid grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700">End</label>
                                <input type="date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700"></label>
                                <input type="time" class="mt-6 block w-full border-gray-300 rounded-md shadow-sm">
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Isi Pesan</label>
                        <div class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">
                            <img src="{{ asset('images/bigsale.png') }}" alt="Pratinjau Gambar">
                            <p>Hallo Jennie
                                Bagaimana kabar Anda? 
                                Ada promo menarik spesial hanya untuk Anda!
                                
                                Anda dapat menikmati spesial discount 20% untuk periode transaksi bulan ini.
                                
                                Jangan lewatkan kesempatan ini atau promo akan hangus. Click button di bawah ini untuk informasi lebih lanjut 
                            </p>
                            <button class="mt-2 bg-blue-500 text-white py-1 px-2 rounded">CEK SEKARANG</button>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tombol Interaksi</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white"><input type="checkbox" checked disabled> Ada</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Alamat URL</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">www.wapi.com</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Tombol</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">CEK SEKARANG</p>
                    </div>
                </div>
            </div>
            <!-- Statistik Section -->
            <div class="bg-gray-100 p-6 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold mb-4">Statistik Broadcast</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Jumlah Kontak</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">200</p>
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium text-gray-700">Penerima</label>
                        <div class="flex items-center mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white relative">
                            <p>195</p>
                            <div class="ml-auto"> <a href="#" class="text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
  <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
</svg>
</a>
                          </div>
                        </div>
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium text-gray-700">Gagal</label>
                        <div class="flex items-center mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white relative">
                            <p>5 Kontak</p>
                            <div class="ml-auto"> <a href="#" class="text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
  <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
</svg></a>

                          </div>
                        </div>
                    </div>
                    <div class="relative">
                        <label class="block text-sm font-medium text-gray-700">Dibalas</label>
                        <div class="flex items-center mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white relative">
                            <p>0</p>
                            <div class="ml-auto"> <a href="#" class="text-blue-500"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10 12.5a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                <path fill-rule="evenodd" d="M.664 10.59a1.651 1.651 0 0 1 0-1.186A10.004 10.004 0 0 1 10 3c4.257 0 7.893 2.66 9.336 6.41.147.381.146.804 0 1.186A10.004 10.004 0 0 1 10 17c-4.257 0-7.893-2.66-9.336-6.41ZM14 10a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" clip-rule="evenodd" />
                              </svg>
                              </a>
                        </div>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Terkirim</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">98%</p>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Terbaca</label>
                        <p class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2 bg-white">100%</p>
                    </div>
                </div>
                <div class="flex justify-end space-x-4 mt-6">
                    <a href="{{ route('bc') }}">
                        <button class="bg-blue-600 text-white py-2 px-4 rounded">Kirim Ulang</button>
                    </a>
                    <a href="{{ route('draft') }}">
                        <button class="bg-gray-600 text-white py-2 px-4 rounded">Simpan Draft</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection