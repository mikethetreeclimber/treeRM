<?php

namespace App\Http\Livewire\Admin\UserManagement;

use Livewire\Component;

class UserCard extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.admin.user-management.user-card', ['user'=>$this->user]);
    }
}
