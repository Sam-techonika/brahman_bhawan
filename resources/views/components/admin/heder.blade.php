<!-- Header -->
<header class="bg-white shadow-md sticky top-0 z-20">
    <div class="px-6 py-4 flex items-center justify-between">
        <!-- Mobile Menu Button & Page Title -->
        <div class="flex items-center space-x-4">
            <button @click="sidebarOpen = !sidebarOpen" 
                    class="lg:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
            
            <div>
                <h2 class="text-xl font-bold text-gray-800">{{ $title ?? 'Dashboard' }}</h2>
                <p class="text-sm text-gray-500">{{ $subtitle ?? 'Welcome to admin panel' }}</p>
            </div>
        </div>

        <!-- Header Actions -->
        <div class="flex items-center space-x-4">
            <!-- Notifications -->
            <div class="relative" x-data="{ notificationOpen: false }">
                <button @click="notificationOpen = !notificationOpen" 
                        class="relative p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <svg class="h-6 w-6 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute top-1 right-1 h-3 w-3 bg-red-500 rounded-full border-2 border-white"></span>
                </button>

                <!-- Notification Dropdown -->
                <div x-show="notificationOpen" 
                     @click.away="notificationOpen = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-xl border border-gray-200 py-2"
                     style="display: none;">
                    <div class="px-4 py-2 border-b border-gray-200">
                        <h3 class="font-semibold text-gray-800">Notifications</h3>
                    </div>
                    <div class="max-h-96 overflow-y-auto">
                        <a href="#" class="flex items-start px-4 py-3 hover:bg-gray-50 transition-colors">
                            <div class="bg-orange-100 rounded-full p-2 mr-3">
                                <svg class="h-5 w-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-800">New Booking Request</p>
                                <p class="text-xs text-gray-500 mt-1">John Doe booked Deluxe Room</p>
                                <p class="text-xs text-gray-400 mt-1">5 minutes ago</p>
                            </div>
                        </a>
                        <a href="#" class="flex items-start px-4 py-3 hover:bg-gray-50 transition-colors">
                            <div class="bg-blue-100 rounded-full p-2 mr-3">
                                <svg class="h-5 w-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-gray-800">New Contact Message</p>
                                <p class="text-xs text-gray-500 mt-1">Query about room availability</p>
                                <p class="text-xs text-gray-400 mt-1">1 hour ago</p>
                            </div>
                        </a>
                    </div>
                    <div class="px-4 py-2 border-t border-gray-200">
                        <a href="#" class="text-sm text-orange-600 hover:text-orange-700 font-medium">View all notifications</a>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <a href="{{ route('home') }}" 
               target="_blank"
               class="hidden md:flex items-center px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-lg transition-colors text-sm font-medium text-gray-700">
                <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                </svg>
                View Site
            </a>

            <!-- User Dropdown -->
            <div class="relative" x-data="{ userMenuOpen: false }">
                <button @click="userMenuOpen = !userMenuOpen" 
                        class="flex items-center space-x-3 p-2 rounded-lg hover:bg-gray-100 transition-colors">
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-full h-9 w-9 flex items-center justify-center">
                        <span class="text-white font-bold text-sm">A</span>
                    </div>
                    <div class="hidden md:block text-left">
                        <p class="text-sm font-medium text-gray-700">Admin User</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                    <svg class="h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>

                <!-- User Dropdown Menu -->
                <div x-show="userMenuOpen" 
                     @click.away="userMenuOpen = false"
                     x-transition:enter="transition ease-out duration-200"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-150"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-xl border border-gray-200 py-2"
                     style="display: none;">
                    <div class="px-4 py-3 border-b border-gray-200">
                        <p class="text-sm font-medium text-gray-800">Admin User</p>
                        <p class="text-xs text-gray-500 mt-1">admin@example.com</p>
                    </div>
                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                        <svg class="h-4 w-4 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Profile
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                        <svg class="h-4 w-4 mr-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Settings
                    </a>
                    <div class="border-t border-gray-200 my-2"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                            <svg class="h-4 w-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>