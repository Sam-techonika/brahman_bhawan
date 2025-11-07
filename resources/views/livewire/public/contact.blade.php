<div>
    <main>
        <!-- Hero Section -->
        <section class="bg-orange-600 text-white py-20 md:py-32">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="inline-block bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-full text-sm font-semibold mb-6 border border-white/30">
                    Get In Touch
                </div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-6">Contact Us</h1>
                <p class="text-xl sm:text-2xl max-w-3xl mx-auto mb-4">We're here to help with your booking</p>
                <p class="text-lg sm:text-xl max-w-2xl mx-auto opacity-90">24/7 available for your inquiries and reservations</p>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="py-12 md:py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                        
                        <!-- Success Message -->
                        @if (session()->has('success'))
                        <div class="mb-6 bg-gradient-to-r from-green-500 to-emerald-600 text-white rounded-xl p-5 shadow-lg animate-pulse">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="font-semibold">{{ session('success') }}</p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <form wire:submit.prevent="submit" class="space-y-5">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" 
                                       id="name" 
                                       wire:model.defer="name"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent" 
                                       placeholder="Your name" 
                                       required>
                                @error('name') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" 
                                       id="email" 
                                       wire:model.defer="email"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent" 
                                       placeholder="your@email.com" 
                                       required>
                                @error('email') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" 
                                       id="phone" 
                                       wire:model.defer="phone"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent" 
                                       placeholder="+91 1234567890">
                                @error('phone') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                                <input type="text" 
                                       id="subject" 
                                       wire:model.defer="subject"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent" 
                                       placeholder="Booking inquiry" 
                                       required>
                                @error('subject') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                                <textarea id="message" 
                                          wire:model.defer="message"
                                          rows="5" 
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-600 focus:border-transparent" 
                                          placeholder="Tell us about your requirements..." 
                                          required></textarea>
                                @error('message') <span class="text-red-500 text-sm mt-1">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" 
                                    class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-6 py-3 rounded-lg text-base font-semibold transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center">
                                <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                                </svg>
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-6">Contact Information</h2>
                        
                        <div class="space-y-5 mb-8">
                            <!-- Address -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Address</h3>
                                    <p class="text-base text-gray-700">Brahman Bhawan<br>8502, Arakashan Rd, Ram Nagar<br>Karol Bagh, New Delhi<br>Delhi 110005, India</p>
                                    <a href="https://maps.google.com/?q=Brahman+Bhawan+Karol+Bagh+Delhi" target="_blank" class="text-orange-600 hover:text-orange-700 font-semibold mt-2 inline-block">Get Directions</a>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                                    <p class="text-base text-gray-700">+91 70118 95100</p>
                                    <a href="tel:+917011895100" class="text-orange-600 hover:text-orange-700 font-semibold">Call Now</a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                                    <p class="text-base text-gray-700">info@brahmanbhawan.com<br>booking@brahmanbhawan.com</p>
                                    <a href="mailto:info@brahmanbhawan.com" class="text-orange-600 hover:text-orange-700 font-semibold">Send Email</a>
                                </div>
                            </div>

                            <!-- Working Hours -->
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-50 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Working Hours</h3>
                                    <p class="text-base text-gray-700">24/7 Front Desk<br>Always available for our guests</p>
                                </div>
                            </div>
                        </div>

                        <!-- Map -->
                        <div class="mt-8">
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Find Us on Map</h3>
                            <div class="bg-gray-200 rounded-2xl overflow-hidden h-80 shadow-lg">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.5936537753447!2d77.18949731508236!3d28.649833482417665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d029c0f10e4a5%3A0x7a1c5f0a5b8e5f0a!2sKarol%20Bagh%2C%20New%20Delhi%2C%20Delhi!5e0!3m2!1sen!2sin!4v1699000000000!5m2!1sen!2sin" 
                                    width="100%" 
                                    height="100%" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Contact CTA -->
        <section class="bg-gray-50 py-12 md:py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-orange-600 rounded-lg p-8 md:p-12 text-center text-white max-w-4xl mx-auto">
                    <h2 class="text-3xl sm:text-4xl font-bold mb-3">Ready to Book Your Stay?</h2>
                    <p class="text-lg mb-8 opacity-95">Call us now for instant booking confirmation and special offers</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="tel:+917011895100" class="bg-white text-orange-600 hover:bg-gray-50 px-8 py-3 rounded-lg text-base font-semibold transition inline-flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            Call Now
                        </a>
                        <a href="https://wa.me/917011895100" target="_blank" class="bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-lg text-base font-semibold transition inline-flex items-center justify-center gap-2">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
