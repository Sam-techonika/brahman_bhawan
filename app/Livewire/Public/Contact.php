<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Contact as ContactModel;

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

        ContactModel::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
            'status' => 'new'
        ]);

        session()->flash('success', 'Thank you for contacting us! We have received your message and will get back to you shortly.');

        // Reset form fields
        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
    }

    public function render()
    {
        return view('livewire.public.contact');
    }
}
