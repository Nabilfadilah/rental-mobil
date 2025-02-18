<?php

namespace App\Livewire;

use App\Models\Mobil;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class MobilComponent extends Component
{
    use WithPagination, WithoutUrlPagination, WithFileUploads;
    protected $paginationTheme = "bootstrap";
    public $addPage, $editPage = false;
    public $id, $user_id, $nopolisi, $merk, $jenis, $kapasitas, $harga, $foto;

    public function render()
    {
        $data['mobil'] = Mobil::paginate(10);
        return view('livewire.mobil-component', $data);
    }
}
