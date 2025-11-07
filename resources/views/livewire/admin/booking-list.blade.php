<div>
    <!-- Page Header -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Booking Management</h1>
        <p class="text-gray-600 mt-1">View and manage all room bookings</p>
    </div>

    <!-- Success Message -->
    @if (session()->has('message'))
    <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded-lg">
        <div class="flex items-center">
            <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <p class="text-green-700 font-medium">{{ session('message') }}</p>
        </div>
    </div>
    @endif

    <!-- Filters and Search -->
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Search -->
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <div class="relative">
                    <input type="text" 
                           wire:model.live.debounce.300ms="search" 
                           placeholder="Search by name, email, or phone..."
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Status Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select wire:model.live="statusFilter" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option value="all">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="confirmed">Confirmed</option>
                    <option value="cancelled">Cancelled</option>
                </select>
            </div>

            <!-- Room Type Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Room Type</label>
                <select wire:model.live="roomFilter" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option value="all">All Rooms</option>
                    <option value="Private Double Room">Private Double</option>
                    <option value="Deluxe Room">Deluxe Room</option>
                    <option value="Suite Room">Suite Room</option>
                    <option value="Twin Double Room">Twin Double</option>
                    <option value="Family Suite">Family Suite</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Bookings Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Booking ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guest Details</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Room Type</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in / Check-out</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($bookings as $booking)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-semibold text-gray-900">BK{{ str_pad($booking->id, 6, '0', STR_PAD_LEFT) }}</div>
                            <div class="text-xs text-gray-500">{{ $booking->created_at->format('d M, Y') }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">{{ substr($booking->name, 0, 1) }}</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">{{ $booking->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $booking->email }}</div>
                                    <div class="text-xs text-gray-400">{{ $booking->phone }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $booking->room_type }}</div>
                            <div class="text-xs text-gray-500">{{ $booking->guests }} {{ $booking->guests == 1 ? 'Guest' : 'Guests' }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ \Carbon\Carbon::parse($booking->check_in)->format('d M, Y') }}</div>
                            <div class="text-xs text-gray-500">to {{ \Carbon\Carbon::parse($booking->check_out)->format('d M, Y') }}</div>
                            <div class="text-xs text-gray-400 mt-1">{{ \Carbon\Carbon::parse($booking->check_in)->diffInDays($booking->check_out) }} nights</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($booking->status == 'pending')
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Pending
                                </span>
                            @elseif($booking->status == 'confirmed')
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Confirmed
                                </span>
                            @else
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    Cancelled
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex items-center space-x-2">
                                <button wire:click="viewBooking({{ $booking->id }})" 
                                        class="text-blue-600 hover:text-blue-900 p-1 rounded hover:bg-blue-50 transition-colors"
                                        title="View Details">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                                
                                @if($booking->status == 'pending')
                                <button wire:click="updateStatus({{ $booking->id }}, 'confirmed')" 
                                        class="text-green-600 hover:text-green-900 p-1 rounded hover:bg-green-50 transition-colors"
                                        title="Confirm Booking">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </button>
                                @endif
                                
                                @if($booking->status != 'cancelled')
                                <button wire:click="updateStatus({{ $booking->id }}, 'cancelled')" 
                                        class="text-red-600 hover:text-red-900 p-1 rounded hover:bg-red-50 transition-colors"
                                        title="Cancel Booking">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                                @endif
                                
                                <button wire:click="confirmDelete({{ $booking->id }})" 
                                        class="text-gray-600 hover:text-gray-900 p-1 rounded hover:bg-gray-50 transition-colors"
                                        title="Delete Booking">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-12 text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No bookings found</h3>
                            <p class="mt-1 text-sm text-gray-500">Try adjusting your search or filter criteria.</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            {{ $bookings->links() }}
        </div>
    </div>

    <!-- Booking Details Modal -->
    @if($showDetailsModal && $selectedBooking)
    <div class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-3xl overflow-hidden">
                
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-8 py-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-white">Booking Details</h3>
                            <p class="text-orange-100 text-sm mt-1">Reference: BK{{ str_pad($selectedBooking->id, 6, '0', STR_PAD_LEFT) }}</p>
                        </div>
                        <button wire:click="closeDetailsModal" class="text-white hover:bg-white/20 rounded-full p-2 transition-colors">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="px-8 py-6 space-y-6">
                    
                    <!-- Guest Information -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            Guest Information
                        </h4>
                        <div class="bg-gray-50 rounded-lg p-4 grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">Full Name</p>
                                <p class="text-base font-semibold text-gray-900">{{ $selectedBooking->name }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Email Address</p>
                                <p class="text-base font-semibold text-gray-900">{{ $selectedBooking->email }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Phone Number</p>
                                <p class="text-base font-semibold text-gray-900">{{ $selectedBooking->phone }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Number of Guests</p>
                                <p class="text-base font-semibold text-gray-900">{{ $selectedBooking->guests }} {{ $selectedBooking->guests == 1 ? 'Guest' : 'Guests' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Booking Information -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            Booking Information
                        </h4>
                        <div class="bg-gray-50 rounded-lg p-4 grid grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm text-gray-600">Room Type</p>
                                <p class="text-base font-semibold text-gray-900">{{ $selectedBooking->room_type }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Status</p>
                                <div>
                                    @if($selectedBooking->status == 'pending')
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    @elseif($selectedBooking->status == 'confirmed')
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Confirmed
                                        </span>
                                    @else
                                        <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                            Cancelled
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Check-in Date</p>
                                <p class="text-base font-semibold text-gray-900">{{ \Carbon\Carbon::parse($selectedBooking->check_in)->format('d M, Y') }}</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Check-out Date</p>
                                <p class="text-base font-semibold text-gray-900">{{ \Carbon\Carbon::parse($selectedBooking->check_out)->format('d M, Y') }}</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-sm text-gray-600">Duration</p>
                                <p class="text-base font-semibold text-gray-900">{{ \Carbon\Carbon::parse($selectedBooking->check_in)->diffInDays($selectedBooking->check_out) }} Nights</p>
                            </div>
                        </div>
                    </div>

                    <!-- Special Requests -->
                    @if($selectedBooking->special_requests)
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-4 flex items-center">
                            <svg class="h-5 w-5 mr-2 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                            </svg>
                            Special Requests
                        </h4>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <p class="text-gray-700">{{ $selectedBooking->special_requests }}</p>
                        </div>
                    </div>
                    @endif

                    <!-- Booking Date -->
                    <div class="border-t border-gray-200 pt-4">
                        <p class="text-sm text-gray-600">Booking Created: <span class="font-medium text-gray-900">{{ $selectedBooking->created_at->format('d M, Y h:i A') }}</span></p>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex justify-end space-x-3 pt-4">
                        <button wire:click="closeDetailsModal" 
                                class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors">
                            Close
                        </button>
                        @if($selectedBooking->status == 'pending')
                        <button wire:click="updateStatus({{ $selectedBooking->id }}, 'confirmed')" 
                                class="px-6 py-2 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white rounded-lg font-medium transition-colors shadow-lg">
                            Confirm Booking
                        </button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- Delete Confirmation Modal -->
    @if($showDeleteModal)
    <div class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-md overflow-hidden">
                
                <!-- Modal Header -->
                <div class="bg-gradient-to-r from-red-500 to-red-600 px-8 py-6 text-center">
                    <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-white/20 backdrop-blur-sm mb-4">
                        <svg class="h-10 w-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">
                        Delete Booking?
                    </h3>
                </div>

                <!-- Modal Content -->
                <div class="px-8 py-6">
                    <p class="text-center text-gray-700 text-lg mb-6">
                        Are you sure you want to delete this booking? This action cannot be undone.
                    </p>

                    <!-- Action Buttons -->
                    <div class="flex justify-center space-x-3">
                        <button wire:click="cancelDelete" 
                                class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 font-medium transition-colors">
                            Cancel
                        </button>
                        <button wire:click="deleteBooking" 
                                class="px-6 py-3 bg-gradient-to-r from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 text-white rounded-lg font-medium transition-colors shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            Delete Booking
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
