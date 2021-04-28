<?php

namespace App\Http\Livewire\Admin\UserManagement;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public function render()
    {
        $users = User::query()->latest()->simplePaginate(10);
        return view('livewire.admin.user-management.users-table', ['users' => $users]);
    }
}
