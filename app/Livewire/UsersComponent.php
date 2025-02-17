<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootsrap";

    public function render()
    {
        $data['user'] = User::paginate(5);
        return view('livewire.users-component', $data);
    }
}
