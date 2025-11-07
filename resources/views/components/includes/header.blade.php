<nav class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <a href="{{ route('home') }}" class="flex items-center gap-3 text-orange-600 font-bold text-xl hover:text-orange-700 transition">
                <img src="{{ asset('img/logo.png') }}" alt="Brahman Bhawan" class="h-30 h-lg-40 w-auto" />
            </a>

            <div class="hidden md:flex items-center gap-8">
                <a wire:navigate href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">Home</a>
                <a wire:navigate href="{{ route('about') }}" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">About</a>
                <a wire:navigate href="#amenities" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">Amenities</a>
                <a wire:navigate href="{{ route('rooms') }}" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">Rooms</a>
                <a wire:navigate href="{{ route('contact') }}" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">Contact</a>
            </div>

            <div class="flex items-center gap-4">
                <a href="tel:+917011895100" class="hidden sm:inline-flex items-center gap-2 text-orange-600 hover:text-orange-700 font-semibold">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span class="hidden lg:inline">Call Now</span>
                </a>
                <a href="#booking" class="hidden sm:inline-block bg-orange-600 hover:bg-orange-700 text-white px-5 py-2 rounded-lg text-base font-semibold shadow-lg transition transform hover:scale-105">Book Now</a>
                <button id="mobile-menu-button" class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-orange-500" aria-label="Open menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden pb-4 border-t border-gray-200">
            <div class="flex flex-col gap-4 pt-4">
                <a wire:navigate href="{{ route('home') }}" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">Home</a>
                <a wire:navigate href="{{ route('about') }}" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">About</a>
                <a wire:navigate href="#rooms" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">Rooms</a>
                <a wire:navigate href="{{ route('contact') }}" class="text-gray-700 hover:text-orange-600 font-medium text-base transition">Contact</a>
                <a wire:navigate href="tel:+011 40153986" class="flex items-center gap-2 text-orange-600 hover:text-orange-700 font-semibold">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    Call Now
                </a>
                <a href="#booking" class="bg-orange-600 hover:bg-orange-700 text-white px-5 py-2 rounded-lg text-base font-semibold shadow-lg transition text-center">Book Now</a>
            </div>
        </div>
    </div>
</nav>

<script>
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
    });
</script>