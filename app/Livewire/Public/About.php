<?php

namespace App\Livewire\Public;

use Livewire\Attributes\Layout;
use Livewire\Component;

class About extends Component
{
    #[Layout('components.layouts.app', ['title' => 'About Us - Brahman Bhawan | Premium Hotel in Karol Bagh'])]
    public function render()
    {
        return view('livewire.public.about');
    }
}
