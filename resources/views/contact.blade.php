<!-- resources/views/bc.blade.php -->
@extends('components.layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Contact</h1>
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
        <div class="w-full mx-auto bg-white p-5 rounded-lg shadow-lg mt-6">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-2xl font-bold">List Contact</h2>
                <button class="bg-black text-white px-4 py-2 rounded-lg" onclick="toggleTamkon()">Tambah list
                    kontak</button>
            </div>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border-b-2 p-2">No</th>
                        <th class="border-b-2 p-2">Nama Kontak</th>
                        <th class="border-b-2 p-2">No Telefon</th>
                        <th class="border-b-2 p-2">Group Kontak</th>
                        <th class="border-b-2 p-2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Bp. Agus</td>
                        <td class="border-b p-2 text-center">0989102983918239</td>
                        <td class="border-b p-2 text-center">grup mancing</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="ToggleEdit()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Bp. Agus</td>
                        <td class="border-b p-2 text-center">0989102983918239</td>
                        <td class="border-b p-2 text-center">grup mancing</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="ToggleEdit()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Bp. Agus</td>
                        <td class="border-b p-2 text-center">0989102983918239</td>
                        <td class="border-b p-2 text-center">grup mancing</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="ToggleEdit()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Bp. Agus</td>
                        <td class="border-b p-2 text-center">0989102983918239</td>
                        <td class="border-b p-2 text-center">grup mancing</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="ToggleEdit()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-center mt-5">
                <nav aria-label="page navigation">
                    <ul class="inline-flex space-x-px">
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <span
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300">...</span>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">20</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>


        <div class="w-full mx-auto bg-white p-5 rounded-lg shadow-lg mt-6">
            <div class="flex justify-between items-center mb-5">
                <h2 class="text-2xl font-bold">List Grup</h2>
                <button class="bg-black text-white px-4 py-2 rounded-lg" onclick="toggleTamGroup()">Tambah
                    Group</button>
            </div>
            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border-b-2 p-2">No</th>
                        <th class="border-b-2 p-2">Nama Kontak</th>
                        <th class="border-b-2 p-2">Dibuat</th>
                        <th class="border-b-2 p-2">Jumlah Kontak</th>
                        <th class="border-b-2 p-2">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                        <td class="border-b p-2 text-center">26 mei 2024</td>
                        <td class="border-b p-2 text-center">50</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="toggleEditGroup()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                        <td class="border-b p-2 text-center">26 mei 2024</td>
                        <td class="border-b p-2 text-center">50</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="toggleEditGroup()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>

                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                        <td class="border-b p-2 text-center">26 mei 2024</td>
                        <td class="border-b p-2 text-center">50</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="toggleEditGroup()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">1</td>
                        <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                        <td class="border-b p-2 text-center">26 mei 2024</td>
                        <td class="border-b p-2 text-center">50</td>
                        <td class="border-b p-2 text-center">
                            <button class="text-green-600 hover:text-green-800" onclick="toggleEditGroup()">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z" />
                                    <path
                                        d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z" />
                                </svg>

                            </button>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="flex justify-center mt-5">
                <nav aria-label="page navigation">
                    <ul class="inline-flex space-x-px">
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <span
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300">...</span>
                        </li>
                        <li>
                            <a href="#"
                                class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">20</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>

        <!-- TamKon -->

        <div id="TamKon" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Tambah Kontak Baru</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Nama Kontak">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">No Handphone</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Nomer Handphone">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Email">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Nama Kontak">
                    </div>
                </div>

                <div class="mt-6 flex justify-between">
                    <button class="bg-green-600 text-white py-2 px-4 rounded">SIMPAN</button>
                    <button class="bg-green-600 text-white py-2 px-4 rounded" onclick="toggleTamkon()">Batal</button>
                </div>
            </div>
        </div>

        <!-- TamGrup -->

        <div id="TamGroup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Tambah Grup Baru</h3>
                <div class="justify-center grid-cols-2 gap-4">
                    <div class="flex justify-center">
                        <div class="w-full max-w-sm">
                            <label class="block text-sm font-medium text-gray-700 text-center">Nama Kontak</label>
                            <input type="text"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-center"
                                placeholder="Nama Kontak">
                        </div>
                    </div>
                </div>

                <div class="felx justify-between items-center mb-5">
                    <h2 class="font-bold text-center">PILIH KONTAK</h2>
                </div>

                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b-2 p-2">No</th>
                            <th class="border-b-2 p-2">Nama Kontak</th>
                            <th class="border-b-2 p-2">Dibuat</th>
                            <th class="border-b-2 p-2">Jumlah Kontak</th>
                            <th class="border-b-2 p-2">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">1</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">2</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">3</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">4</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-6 flex justify-between">
                    <button class="bg-green-600 text-white py-2 px-4 rounded">SIMPAN</button>
                    <button class="bg-green-600 text-white py-2 px-4 rounded" onclick="toggleTamGroup()">Batal</button>
                </div>
            </div>
        </div>

        <!-- Edit -->
        <div id="Edit" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Edit Kontak</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Nama Kontak">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">No Handphone</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Nomer Handphone">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Email">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            placeholder="Nama Kontak">
                    </div>
                </div>

                <div class="mt-6 flex justify-between">
                    <button class="bg-green-600 text-white py-2 px-4 rounded">SIMPAN</button>
                    <button class="bg-green-600 text-white py-2 px-4 rounded" onclick="ToggleEdit()">Batal</button>
                </div>
            </div>
        </div>


        <!-- EditGrup -->

        <div id="EditGroup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
                <h3 class="text-lg font-semibold mb-4 text-center">Edit Group</h3>
                <div class="justify-center grid-cols-2 gap-4">
                    <div class="flex justify-center">
                        <div class="w-full max-w-sm">
                            <label class="block text-sm font-medium text-gray-700 text-center">Nama Kontak</label>
                            <input type="text"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm text-center"
                                placeholder="Nama Kontak">
                        </div>
                    </div>
                </div>

                <div class="felx justify-between items-center mb-5">
                    <h2 class="font-bold text-center">PILIH KONTAK</h2>
                </div>

                <table class="w-full border-collapse">
                    <thead>
                        <tr>
                            <th class="border-b-2 p-2">No</th>
                            <th class="border-b-2 p-2">Nama Kontak</th>
                            <th class="border-b-2 p-2">Dibuat</th>
                            <th class="border-b-2 p-2">Jumlah Kontak</th>
                            <th class="border-b-2 p-2">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">1</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">2</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">3</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-gray-100">
                            <td class="border-b p-2 text-center">4</td>
                            <td class="border-b p-2 text-center">Kontak Grup Kelas wir</td>
                            <td class="border-b p-2 text-center">26 mei 2024</td>
                            <td class="border-b p-2 text-center">50</td>
                            <td class="border-b p-2 text-center">
                                <button class="text-blue-500 hover:text-blue-700 mx-2">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700 mx-2">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="mt-6 flex justify-between">
                    <button class="bg-green-600 text-white py-2 px-4 rounded">SIMPAN</button>
                    <button class="bg-green-600 text-white py-2 px-4 rounded" onclick="toggleEditGroup()">Batal</button>
                </div>
            </div>
        </div>

        <script>
            function toggleTamkon() {
                document.getElementById('TamKon').classList.toggle('hidden');
            }            
        </script>

        <script>
            function toggleTamGroup() {
                document.getElementById('TamGroup').classList.toggle('hidden');
            }            
        </script>

        <script>
            function ToggleEdit() {
                document.getElementById('Edit').classList.toggle('hidden');
            }            
        </script>

        <script>
            function toggleEditGroup() {
                document.getElementById('EditGroup').classList.toggle('hidden');
            }            
        </script>


    </div>
@endsection