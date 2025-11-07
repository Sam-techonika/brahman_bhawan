<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    public function mount()
    {
        if (Auth::check()) {
            // already logged in
            return redirect()->route('home');
        }
    }

    public function login()
    {
        $this->validate();

        $credentials = ['email' => $this->email, 'password' => $this->password];

        if (Auth::attempt($credentials, (bool)$this->remember)) {
            session()->regenerate();
            return redirect()->intended(route('admin.booking.list'));
        }

        $this->addError('email', 'The provided credentials do not match our records.');
    }

    public function render()
    {
        return view('livewire.login');
    }
}
