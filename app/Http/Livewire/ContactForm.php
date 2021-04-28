<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactForm extends Component
{

    public $user;

    public function render()
    {
        return view('livewire.contact-form',['user' => $this->user]);
    }
}
