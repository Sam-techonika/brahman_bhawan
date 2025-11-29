<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Booking;

class BookingReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $booking;

    /**
     * Create a new message instance.
     */
    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $reference = 'BK' . str_pad($this->booking->id, 6, '0', STR_PAD_LEFT);
        return $this->subject("New Booking Received ({$reference})")
                    ->view('emails.booking_received')
                    ->with(['booking' => $this->booking, 'reference' => $reference]);
    }
}
