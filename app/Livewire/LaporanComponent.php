<?php

namespace App\Livewire;

use App\Models\Transaksi;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class LaporanComponent extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $tanggal1, $tanggal2;

    #[On('lihat-laporan')]
    public function render()
    {
        // proses filter tgl pesan
        if ($this->tanggal2 != "") {
            $data['transaksi'] = Transaksi::where('status', 'SELESAI')
                ->whereBetween('tgl_pesan', [$this->tanggal1, $this->tanggal2])
                ->paginate(10);
        } else {
            $data['transaksi'] = Transaksi::where('status', 'SELESAI')->paginate(10);
        }

        return view('livewire.laporan-component', $data);
    }

    // proses filter data berdasarkan tgl
    public function cari()
    {
        $this->dispatch('lihat-laporan');
    }
}
