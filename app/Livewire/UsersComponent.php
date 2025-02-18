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

    protected $paginationTheme = "bootstrap";

    public $addPage, $editPage = false;
    public $userId, $nama, $email, $password, $role;

    // view user
    public function render()
    {
        $data['user'] = User::paginate(5);
        return view('livewire.users-component', $data);
    }

    // add user
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

    // delete user
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            session()->flash('success', 'Berhasil hapus data!');
            $this->resetPage(); // Agar daftar user ter-refresh
        }
    }

    // Update user
    public function update()
    {
        $this->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong!',
            'email.required' => 'Email tidak boleh kosong!',
            'role.required' => 'Role tidak boleh kosong!',
        ]);

        // Cari user berdasarkan ID
        $user = User::find($this->userId);
        if ($user) {
            $user->update([
                'name' => $this->nama,
                'email' => $this->email,
                'role' => $this->role,
            ]);

            session()->flash('success', 'Data berhasil diperbarui!');
            $this->reset();
            $this->editPage = false; // Tutup form edit setelah update
        }
    }

    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            $this->userId = $user->id;
            $this->nama = $user->name;
            $this->email = $user->email;
            $this->role = $user->role;
            $this->editPage = true;
        }
    }
}
