<?php

namespace App\Livewire\Admin;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Booking;

class BookingList extends Component
{
    use WithPagination;

    public $search = '';
    public $statusFilter = 'all';
    public $roomFilter = 'all';
    public $selectedBooking = null;
    public $showDetailsModal = false;
    public $showDeleteModal = false;
    public $bookingToDelete = null;

    protected $paginationTheme = 'tailwind';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingStatusFilter()
    {
        $this->resetPage();
    }

    public function updatingRoomFilter()
    {
        $this->resetPage();
    }

    public function viewBooking($bookingId)
    {
        $this->selectedBooking = Booking::findOrFail($bookingId);
        $this->showDetailsModal = true;
    }

    public function closeDetailsModal()
    {
        $this->showDetailsModal = false;
        $this->selectedBooking = null;
    }

    public function confirmDelete($bookingId)
    {
        $this->bookingToDelete = $bookingId;
        $this->showDeleteModal = true;
    }

    public function cancelDelete()
    {
        $this->showDeleteModal = false;
        $this->bookingToDelete = null;
    }

    public function deleteBooking()
    {
        if ($this->bookingToDelete) {
            Booking::findOrFail($this->bookingToDelete)->delete();
            session()->flash('message', 'Booking deleted successfully!');
            $this->showDeleteModal = false;
            $this->bookingToDelete = null;
        }
    }

    public function updateStatus($bookingId, $status)
    {
        $booking = Booking::findOrFail($bookingId);
        $booking->update(['status' => $status]);
        
        session()->flash('message', 'Booking status updated successfully!');
    }

    #[Layout('components.layouts.admin', ['title' => 'Booking Management'])]
    public function render()
    {
        $query = Booking::query();

        // Search filter
        if ($this->search) {
            $query->where(function($q) {
                $q->where('name', 'like', '%' . $this->search . '%')
                  ->orWhere('email', 'like', '%' . $this->search . '%')
                  ->orWhere('phone', 'like', '%' . $this->search . '%');
            });
        }

        // Status filter
        if ($this->statusFilter !== 'all') {
            $query->where('status', $this->statusFilter);
        }

        // Room filter
        if ($this->roomFilter !== 'all') {
            $query->where('room_type', $this->roomFilter);
        }

        $bookings = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.admin.booking-list', [
            'bookings' => $bookings
        ]);
    }
}
