<div>
    

    <main class="bg-white text-gray-800">
        <!-- Hero -->
        <section class="relative">
            <div class="h-[500px] md:h-[600px] bg-cover bg-center" style="background-image: url('{{ asset('gallery/691200596.jpg') }}');">
                <div class="w-full h-full bg-black/50 flex items-center">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-2xl text-white">
                            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold leading-tight">Brahman Bhawan — Comfortable Rooms, Warm Hospitality</h1>
                            <p class="mt-4 text-base sm:text-lg md:text-xl text-gray-100 leading-relaxed">Escape to calm. Our thoughtfully designed rooms and modern amenities make every stay memorable.</p>
                            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                                <a href="#rooms" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-md text-base font-semibold transition text-center shadow-md">Explore Rooms</a>
                                <a href="#amenities" class="bg-white/10 backdrop-blur-sm hover:bg-white/20 text-white px-6 py-3 rounded-md text-base font-semibold border border-white/50 transition text-center">View Amenities</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
        </section>

        <!-- Featured Rooms -->
        <section id="rooms" class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <div class="text-center mb-8 md:mb-12">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">Featured Rooms</h2>
                <p class="mt-2 text-base md:text-lg text-gray-600">Choose the room that fits your comfort and budget.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Room Card -->
                <article class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{asset('room/private.jpg')}}" alt="Private Double" class="w-full h-48 object-cover" />
                        <div class="absolute top-3 right-3 bg-orange-500 text-white px-3 py-1 rounded-full text-xs font-medium shadow-md">Popular</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg text-gray-900">Private Double</h3>
                        <p class="text-sm text-gray-600 mt-2">180 sq ft • 1 Bed, 1 Double</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-orange-500 font-bold text-xl">₹1,300 <span class="text-xs text-gray-500 font-normal">/ night</span></div>
                            <button wire:click="openBookingModal('Private Double')" class="text-sm text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md font-medium transition shadow-md">Book Now</button>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{ asset('room/deluxe.jpg') }}" alt="Deluxe Room" class="w-full h-48 object-cover" />
                        <div class="absolute top-3 right-3 bg-indigo-600 text-white px-3 py-1 rounded-full text-xs font-medium">Premium</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg text-gray-900">Deluxe Room</h3>
                        <p class="text-sm text-gray-600 mt-2">200 sq ft • 1 Bed, 1 Double</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-orange-500 font-bold text-xl">₹1,600 <span class="text-xs text-gray-500 font-normal">/ night</span></div>
                            <button wire:click="openBookingModal('Deluxe Room')" class="text-sm text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md font-medium transition shadow-md">Book Now</button>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{asset('room/suite.jpg')}}" alt="Suite Room" class="w-full h-48 object-cover" />
                        <div class="absolute top-3 right-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-medium">Luxury</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg text-gray-900">Suite Room</h3>
                        <p class="text-sm text-gray-600 mt-2">240 sq ft • 1 Bed, 1 Double</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-orange-500 font-bold text-xl">₹2,200 <span class="text-xs text-gray-500 font-normal">/ night</span></div>
                            <button wire:click="openBookingModal('Suite Room')" class="text-sm text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md font-medium transition shadow-md">Book Now</button>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{asset('room/twin.jpg')}}" alt="Twin Double" class="w-full h-48 object-cover" />
                        <div class="absolute top-3 right-3 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-medium">Friends</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg text-gray-900">Twin Double</h3>
                        <p class="text-sm text-gray-600 mt-2">150 sq ft • 2 Single Beds</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-orange-500 font-bold text-xl">₹1,500 <span class="text-xs text-gray-500 font-normal">/ night</span></div>
                            <button wire:click="openBookingModal('Twin Double')" class="text-sm text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md font-medium transition shadow-md">Book Now</button>
                        </div>
                    </div>
                </article>

                <article class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition">
                    <div class="relative">
                        <img src="{{ asset('room/family.jpg') }}" alt="Family Suite" class="w-full h-48 object-cover" />
                        <div class="absolute top-3 right-3 bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-medium">Family</div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-lg text-gray-900">Family Suite</h3>
                        <p class="text-sm text-gray-600 mt-2">400 sq ft • 2 Beds, 2 Double</p>
                        <div class="mt-4 flex items-center justify-between">
                            <div class="text-orange-500 font-bold text-xl">₹4,000 <span class="text-xs text-gray-500 font-normal">/ night</span></div>
                            <button wire:click="openBookingModal('Family Suite')" class="text-sm text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-md font-medium transition shadow-md">Book Now</button>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- Amenities & Services -->
        <section id="amenities" class="bg-gradient-to-br from-gray-50 to-orange-50 py-16 md:py-20">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <div class="inline-block bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 shadow-md">
                        Premium Facilities
                    </div>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-4">Amenities & Services</h2>
                    <p class="text-lg md:text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                        Rooms are spacious and centrally located for shopping, railway station, metro station, airport and parliament etc.
                    </p>
                </div>

                <!-- Main Amenities Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                    <!-- Air Conditioner -->
                    <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition border border-orange-100">
                        <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center mb-3">Air Conditioner</h3>
                        <p class="text-base text-gray-600 text-center leading-relaxed">All rooms are AC with climate control for your comfort</p>
                    </div>

                    <!-- Television -->
                    <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition border border-orange-100">
                        <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center mb-3">Smart LED TV</h3>
                        <p class="text-base text-gray-600 text-center leading-relaxed">All rooms have smart LED TV for entertainment</p>
                    </div>

                    <!-- WiFi -->
                    <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition border border-orange-100">
                        <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center mb-3">Unlimited WiFi</h3>
                        <p class="text-base text-gray-600 text-center leading-relaxed">High-speed WiFi in all areas of Brahman Bhawan</p>
                    </div>

                    <!-- Kitchen/Food -->
                    <div class="bg-white rounded-xl p-8 shadow-md hover:shadow-xl transition border border-orange-100">
                        <div class="bg-orange-50 w-16 h-16 rounded-full flex items-center justify-center mb-4 mx-auto">
                            <svg class="w-8 h-8 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 text-center mb-3">Pure Veg Food</h3>
                        <p class="text-base text-gray-600 text-center leading-relaxed">Pure Veg Food or Satvik food at Karol Bagh, New Delhi</p>
                    </div>
                </div>

                <!-- Additional Features -->
                <div class="bg-white rounded-2xl p-8 md:p-10 shadow-lg border border-orange-200">
                    <h3 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-8">Additional Services</h3>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                        <!-- 24/7 Support -->
                        <div class="text-center group hover:scale-105 transition-transform duration-200">
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 w-16 h-16 rounded-xl flex items-center justify-center mb-3 mx-auto shadow-md group-hover:shadow-lg transition-shadow">
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">24/7 Support</p>
                        </div>

                        <!-- Room Service -->
                        <div class="text-center group hover:scale-105 transition-transform duration-200">
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 w-16 h-16 rounded-xl flex items-center justify-center mb-3 mx-auto shadow-md group-hover:shadow-lg transition-shadow">
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Room Service</p>
                        </div>

                        <!-- Laundry -->
                        <div class="text-center group hover:scale-105 transition-transform duration-200">
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 w-16 h-16 rounded-xl flex items-center justify-center mb-3 mx-auto shadow-md group-hover:shadow-lg transition-shadow">
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Laundry</p>
                        </div>

                        <!-- Parking -->
                        <div class="text-center group hover:scale-105 transition-transform duration-200">
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 w-16 h-16 rounded-xl flex items-center justify-center mb-3 mx-auto shadow-md group-hover:shadow-lg transition-shadow">
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21H5a2 2 0 01-2-2V5a2 2 0 012-2h11l5 5v11a2 2 0 01-2 2z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m-6 4h6m-6 4h6"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Parking</p>
                        </div>

                        <!-- Housekeeping -->
                        <div class="text-center group hover:scale-105 transition-transform duration-200">
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 w-16 h-16 rounded-xl flex items-center justify-center mb-3 mx-auto shadow-md group-hover:shadow-lg transition-shadow">
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Housekeeping</p>
                        </div>

                        <!-- Hot Water -->
                        <div class="text-center group hover:scale-105 transition-transform duration-200">
                            <div class="bg-gradient-to-br from-orange-50 to-orange-100 w-16 h-16 rounded-xl flex items-center justify-center mb-3 mx-auto shadow-md group-hover:shadow-lg transition-shadow">
                                <svg class="w-8 h-8 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                            <p class="text-sm font-semibold text-gray-700">Hot Water</p>
                        </div>
                    </div>
                </div>

                <!-- Location Benefits -->
                <div class="mt-10 bg-gradient-to-r from-orange-500 to-orange-600 rounded-2xl p-8 md:p-10 text-white text-center">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Prime Location Benefits</h3>
                    <p class="text-lg md:text-xl opacity-95 max-w-3xl mx-auto">
                        Perfectly situated in Karol Bagh with easy access to shopping areas, railway station, metro station, airport, and Parliament. Your gateway to exploring New Delhi!
                    </p>
                </div>
            </div>
        </section>

        <!-- Detailed Rooms -->
        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
            <h2 class="text-2xl md:text-3xl font-bold text-orange-500 mb-6">Private Double</h2>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="lg:col-span-1">
                    <img src="{{asset('room/private.jpg')}}" class="w-full h-64 object-cover rounded-lg shadow-md" alt="Private Double Room Image" />
                </div>
                <div class="lg:col-span-2 bg-white p-6 rounded-lg shadow-md border border-gray-200">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                        <div class="text-base font-semibold text-gray-800">180 sq.ft • 1 Bed, 1 Double • 1 Bathroom</div>
                        <div class="text-orange-500 font-bold text-2xl">₹1,300 <span class="text-sm text-gray-600">/ night</span></div>
                    </div>

                    <p class="mt-4 text-sm text-gray-700 leading-relaxed">Our Private Double rooms offer the perfect blend of comfort and affordability. Ideal for couples or solo travelers, these well-appointed rooms feature a comfortable double bed, modern furnishings, and all essential amenities including Free WiFi, LED TV, air conditioning, attached bathroom with hot & cold water, work desk, and daily housekeeping services.</p>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-lg text-gray-900 mb-3">Amenities</h4>
                            <ul class="mt-3 text-base text-gray-700 space-y-2">
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Study Room</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Air Conditioning</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>In-room Dining</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Iron/Ironing Board</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Wi-Fi</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Daily Housekeeping</li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-bold text-lg text-gray-900 mb-3">Room Features</h4>
                            <ul class="mt-3 text-base text-gray-700 space-y-2">
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Couch</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Pillow Menu</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Hypoallergenic Bedding</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Closet</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Seating Area</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Work Desk</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-6 text-base text-gray-700">
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h5 class="font-bold text-gray-900">Basic Facilities</h5>
                            <p class="mt-2">Kettle, Chair</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h5 class="font-bold text-gray-900">Bathroom</h5>
                            <p class="mt-2">Geyser/Water Heater, Western Toilet Seat, Hot &amp; Cold Water, Jetspray, Toiletries, Bidet, Towels</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow">
                            <h5 class="font-bold text-gray-900">Safety & Media</h5>
                            <p class="mt-2">Cupboards with Locks, TV</p>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button wire:click="openBookingModal('Private Double')" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-lg text-lg font-semibold shadow-lg transition transform hover:scale-105">Book Private Double</button>
                    </div>
                </div>
            </div>

            <hr class="my-16 border-gray-300" />

            <h2 class="text-4xl font-bold text-orange-500 mb-8">Twin Double</h2>
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1">
                    <img src="{{ asset('room/twin.jpg') }}" class="w-full h-80 object-cover rounded-2xl shadow-xl" alt="Twin Double Room Image" />
                </div>
                <div class="lg:col-span-2 bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-xl">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div class="text-xl font-semibold text-gray-800">150 sq.ft • 2 Single Beds • 1 Bathroom</div>
                        <div class="text-orange-500 font-bold text-3xl whitespace-nowrap">₹1,500 <span class="text-base text-gray-600">/ night</span></div>
                    </div>

                    <p class="mt-6 text-base text-gray-700 leading-relaxed">Our Twin Double room is perfect for friends or colleagues traveling together. Featuring two comfortable single beds, this room provides personal space while maintaining a cozy atmosphere. Equipped with modern amenities including air conditioning, free Wi-Fi, LED TV, attached bathroom with hot & cold water, work area, and daily housekeeping. Ideal for business travelers or friends seeking separate sleeping arrangements.</p>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-lg text-gray-900 mb-3">Amenities</h4>
                            <ul class="mt-3 text-base text-gray-700 space-y-2">
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Air Conditioning</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Iron/Ironing Board</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Wi-Fi</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Daily Housekeeping</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Laundry Service</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Mineral Water</li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-bold text-lg text-gray-900 mb-3">Room Features</h4>
                            <ul class="mt-3 text-base text-gray-700 space-y-2">
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Closet</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Chair</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Work Desk</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Telephone</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button wire:click="openBookingModal('Twin Double')" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-lg text-lg font-semibold shadow-lg transition transform hover:scale-105">Book Twin Double</button>
                    </div>
                </div>
            </div>

            <hr class="my-16 border-gray-300" />

            <h2 class="text-4xl font-bold text-orange-500 mb-8">Family Suite</h2>
            <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-1">
                    <img src="{{ asset('room/family.jpg') }}" class="w-full h-80 object-cover rounded-2xl shadow-xl" alt="Family Suite Image" />
                </div>
                <div class="lg:col-span-2 bg-gradient-to-br from-white to-orange-50 p-8 rounded-2xl shadow-xl">
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div class="text-xl font-semibold text-gray-800">400 sq.ft • 2 Beds, 2 Double • 1 Bathroom</div>
                        <div class="text-orange-500 font-bold text-3xl whitespace-nowrap">₹4,000 <span class="text-base text-gray-600">/ night</span></div>
                    </div>

                    <p class="mt-6 text-base text-gray-700 leading-relaxed">Our spacious Family Suite is designed for families or groups seeking maximum comfort and space. This premium suite features two separate double beds, ample living space, and all modern conveniences. Perfect for families with children or groups of up to 4 people. Enjoy premium amenities including air conditioning, free high-speed Wi-Fi, large flat-screen TV, attached bathroom with premium toiletries, hot & cold water, separate seating area, work desk, mini-fridge, tea/coffee maker, and daily housekeeping.</p>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <h4 class="font-bold text-lg text-gray-900 mb-3">Amenities</h4>
                            <ul class="mt-3 text-base text-gray-700 space-y-2">
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Air Conditioning</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Free Wi-Fi</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Room Service</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Daily Housekeeping</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Laundry Service</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Mini Fridge</li>
                            </ul>
                        </div>

                        <div>
                            <h4 class="font-bold text-lg text-gray-900 mb-3">Room Features</h4>
                            <ul class="mt-3 text-base text-gray-700 space-y-2">
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Seating Area</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Work Desk</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Wardrobe</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Large Flat-screen TV</li>
                                <li class="flex items-center gap-2"><svg class="w-5 h-5 text-orange-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>Tea/Coffee Maker</li>
                            </ul>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button wire:click="openBookingModal('Family Suite')" class="inline-block bg-orange-500 hover:bg-orange-600 text-white px-8 py-3 rounded-lg text-lg font-semibold shadow-lg transition transform hover:scale-105">Book Family Suite</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery -->
        <section class="container mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16" x-data="{ 
            isOpen: false, 
            currentImage: '', 
            currentAlt: '',
            currentIndex: 0,
            images: [
                { src: '{{ asset('gallery/681087641.jpg') }}', alt: 'Gallery Image 1' },
                { src: '{{ asset('gallery/681399093.jpg') }}', alt: 'Gallery Image 2' },
                { src: '{{ asset('gallery/682360875.jpg') }}', alt: 'Gallery Image 3' },
                { src: '{{ asset('gallery/682361574.jpg') }}', alt: 'Gallery Image 4' },
                { src: '{{ asset('gallery/682367580.jpg') }}', alt: 'Gallery Image 5' },
                { src: '{{ asset('gallery/682369204.jpg') }}', alt: 'Gallery Image 6' },
                { src: '{{ asset('gallery/691200602.jpg') }}', alt: 'Gallery Image 7' },
                { src: '{{ asset('gallery/716983768.jpg') }}', alt: 'Gallery Image 8' },
                { src: '{{ asset('gallery/room-1.jpg') }}', alt: 'Gallery Image 9' },
                { src: '{{ asset('gallery/room-3.jpg') }}', alt: 'Gallery Image 10' },
                { src: '{{ asset('gallery/room-4.jpg') }}', alt: 'Gallery Image 11' },
                { src: '{{ asset('room/private.jpg') }}', alt: 'Gallery Image 12' }
            ],
            openLightbox(index) {
                this.currentIndex = index;
                this.currentImage = this.images[index].src;
                this.currentAlt = this.images[index].alt;
                this.isOpen = true;
                document.body.style.overflow = 'hidden';
            },
            closeLightbox() {
                this.isOpen = false;
                document.body.style.overflow = 'auto';
            },
            nextImage() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
                this.currentImage = this.images[this.currentIndex].src;
                this.currentAlt = this.images[this.currentIndex].alt;
            },
            prevImage() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
                this.currentImage = this.images[this.currentIndex].src;
                this.currentAlt = this.images[this.currentIndex].alt;
            }
        }">
            <div class="text-center mb-8">
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">Gallery</h2>
                <p class="mt-2 text-base text-gray-600">Take a peek at our beautiful property</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
                <img @click="openLightbox(0)" src="{{ asset('gallery/681087641.jpg') }}" alt="Gallery Image 1" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(1)" src="{{ asset('gallery/681399093.jpg') }}" alt="Gallery Image 2" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(2)" src="{{ asset('gallery/682360875.jpg') }}" alt="Gallery Image 3" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(3)" src="{{ asset('gallery/682361574.jpg') }}" alt="Gallery Image 4" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(4)" src="{{ asset('gallery/682367580.jpg') }}" alt="Gallery Image 5" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(5)" src="{{ asset('gallery/682369204.jpg') }}" alt="Gallery Image 6" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(6)" src="{{ asset('gallery/691200602.jpg') }}" alt="Gallery Image 7" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(7)" src="{{ asset('gallery/716983768.jpg') }}" alt="Gallery Image 8" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(8)" src="{{ asset('gallery/room-1.jpg') }}" alt="Gallery Image 9" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(9)" src="{{ asset('gallery/room-3.jpg') }}" alt="Gallery Image 10" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(10)" src="{{ asset('gallery/room-4.jpg') }}" alt="Gallery Image 11" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
                <img @click="openLightbox(11)" src="{{ asset('room/private.jpg') }}" alt="Gallery Image 12" class="w-full h-32 object-cover rounded-md shadow-sm hover:shadow-md transition cursor-pointer" />
            </div>

            <!-- Lightbox Modal -->
            <div x-show="isOpen" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @click.self="closeLightbox()"
                 @keydown.escape.window="closeLightbox()"
                 @keydown.arrow-right.window="nextImage()"
                 @keydown.arrow-left.window="prevImage()"
                 class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-90 p-4"
                 style="display: none;">
                
                <!-- Close Button -->
                <button @click="closeLightbox()" class="absolute top-4 right-4 text-white hover:text-orange-500 transition z-50">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Previous Button -->
                <button @click="prevImage()" class="absolute left-4 text-white hover:text-orange-500 transition z-50 bg-black bg-opacity-50 rounded-full p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>

                <!-- Image -->
                <div class="max-w-6xl max-h-[90vh] flex items-center justify-center">
                    <img :src="currentImage" :alt="currentAlt" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl">
                </div>

                <!-- Next Button -->
                <button @click="nextImage()" class="absolute right-4 text-white hover:text-orange-500 transition z-50 bg-black bg-opacity-50 rounded-full p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <!-- Image Counter -->
                <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white bg-black bg-opacity-50 px-4 py-2 rounded-full">
                    <span x-text="currentIndex + 1"></span> / <span x-text="images.length"></span>
                </div>
            </div>
        </section>

        <!-- Reviews -->
        <section class="bg-gray-50 py-12 md:py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-12">
                    <div class="inline-block bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 shadow-md">
                        Verified Reviews
                    </div>
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-900">Guest Reviews</h2>
                    <p class="mt-2 text-base text-gray-600">Real experiences from our valued guests</p>
                    <div class="mt-4 flex items-center justify-center gap-2">
                        <div class="flex gap-1">
                            <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-6 h-6 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <span class="text-xl font-bold text-gray-900">4.5/5</span>
                        <span class="text-gray-600">(200+ reviews)</span>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Review 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border-t-4 border-orange-500">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-orange-400 to-orange-600 flex items-center justify-center font-bold text-lg text-white flex-shrink-0">A</div>
                            <div class="flex-1">
                                <div class="font-bold text-base text-gray-900">Asha Reddy</div>
                                <div class="text-xs text-gray-500">Family Vacation • 3 nights</div>
                                <div class="flex gap-1 mt-2">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 leading-relaxed">"Excellent stay with family! The rooms were spacious and very clean. Staff was extremely helpful and the location is perfect for exploring Karol Bagh market. Highly recommend for families!"</p>
                        <div class="mt-4 text-xs text-gray-500">Posted 2 weeks ago</div>
                    </div>

                    <!-- Review 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border-t-4 border-blue-500">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center font-bold text-lg text-white flex-shrink-0">R</div>
                            <div class="flex-1">
                                <div class="font-bold text-base text-gray-900">Ravi Kumar</div>
                                <div class="text-xs text-gray-500">Business Trip • 2 nights</div>
                                <div class="flex gap-1 mt-2">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 leading-relaxed">"Great value for money! Perfect location near metro station. WiFi was fast which was important for my work. The room had everything I needed. Will definitely stay again on my next business trip."</p>
                        <div class="mt-4 text-xs text-gray-500">Posted 1 month ago</div>
                    </div>

                    <!-- Review 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border-t-4 border-green-500">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center font-bold text-lg text-white flex-shrink-0">P</div>
                            <div class="flex-1">
                                <div class="font-bold text-base text-gray-900">Priya Sharma</div>
                                <div class="text-xs text-gray-500">Solo Traveler • 1 night</div>
                                <div class="flex gap-1 mt-2">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 leading-relaxed">"Safe and comfortable for solo travelers. The staff made me feel very secure. Room was clean and well-maintained. Great vegetarian food options nearby. Very satisfied with my stay!"</p>
                        <div class="mt-4 text-xs text-gray-500">Posted 3 weeks ago</div>
                    </div>

                    <!-- Review 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border-t-4 border-purple-500">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center font-bold text-lg text-white flex-shrink-0">M</div>
                            <div class="flex-1">
                                <div class="font-bold text-base text-gray-900">Mohit Verma</div>
                                <div class="text-xs text-gray-500">Couple • 4 nights</div>
                                <div class="flex gap-1 mt-2">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 leading-relaxed">"Wonderful experience! We booked the deluxe room and it was worth every rupee. AC worked perfectly, hot water was available 24/7. Staff was courteous and helpful. The satvik food was delicious!"</p>
                        <div class="mt-4 text-xs text-gray-500">Posted 1 week ago</div>
                    </div>

                    <!-- Review 5 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border-t-4 border-indigo-500">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-indigo-400 to-indigo-600 flex items-center justify-center font-bold text-lg text-white flex-shrink-0">S</div>
                            <div class="flex-1">
                                <div class="font-bold text-base text-gray-900">Sanjay Patel</div>
                                <div class="text-xs text-gray-500">Group Trip • 2 nights</div>
                                <div class="flex gap-1 mt-2">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 leading-relaxed">"Came with friends for a Delhi trip. Booked twin rooms which were perfect for us. Very close to railway station and shopping areas. Good budget option with decent amenities. Parking was convenient."</p>
                        <div class="mt-4 text-xs text-gray-500">Posted 2 months ago</div>
                    </div>

                    <!-- Review 6 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition border-t-4 border-pink-500">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="h-12 w-12 rounded-full bg-gradient-to-br from-pink-400 to-pink-600 flex items-center justify-center font-bold text-lg text-white flex-shrink-0">N</div>
                            <div class="flex-1">
                                <div class="font-bold text-base text-gray-900">Neha Singh</div>
                                <div class="text-xs text-gray-500">Family • 5 nights</div>
                                <div class="flex gap-1 mt-2">
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                    <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                </div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-700 leading-relaxed">"Stayed with my parents and kids. The family suite was spacious enough for all of us. Loved the pure vegetarian options. The staff was very accommodating with our requests. Clean, comfortable and affordable!"</p>
                        <div class="mt-4 text-xs text-gray-500">Posted 3 days ago</div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Booking Modal -->
    @if($showBookingModal)
    <div class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="fixed inset-0 transition-opacity" wire:click="closeBookingModal"></div>

            <div class="inline-block bg-gradient-to-br from-white to-orange-50 rounded-2xl text-left overflow-hidden shadow-2xl transform transition-all sm:max-w-3xl w-full relative z-10" wire:click.stop>
                <!-- Header with Gradient -->
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-6 py-6">
                    <div class="flex justify-between items-center">
                        <div>
                            <h3 class="text-2xl md:text-3xl font-bold text-white mb-1">Reserve Your Room</h3>
                            <p class="text-orange-100 text-sm">Complete your booking at Brahman Bhawan</p>
                        </div>
                        <button wire:click="closeBookingModal" class="text-white hover:text-orange-100 transition">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="px-6 py-6 sm:px-8 sm:py-8">
                    <!-- Selected Room Display -->
                    <div class="mb-6 bg-white rounded-xl p-4 shadow-sm border-l-4 border-orange-500">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xs font-semibold text-orange-600 uppercase tracking-wide mb-1">Selected Room</p>
                                <h4 class="text-xl font-bold text-gray-900">{{ $selectedRoom }}</h4>
                            </div>
                            <div class="bg-orange-100 rounded-full p-3">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    @if(session()->has('message'))
                    <div class="mb-6 bg-green-50 border-l-4 border-green-500 text-green-800 px-4 py-3 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            {{ session('message') }}
                        </div>
                    </div>
                    @endif

                    <form wire:submit.prevent="submitBooking" class="space-y-5">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"/>
                                        </svg>
                                        Full Name *
                                    </span>
                                </label>
                                <input type="text" wire:model.defer="name" placeholder="Enter your full name" class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 px-4 py-3 transition">
                                @error('name') <span class="text-red-500 text-xs mt-1 flex items-center"><svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                        </svg>
                                        Email Address *
                                    </span>
                                </label>
                                <input type="email" wire:model.defer="email" placeholder="your@email.com" class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 px-4 py-3 transition">
                                @error('email') <span class="text-red-500 text-xs mt-1 flex items-center"><svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                                        </svg>
                                        Phone Number *
                                    </span>
                                </label>
                                <input type="tel" wire:model.defer="phone" placeholder="+91 1234567890" class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 px-4 py-3 transition">
                                @error('phone') <span class="text-red-500 text-xs mt-1 flex items-center"><svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                                        </svg>
                                        Number of Guests *
                                    </span>
                                </label>
                                <select wire:model.defer="guests" class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 px-4 py-3 transition">
                                    <option value="1">1 Guest</option>
                                    <option value="2">2 Guests</option>
                                    <option value="3">3 Guests</option>
                                    <option value="4">4 Guests</option>
                                    <option value="5">5 Guests</option>
                                    <option value="6">6 Guests</option>
                                </select>
                                @error('guests') <span class="text-red-500 text-xs mt-1 flex items-center"><svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                        </svg>
                                        Check-in Date *
                                    </span>
                                </label>
                                <input type="date" wire:model.defer="check_in" class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 px-4 py-3 transition">
                                @error('check_in') <span class="text-red-500 text-xs mt-1 flex items-center"><svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                                        </svg>
                                        Check-out Date *
                                    </span>
                                </label>
                                <input type="date" wire:model.defer="check_out" class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 px-4 py-3 transition">
                                @error('check_out') <span class="text-red-500 text-xs mt-1 flex items-center"><svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                <span class="flex items-center">
                                    <svg class="w-4 h-4 mr-1 text-orange-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"/>
                                    </svg>
                                    Special Requests (Optional)
                                </span>
                            </label>
                            <textarea wire:model.defer="special_requests" rows="3" placeholder="Any special requirements or preferences..." class="w-full border border-gray-300 rounded-lg shadow-sm focus:border-orange-500 focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50 px-4 py-3 transition"></textarea>
                        </div>

                       

                        <div class="flex flex-col sm:flex-row justify-end gap-3 pt-4">
                            <button type="button" wire:click="closeBookingModal" class="px-6 py-3 border-2 border-gray-300 rounded-lg text-gray-700 font-semibold hover:bg-gray-50 transition-all duration-200">
                                Cancel
                            </button>
                            <button type="submit" class="px-8 py-3 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-lg font-bold transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                Confirm Booking
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Confirmation Modal -->
    @if($showConfirmationModal)
    <div class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="relative bg-gradient-to-br from-white to-orange-50 rounded-2xl shadow-2xl transform transition-all w-full max-w-2xl overflow-hidden">
                
                <!-- Success Header with Animation -->
                <div class="bg-gradient-to-r from-green-500 to-emerald-600 px-8 py-6 text-center">
                    <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-white/20 backdrop-blur-sm mb-4 animate-bounce">
                        <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-white mb-2">
                        Booking Confirmed!
                    </h3>
                    <p class="text-green-50 text-sm">
                        Your reservation has been successfully received
                    </p>
                </div>

                <!-- Content -->
                <div class="px-8 py-6 space-y-6">
                    
                    <!-- Thank You Message -->
                    <div class="text-center">
                        <p class="text-gray-700 leading-relaxed">
                            Thank you for choosing Brahman Bhawan! We have received your reservation details and will contact you shortly to confirm your stay.
                        </p>
                    </div>

                    <!-- Booking Reference Card -->
                    <div class="bg-gradient-to-r from-orange-500 to-orange-600 rounded-xl p-6 text-white shadow-lg">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-orange-100 text-sm font-medium mb-1">Booking Reference</p>
                                <p class="text-3xl font-bold tracking-wide">{{ $bookingReference }}</p>
                            </div>
                            <div class="bg-white/20 rounded-full p-3">
                                <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                            </div>
                        </div>
                        <p class="text-orange-100 text-xs mt-3 flex items-center">
                            <svg class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Please save this reference number for future communication
                        </p>
                    </div>

                    <!-- Booking Details Card -->
                    <div class="bg-white rounded-xl shadow-md border border-gray-100 overflow-hidden">
                        <div class="bg-gray-50 border-b border-gray-200 px-6 py-3">
                            <h4 class="font-semibold text-gray-800 flex items-center">
                                <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                                Reservation Details
                            </h4>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600 flex items-center">
                                    <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                    </svg>
                                    Room Type
                                </span>
                                <span class="font-bold text-gray-900">{{ $selectedRoom }}</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600 flex items-center">
                                    <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    Guest Name
                                </span>
                                <span class="font-bold text-gray-900">{{ $name }}</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600 flex items-center">
                                    <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    Check-in
                                </span>
                                <span class="font-bold text-gray-900">{{ \Carbon\Carbon::parse($check_in)->format('d M, Y') }}</span>
                            </div>
                            <div class="flex items-center justify-between py-2 border-b border-gray-100">
                                <span class="text-gray-600 flex items-center">
                                    <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    Check-out
                                </span>
                                <span class="font-bold text-gray-900">{{ \Carbon\Carbon::parse($check_out)->format('d M, Y') }}</span>
                            </div>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-gray-600 flex items-center">
                                    <svg class="h-5 w-5 mr-2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    Number of Guests
                                </span>
                                <span class="font-bold text-gray-900">{{ $guests }} {{ $guests == 1 ? 'Guest' : 'Guests' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="bg-blue-50 border border-blue-200 rounded-xl p-5 space-y-3">
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-700">
                                    A confirmation email has been sent to
                                </p>
                                <p class="font-semibold text-gray-900">{{ $email }}</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-3 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <div>
                                <p class="text-sm text-gray-700">
                                    We will contact you at
                                </p>
                                <p class="font-semibold text-gray-900">{{ $phone }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Button -->
                    <div class="flex justify-center pt-2">
                        <button wire:click="closeConfirmationModal" type="button" class="px-8 py-3 bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white rounded-lg font-bold transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center">
                            <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Done
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endif

</div>