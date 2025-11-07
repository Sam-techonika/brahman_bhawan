<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Booking;

class Header extends Component
{
    public $showBookingModal = false;
    public $showConfirmationModal = false;
    public $selectedRoom = '';
    public $name = '';
    public $email = '';
    public $phone = '';
    public $check_in = '';
    public $check_out = '';
    public $guests = 1;
    public $special_requests = '';
    public $bookingReference = '';

    protected $rules = [
        'selectedRoom' => 'required|string',
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'phone' => 'required|string|min:10',
        'check_in' => 'required|date|after_or_equal:today',
        'check_out' => 'required|date|after:check_in',
        'guests' => 'required|integer|min:1|max:10',
    ];

    public function openBookingModal()
    {
        $this->showBookingModal = true;
        $this->reset(['selectedRoom', 'name', 'email', 'phone', 'check_in', 'check_out', 'guests', 'special_requests']);
    }

    public function closeBookingModal()
    {
        $this->showBookingModal = false;
        $this->resetValidation();
    }

    public function closeConfirmationModal()
    {
        $this->showConfirmationModal = false;
    }

    public function submitBooking()
    {
        $this->validate();

        $booking = Booking::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'room_type' => $this->selectedRoom,
            'check_in' => $this->check_in,
            'check_out' => $this->check_out,
            'guests' => $this->guests,
            'special_requests' => $this->special_requests,
            'status' => 'pending'
        ]);

        $this->bookingReference = 'BK' . str_pad($booking->id, 6, '0', STR_PAD_LEFT);
        $this->closeBookingModal();
        $this->showConfirmationModal = true;
    }

    public function render()
    {
        return view('livewire.public.header');
    }
}
