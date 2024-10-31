<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard - {{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans antialiased">

<div x-data="{ sidebarOpen: false }" class="flex min-h-screen bg-gray-100">


    {{-- There is no sidebar anymore--}}

    <!-- Main Content Area -->
    <div class="flex-grow p-6 ml-0 lg:ml-64">
        <button
            @click="sidebarOpen = !sidebarOpen"
            class="mb-4 p-2 bg-blue-600 text-white rounded-lg lg:hidden"
        >
            Toggle Sidebar
        </button>

        <header class="bg-white shadow-md p-4 flex justify-between items-center relative">
            <div class="text-xl font-semibold text-gray-800">Dashboard</div>
            <div class="flex items-center space-x-4">
                <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-500 transition">
                    Notifications
                </button>
                <div class="relative" x-data="{ open: false }">
                    <img src="https://via.placeholder.com/40" alt="Profile" class="w-10 h-10 rounded-full cursor-pointer" @click="open = !open">
                    <div x-show="open" @click.away="open = false" class="absolute right-0 mt-2 w-48 bg-white border rounded-md shadow-lg py-1 z-50">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Profile</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Logout</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Slot for Main Content -->
        {{ $slot }}
    </div>
</div>

@livewireScripts
</body>
</html>
