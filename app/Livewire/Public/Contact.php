<?php

namespace App\Livewire\Public;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Contact as ContactModel;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReceived;

class Contact extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'nullable|min:10',
        'subject' => 'required|min:5',
        'message' => 'required|min:10',
    ];

    public function submit()
    {
        $this->validate();

        $contact = ContactModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
            'status' => 'new'
        ]);

        // Send notification email to site owner
        try {
            Mail::to('brahminbhawandelhi@gmail.com')->cc('techonika.com@gmail.com')->send(new ContactReceived($contact));
        } catch (\Throwable $e) {
        }

        session()->flash('success', 'Thank you for contacting us! We have received your message and will get back to you shortly.');

        // Reset form fields
        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }

    #[Layout('components.layouts.app', ['title' => 'Contact Us - Brahman Bhawan | Get in Touch'])]
    public function render()
    {
        return view('livewire.public.contact');
    }
}
