<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    /**
     * Create a new message instance.
     */
    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $subject = 'New Contact Message: ' . ($this->contact->subject ?? 'No Subject');

        return $this->subject($subject)
                    ->view('emails.contact_received')
                    ->with([
                        'contact' => $this->contact,
                    ]);
    }
}
