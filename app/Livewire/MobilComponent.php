<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Models\Mobil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MobilComponent extends Component
{
    use WithPagination, WithFileUploads;

    public $id, $user_id, $nopolisi, $merk, $jenis, $kapasitas, $harga, $foto;
    public $addPage, $editPage = false;

    protected $paginationTheme = "bootstrap";

    protected $rules = [
        'nopolisi' => 'required|string|max:20|unique:mobils,nopolisi',
        'merk' => 'required|string|max:50',
        'jenis' => 'required|in:sedan,MPV,SUV',
        'kapasitas' => 'required|integer|min:1',
        'harga' => 'required|numeric|min:0',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
    ];

    // list mobil
    public function render()
    {
        return view('livewire.mobil-component', [
            'mobils' => Mobil::latest()->paginate(10),
        ]);
    }
    // add mobil
    public function create()
    {
        $this->resetInputFields();
        $this->addPage = true;
    }

    public function store()
    {
        $this->validate();

        $imagePath = null;
        if ($this->foto) {
            $imagePath = $this->foto->store('mobils', 'public'); // Simpan di storage/app/public/mobils
        }

        Mobil::create([
            'user_id' => Auth::id(),
            'nopolisi' => $this->nopolisi,
            'merk' => $this->merk,
            'jenis' => $this->jenis,
            'kapasitas' => $this->kapasitas,
            'harga' => $this->harga,
            'foto' => $imagePath,
        ]);

        session()->flash('message', 'Mobil berhasil ditambahkan.');

        $this->resetInputFields();
        $this->addPage = false;
    }

    private function resetInputFields()
    {
        $this->nopolisi = '';
        $this->merk = '';
        $this->jenis = '';
        $this->kapasitas = '';
        $this->harga = '';
        $this->foto = null;
    }
}
