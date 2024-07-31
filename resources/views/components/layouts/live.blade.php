<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Preview Example</title>
    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen bg-gray-100">
        <!-- Navigation Bar -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-900">Home</a>
                <a href="{{ route('live-preview') }}" class="ml-4 text-lg font-semibold text-gray-900">Live Preview</a>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-10">
            {{ $slot }}
        </main>
    </div>
    @livewireScripts
</body>
</html>
