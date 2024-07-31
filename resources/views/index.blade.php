<!-- resources/views/index.blade.php -->
@extends('welcome')

@section('title', 'Dashboard')

@section('content')
    <div class="flex flex-col flex-1 p-6">
        <!-- Header -->
        <header class="flex items-center justify-between bg-white p-6 rounded shadow">
            <h1 class="text-2xl font-bold">Dashboard</h1>
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
        <!-- Project Section -->
<section class="mt-8">
    <div class="grid grid-cols-3 gap-6">
        <div class="flex flex-col items-center justify-center p-6 bg-white rounded shadow">
            <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
            </div>
            <button class="bg-green-600 text-white py-2 px-4 rounded" onclick="togglePicture()">+ New Project</button>
        </div>
        <div class="flex flex-col items-center justify-center p-6 bg-white rounded shadow">
            <a href="{{ route('bclist') }}">
                <img src="{{ asset('images/arischa.png') }}" alt="Arischa" class="w-14 h-16 rounded mb-4">
                <span>Arischa</span>
            </a>
        </div>
        <div class="flex flex-col items-center justify-center p-6 bg-white rounded shadow">
            <img src="{{ asset('images/afgames.png') }}" alt="AF Gamez" class="w-16 h-16 rounded mb-4">
            <span>AF Gamez</span>
        </div>
    </div>
</section>

<!-- New Project -->
<div id="newproj" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-1/2">
        <h3 class="text-lg font-semibold mb-4 text-center">New Project</h3>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Nama Project</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Nama Kontak">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">No. Handphone</label>
                <input type="number" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="08123456789">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Username">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Account Facebook</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Account Facebook">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="********">
            </div>
        
            <div class="flex items-center"> 
                <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-2">
                  <img src="https://via.placeholder.com/100" alt="Photo Profil" id="photo-preview" class="w-24 h-24 rounded-full">
                </div>
                <button class="bg-black text-white py-2 px-4 rounded ml-2" onclick="document.getElementById('photo-input').click()">Pilih Photo</button>
                <input type="file" id="photo-input" class="hidden" onchange="previewPhoto(event)">
              </div>
        </div>
        <div class="mt-6 flex justify-between">
            <button class="bg-green-600 text-white py-2 px-4 rounded">Buat Project</button>
            <button class="bg-red-600 text-white py-2 px-4 rounded" onclick="togglePicture()">Batal</button>
        </div>
    </div>
</div>

<script>
function togglePicture() {
    document.getElementById('newproj').classList.toggle('hidden');
}

function previewPhoto(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const output = document.getElementById('photo-preview');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}
</script>

            <!-- Recent Broadcast Section -->
            <section class="mt-8">
                <h2 class="text-xl font-bold mb-4">Recent Broadcast</h2>
                <table class="min-w-full bg-white rounded shadow overflow-hidden">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Name</th>
                            <th class="py-2 px-4 border-b">Project</th>
                            <th class="py-2 px-4 border-b">Schedule</th>
                            <th class="py-2 px-4 border-b">Contact</th>
                            <th class="py-2 px-4 border-b">Status</th>
                            <th class="py-2 px-4 border-b">Credit</th>
                            <th class="py-2 px-4 border-b">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2 px-4 border-b">Diskon Merdeka</td>
                            <td class="py-2 px-4 border-b text-center">Arischa</td>
                            <td class="py-2 px-4 border-b text-center">6 Juni 2024 15:00</td>
                            <td class="py-2 px-4 border-b text-center">150 Contact</td>
                            <td class="py-2 px-4 border-b text-center">On Progress</td>
                            <td class="py-2 px-4 border-b text-center">15000</td>
                            <td class="py-2 px-4 border-b flex justify-around">
                                <a href="{{ route('stat') }}">
                                    <button class="text-green-600 hover:text-green-800 mx-0">
                                        <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.5 2A1.5 1.5 0 0 0 14 3.5v13a1.5 1.5 0 0 0 1.5 1.5h1a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 16.5 2h-1ZM9.5 6A1.5 1.5 0 0 0 8 7.5v9A1.5 1.5 0 0 0 9.5 18h1a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 10.5 6h-1ZM3.5 10A1.5 1.5 0 0 0 2 11.5v5A1.5 1.5 0 0 0 3.5 18h1A1.5 1.5 0 0 0 6 16.5v-5A1.5 1.5 0 0 0 4.5 10h-1Z" />
                                        </svg>
                                    </button>
                                </a>
                                <button class="text-red-600 hover:text-red-800 mx-0">
                                    <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                    </svg>
                                    </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2 px-4 border-b">Penawaran tas</td>
                            <td class="py-2 px-4 border-b text-center">AF Gamez</td>
                            <td class="py-2 px-4 border-b text-center">1 Juni 2024 21:00</td>
                            <td class="py-2 px-4 border-b text-center">135 Contact</td>
                            <td class="py-2 px-4 border-b text-center">Sukses</td>
                            <td class="py-2 px-4 border-b text-center">13500</td>
                            <td class="py-2 px-4 flex justify-around">
                                <a href="{{ route('stat') }}">
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
                        <tr>
                            <td class="py-2 px-4 border-b">Diskon member baru</td>
                            <td class="py-2 px-4 border-b text-center">AF Gamez</td>
                            <td class="py-2 px-4 border-b text-center">25 Mei 2024 16:00</td>
                            <td class="py-2 px-4 border-b text-center">110 Contact</td>
                            <td class="py-2 px-4 border-b text-center">Sukses</td>
                            <td class="py-2 px-4 border-b text-center">15000</td>
                            <td class="py-2 px-4 flex justify-around">
                                <a href="{{ route('stat') }}">
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
                        <tr>
                            <td class="py-2 px-4 border-b">Diskon Juli</td>
                            <td class="py-2 px-4 border-b text-center">Arischa</td>
                            <td class="py-2 px-4 border-b text-center">20 Mei 2024 23:15</td>
                            <td class="py-2 px-4 border-b text-center">110 Contact</td>
                            <td class="py-2 px-4 border-b text-center">Sukses</td>
                            <td class="py-2 px-4 border-b text-center">11000</td>
                            <td class="py-2 px-4 flex justify-around">
                                <a href="{{ route('stat') }}">
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
                        <tr>
                            <td class="py-2 px-4">Diskon jam tangan</td>
                            <td class="py-2 px-4 text-center">Arischa</td>
                            <td class="py-2 px-4 text-center">15 Mei 2024 10:40</td>
                            <td class="py-2 px-4 text-center">90 Contact</td>
                            <td class="py-2 px-4 text-center">Sukses</td>
                            <td class="py-2 px-4 text-center">9000</td>
                            <td class="py-2 px-4 flex justify-around">
                                <a href="{{ route('stat') }}">
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
            </section>
        </div>
    </div>
    </div>
@endsection
