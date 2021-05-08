<?php

namespace App\Http\Livewire\Admin\UserManagement;

use Livewire\Component;
use Silber\Bouncer\Bouncer;
use Silber\Bouncer\Database\Role;

class CreateUserCard extends Component
{
    public function render()
    {
        $roles = Role::all();

        return view('livewire.admin.user-management.create-user-card', ['roles' => $roles]);
    }
}
