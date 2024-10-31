<div>
    <aside
        :class="sidebarOpen ? 'translate-x-0 lg:w-64' : '-translate-x-full lg:w-20'"
        class="fixed lg:static w-64 h-screen bg-gradient-to-b from-gray-900 to-gray-800 text-white flex-shrink-0 transform lg:translate-x-0 transition-transform duration-300 ease-in-out lg:relative z-30"
    >
        <!-- Sidebar Toggle Button (visible on all screen sizes for better UX) -->
        <button
            @click="sidebarOpen = !sidebarOpen"
            class="absolute top-4 right-4 text-white lg:hidden"
        >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16m-7 6h7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </svg>
        </button>

        <!-- Logo and Enhanced Title -->
        <div class="p-4 flex items-center justify-center border-b border-gray-700">
        <span class="text-2xl font-extrabold text-gray-100 tracking-wide bg-clip-text bg-gradient-to-r from-purple-400 to-blue-500">
            My Dashboard
        </span>
        </div>

        <!-- Search Bar -->
        <div class="p-4 border-b border-gray-700" x-show="sidebarOpen || !sidebarOpen">
            <input
                type="text"
                placeholder="Search..."
                class="w-full px-3 py-2 rounded-md bg-gray-800 placeholder-gray-400 text-white focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
            >
        </div>

        <!-- Navigation Links -->
        <nav class="mt-4 space-y-1 px-4">
            <a href="{{ route('dashboard') }}" class="flex items-center py-3 px-4 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 4.75v13.5M5.75 12h13.5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <span x-show="sidebarOpen">Home</span>
            </a>
            <a href="{{ route('profile') }}" class="flex items-center py-3 px-4 rounded-md text-gray-300 hover:bg-gray-700 hover:text-white transition-colors">
                <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 14c4.418 0 8-3.582 8-8S16.418 0 12 0s-8 3.582-8 8c0 4.418 3.582 8 8 8zM9.172 18c0-2.267 4.126-4.5 9.828-4.5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <span x-show="sidebarOpen">Profile</span>
            </a>
            <!-- Additional links -->
        </nav>

        <!-- User Profile Section at Bottom -->
        <div class="absolute bottom-4 w-full px-4">
            <div x-data="{ openProfile: false }" class="space-y-1">
                <button @click="openProfile = !openProfile" class="w-full flex items-center justify-between px-4 py-2 text-sm text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">
                    <span x-show="sidebarOpen">Profile</span>
                    <svg :class="openProfile ? 'rotate-180' : 'rotate-0'" class="h-5 w-5 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M19 9l-7 7-7-7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                </button>
                <div x-show="openProfile && sidebarOpen" class="space-y-1 pl-6">
                    <a href="{{ route('profile') }}" class="block py-2 text-gray-300 hover:bg-gray-700 rounded-md">View Profile</a>
                    <a href="#" class="block py-2 text-gray-300 hover:bg-gray-700 rounded-md">Logout</a>
                </div>
            </div>
        </div>
    </aside>


</div>
