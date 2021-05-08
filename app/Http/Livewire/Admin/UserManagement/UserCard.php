<?php

namespace App\Http\Livewire\Admin\UserManagement;

use Livewire\Component;

class UserCard extends Component
{
    public $user;
    // public $url = "https://randomuser.me/api/portraits/men/10.jpg";
    public function render()
    {
        return view('livewire.admin.user-management.user-card', [
            'user'=>$this->user,
            // 'url' =>$this->url
            ]);
    }
}
