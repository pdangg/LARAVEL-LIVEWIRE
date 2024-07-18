<!-- resources/views/bc.blade.php -->
@extends('components.layouts.app')

@section('title', 'Notification')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Notification</h1>
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
        <div class="w-full mx-auto bg-white p-5 rounded shadow-lg mt-6">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-2xl font-bold">Notification</h2>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-4">
                <div class="p-4 cursor-pointer" onclick="toggleNotification('notif1')">
                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-green-600">Kredit anda akan segera habis</h2>
                        <span id="arrow-notif1" class="transform transition-transform">▼</span>
                    </div>
                    <p class="text-gray-500 text-sm">24 Juni 24 12.00</p>
                </div>
                <div id="notif1" class="hidden p-4 border-t border-gray-200">
                    <p>Kredit Anda tersisa Rp. 500, pada 24 Juni 2024 segera isi ulang kredit Anda supaya bisa melakukan
                        broadcast message ke pelanggan</p>
                    <a href="#" class="text-blue-500 hover:underline">Isi ulang kredit</a>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-4">
                <div class="p-4 cursor-pointer" onclick="toggleNotification('notif2')">
                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-green-600">Broadcast Sukses</h2>
                        <span id="arrow-notif2" class="transform transition-transform">▼</span>
                    </div>
                    <p class="text-gray-500 text-sm">24 April 24 · 12.00</p>
                </div>
                <div id="notif2" class="hidden p-4 border-t border-gray-200">
                    <p>Broadcast Sukses</p>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="p-4 cursor-pointer" onclick="toggleNotification('notif3')">
                    <div class="flex justify-between items-center">
                        <h2 class="font-bold text-green-600">Broadcast Sukses</h2>
                        <span id="arrow-notif3" class="transform transition-transform">▼</span>
                    </div>
                    <p class="text-gray-500 text-sm">24 April 24 · 12.00</p>
                </div>

                <div id="notif3" class="hidden p-4 border-t border-gray-200">
                    <p>Broadcast Sukses</p>
                </div>

            </div>




            <script>
                function toggleNotification(id) {
                    const Notification = document.getElementById(id);
                    const arrow = document.getElementById('arrow-' + id);

                    if (Notification.classList.contains('hidden')) {
                        Notification.classList.remove('hidden');
                        arrow.classList.add('rotate-180');
                    } else {
                        Notification.classList.add('hidden');
                        arrow.classList.remove('rotate-180');
                    }
                }
            </script>
@endsection