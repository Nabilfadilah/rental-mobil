<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

use function Livewire\store;

class UsersComponent extends Component
{
    use WithPagination, WithoutUrlPagination;
    use WithPagination;

    protected $paginationTheme = "bootstrap";

    public $addPage = false;
    public $nama, $email, $password, $role;

    public function render()
    {
        $data['user'] = User::paginate(5);
        return view('livewire.users-component', $data);
    }

    public function create()
    {
        $this->addPage = true;
    }

    public function store()
    {
        $this->validate(
            [
                'nama' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'role' => 'required',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong!',
                'email.required' => 'Email tidak boleh kosong!',
                'password.required' => 'Password tidak boleh kosong!',
                'role.required' => 'Role tidak boleh kosong!',
            ]
        );

        User::create([
            'name' => $this->nama,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'role' => $this->role
        ]);

        session()->flash('success', 'Berhasil simpan data!');
        $this->reset();
    }
}
