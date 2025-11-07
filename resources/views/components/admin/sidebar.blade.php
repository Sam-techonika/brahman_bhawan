<!-- Sidebar -->
<aside class="bg-gradient-to-b from-gray-900 to-gray-800 text-white w-64 min-h-screen flex-shrink-0 hidden lg:flex flex-col fixed lg:sticky top-0 z-40 transition-transform duration-300" 
       :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'">
    
    <!-- Logo/Brand -->
    <div class="p-6 border-b border-gray-700">
        <div class="flex items-center space-x-3">
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-lg p-2">
                <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
            </div>
            <div>
                <h1 class="text-xl font-bold">Brahman Bhawan</h1>
                <p class="text-xs text-gray-400">Admin Panel</p>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="flex-1 px-4 py-6 space-y-2 overflow-y-auto">
        <!-- Bookings -->
        <a href="{{ route('admin.booking.list') }}" 
           class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors {{ request()->routeIs('admin.booking*') ? 'bg-orange-600 shadow-lg' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="font-medium">Bookings</span>
        </a>

        <!-- Contact Messages -->
        <a href="{{ route('admin.content.list') }}" 
           class="flex items-center px-4 py-3 rounded-lg hover:bg-gray-700 transition-colors {{ request()->routeIs('admin.content*') ? 'bg-orange-600 shadow-lg' : '' }}">
            <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
            <span class="font-medium">Contact Messages</span>
        </a>
    </nav>

    <!-- User Profile Section -->
    <div class="p-4 border-t border-gray-700">
        <div class="flex items-center space-x-3 px-4 py-3 rounded-lg bg-gray-700/50">
            <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-full h-10 w-10 flex items-center justify-center">
                <span class="text-white font-bold text-sm">A</span>
            </div>
            <div class="flex-1">
                <p class="text-sm font-medium">Admin User</p>
                <p class="text-xs text-gray-400">admin@example.com</p>
            </div>
        </div>
    </div>
</aside>

<!-- Mobile Sidebar Overlay -->
<div x-show="sidebarOpen" 
     @click="sidebarOpen = false"
     x-transition:enter="transition-opacity ease-linear duration-300"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition-opacity ease-linear duration-300"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     class="fixed inset-0 bg-gray-900 bg-opacity-75 z-30 lg:hidden"
     style="display: none;"></div>