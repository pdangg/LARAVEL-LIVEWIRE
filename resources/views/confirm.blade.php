<!-- resources/views/bc.blade.php -->
@extends('welcome')

@section('title', 'Confirm')

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
        <div class="flex flex-col items-center flex-1 p-6">
            <div class="bg-white p-6 rounded shadow w-full max-w-3xl">
                <h2 class="text-2xl font-bold mb-4 text-center">Pembayaran Via Transfer Bank</h2>
                <p class="text-center">Anda memilih paket <strong>BASIC</strong>. Silahkan transfer sejumlah <strong>Rp. 63.000,00</strong> ditambah angka unik (<strong>68</strong>), yaitu sebesar:</p>
                <p class="text-green-600 text-4xl font-bold my-4 text-center">Rp. 63.068,00</p>
                <p class="text-center">Menuju ke rekening berikut:</p>
                <div class="flex justify-center my-4">
                    <img src="{{ asset('images/bank.png') }}" alt="Bank">
                </div>
                <p class="text-center">Bank Mandiri, Cabang Indonesia, Nomor Rekening 123123123123, nama pemilik rekening PT. Maju Jaya</p>
                <p class="mt-4 text-center">Sesudah transfer, isilah formulir konfirmasi pembayaran di bawah. proses pembelian akan segera kami proses sesudah Anda mengisi formulir ini</p>
               
                <h3 class="text-xl font-bold mt-8 mb-4 text-center">Konfirmasi Pembayaran</h3>
                <form class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Tanggal Transfer</label>
                            <input type="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" value="2024-11-06" readonly>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nominal</label>
                            <input type="number" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nama Akun</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div>
                            <p class="block text-sm font-medium text-gray-700">Ditransfer dari rekening :</p>
                            <label class="block text-sm font-medium text-gray-700">Nama Bank</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nama Pemilik Rekening</label>
                            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Menuju ke Rekening</label>
                            <select class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                                <option>Bank Mandiri</option>
                                <option>Bank BCA</option>
                                <option>BRI</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-6 text-center">
                        <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded">Konfirmasi Pembayaran</button>
                    </div>
                </form>
                



            </div>
        </div>

        </div>
@endsection