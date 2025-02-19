<?php

namespace App\Livewire;

use App\Models\Mobil;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class TransaksiComponent extends Component
{

    use WithPagination, WithoutUrlPagination;
    public $addPage, $editPage = false;

    public function render()
    {
        $data['mobil'] = Mobil::paginate(5);
        return view('livewire.transaksi-component', $data);
    }
}
