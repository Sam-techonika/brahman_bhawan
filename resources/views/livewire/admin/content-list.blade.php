<div>
    <!-- Page Header -->
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Contact Messages</h1>
        <p class="text-gray-600 mt-1">View and manage all contact form submissions</p>
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
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                <div class="relative">
                    <input type="text" 
                           wire:model.live.debounce.300ms="search" 
                           placeholder="Search by name, email, subject, or message..."
                           class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                <select wire:model.live="statusFilter" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                    <option value="all">All Status</option>
                    <option value="new">New</option>
                    <option value="read">Read</option>
                    <option value="replied">Replied</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Contact Messages Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Contact Details</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Subject</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Message Preview</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($contacts as $contact)
                    <tr class="hover:bg-gray-50 transition-colors {{ $contact->status === 'new' ? 'bg-blue-50/30' : '' }}">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm font-semibold text-gray-900">{{ $contact->created_at->format('d M, Y') }}</div>
                            <div class="text-xs text-gray-500">{{ $contact->created_at->format('h:i A') }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 h-10 w-10 bg-gradient-to-r from-orange-500 to-orange-600 rounded-full flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">{{ substr($contact->name, 0, 1) }}</span>
                                </div>
                                <div class="ml-3">
                                    <div class="text-sm font-medium text-gray-900">{{ $contact->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $contact->email }}</div>
                                    @if($contact->phone)
                                    <div class="text-xs text-gray-400">{{ $contact->phone }}</div>
                                    @endif
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">{{ Str::limit($contact->subject, 30) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-600">{{ Str::limit($contact->message, 60) }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if($contact->status == 'new')
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    New
                                </span>
                            @elseif($contact->status == 'read')
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Read
                                </span>
                            @else
                                <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Replied
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                            <div class="flex items-center space-x-2">
                                <button wire:click="viewContact({{ $contact->id }})" 
                                        class="text-blue-600 hover:text-blue-900 p-1 rounded hover:bg-blue-50 transition-colors">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                                <button wire:click="deleteContact({{ $contact->id }})" 
                                        onclick="return confirm('Delete this message?')" 
                                        class="text-gray-600 hover:text-gray-900 p-1 rounded hover:bg-gray-50 transition-colors">
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">No messages found</h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            {{ $contacts->links() }}
        </div>
    </div>

    <!-- Details Modal -->
    @if($showDetailsModal && $selectedContact)
    <div class="fixed inset-0 z-50 overflow-y-auto backdrop-blur-sm" style="background-color: rgba(0, 0, 0, 0.6);">
        <div class="flex items-center justify-center min-h-screen px-4 py-8">
            <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-2xl">
                <div class="bg-gradient-to-r from-orange-500 to-orange-600 px-8 py-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-2xl font-bold text-white">Contact Message</h3>
                            <p class="text-orange-100 text-sm mt-1">{{ $selectedContact->created_at->format('d M, Y h:i A') }}</p>
                        </div>
                        <button wire:click="closeDetailsModal" class="text-white hover:bg-white/20 rounded-full p-2">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-8 py-6 space-y-6">
                    <div class="bg-gray-50 rounded-lg p-4 space-y-3">
                        <div><span class="text-sm text-gray-600">Name:</span> <span class="font-semibold text-gray-900">{{ $selectedContact->name }}</span></div>
                        <div><span class="text-sm text-gray-600">Email:</span> <a href="mailto:{{ $selectedContact->email }}" class="font-semibold text-blue-600">{{ $selectedContact->email }}</a></div>
                        @if($selectedContact->phone)
                        <div><span class="text-sm text-gray-600">Phone:</span> <span class="font-semibold text-gray-900">{{ $selectedContact->phone }}</span></div>
                        @endif
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Subject</h4>
                        <p class="text-gray-700">{{ $selectedContact->subject }}</p>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-900 mb-2">Message</h4>
                        <p class="text-gray-700 whitespace-pre-line">{{ $selectedContact->message }}</p>
                    </div>
                    <div class="flex justify-end space-x-3 pt-4 border-t">
                        <button wire:click="closeDetailsModal" class="px-6 py-2 border rounded-lg hover:bg-gray-50">Close</button>
                        <a href="mailto:{{ $selectedContact->email }}" class="px-6 py-2 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-lg">Reply</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
