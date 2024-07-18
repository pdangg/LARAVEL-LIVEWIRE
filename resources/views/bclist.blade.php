<!-- resources/views/bc.blade.php -->
@extends('components.layouts.app')

@section('title', 'Broadcast List')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Broadcast Arischa</h1>
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
                <h2 class="text-2xl font-bold">Broadcast List</h2>

                <div class="relative">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-400">
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l5.387 5.387-1.414 1.414-5.387-5.387zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <input type="text" placeholder="Search" class="pl-10 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>

                <a href="{{ route('bc') }}">
                    <button class="bg-black text-white px-4 py-2 rounded-lg ml-4">
                        Tambah Broadcast
                    </button>
                </a>

                <div class="relative inline-block text-left ml-4">
                    <button type="button" class="inline-flex justify-center w-full rounded-full border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                        Sort by: ID
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 01.976.073l.084.073L10 11.939l3.707-3.707a.75.75 0 111.133.976l-.073.084-4.5 4.5a.75.75 0 01-.976.073l-.084-.073-4.5-4.5a.75.75 0 010-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <table class="w-full border-collapse">
                <thead>
                    <tr>
                        <th class="border-b-2 p-2">Name</th>
                        <th class="border-b-2 p-2">Schedule</th>
                        <th class="border-b-2 p-2">Terkirim</th>
                        <th class="border-b-2 p-2">Dibaca</th>
                        <th class="border-b-2 p-2">Dibalas</th>
                        <th class="border-b-2 p-2">Penerima</th>
                        <th class="border-b-2 p-2">Gagal</th>
                        <th class="border-b-2 p-2">Status</th>
                        <th class="border-b-2 p-2">Credit</th>
                        <th class="border-b-2 p-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">Diskon Merdeka</td>
                        <td class="border-b p-2 text-center">6 Juni 2024 15.00</td>
                        <td class="border-b p-2 text-center">98%</td>
                        <td class="border-b p-2 text-center">100%</td>
                        <td class="border-b p-2 text-center">0%</td>
                        <td class="border-b p-2 text-center">150 Contact</td>
                        <td class="border-b p-2 text-center">5 Contact</td>
                        <td class="border-b p-2 text-center">On Progress</td>
                        <td class="border-b p-2 text-center">15000</td>
                        <td class="py-2 px-4 border-b flex justify-around">
                            <a href="stat.html">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                                    </svg>
                                </button>
                            </a>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                </svg>
                                </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">Penawaran Tas</td>
                        <td class="border-b p-2 text-center">1 Juni 2024 21.00</td>
                        <td class="border-b p-2 text-center">100%</td>
                        <td class="border-b p-2 text-center">98%</td>
                        <td class="border-b p-2 text-center">0%</td>
                        <td class="border-b p-2 text-center">135 Contact</td>
                        <td class="border-b p-2 text-center">2 Contact</td>
                        <td class="border-b p-2 text-center">Success</td>
                        <td class="border-b p-2 text-center">13500</td>
                        <td class="py-2 px-4 border-b flex justify-around">
                            <a href="stat.html">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                                    </svg>
                                </button>
                            </a>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                </svg>
                                </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">Diskon Member Baru</td>
                        <td class="border-b p-2 text-center">25 Mei 2024 15.00</td>
                        <td class="border-b p-2 text-center">50%</td>
                        <td class="border-b p-2 text-center">100%</td>
                        <td class="border-b p-2 text-center">0%</td>
                        <td class="border-b p-2 text-center">150 Contact</td>
                        <td class="border-b p-2 text-center">1 Contact</td>
                        <td class="border-b p-2 text-center">On Progress</td>
                        <td class="border-b p-2 text-center">15000</td>
                        <td class="py-2 px-4 border-b flex justify-around">
                            <a href="stat.html">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                                    </svg>
                                </button>
                            </a>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                </svg>
                                </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">Diskon Juli</td>
                        <td class="border-b p-2 text-center">20 Mei 2024 23.00</td>
                        <td class="border-b p-2 text-center">100%</td>
                        <td class="border-b p-2 text-center">100%</td>
                        <td class="border-b p-2 text-center">0%</td>
                        <td class="border-b p-2 text-center">110 Contact</td>
                        <td class="border-b p-2 text-center">1 Contact</td>
                        <td class="border-b p-2 text-center">Success</td>
                        <td class="border-b p-2 text-center">14000</td>
                        <td class="py-2 px-4 border-b flex justify-around">
                            <a href="stat.html">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                                    </svg>
                                </button>
                            </a>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                </svg>
                                </button>
                        </td>
                    </tr>
                    <tr class="bg-gray-100">
                        <td class="border-b p-2 text-center">Diskon Jam Tangan</td>
                        <td class="border-b p-2 text-center">15 Mei 2024 00.00</td>
                        <td class="border-b p-2 text-center">98%</td>
                        <td class="border-b p-2 text-center">100%</td>
                        <td class="border-b p-2 text-center">0%</td>
                        <td class="border-b p-2 text-center">90 Contact</td>
                        <td class="border-b p-2 text-center">4 Contact</td>
                        <td class="border-b p-2 text-center">On Progress</td>
                        <td class="border-b p-2 text-center">26000</td>
                        <td class="py-2 px-4 border-b flex justify-around">
                            <a href="stat.html">
                                <button class="text-green-600 hover:text-green-800">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                                    </svg>
                                </button>
                            </a>
                            <button class="text-red-600 hover:text-red-800">
                                <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
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
                            <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:text-gray-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <span class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300">...</span>
                        </li>
                        <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">20</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection