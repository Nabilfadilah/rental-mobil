<?php

namespace App\Livewire;

use App\Models\Mobil;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class TransaksiComponent extends Component
{

    use WithPagination, WithoutUrlPagination;
    public $addPage, $lihatPage = false;

    public $user_id, $mobil_id, $nama, $ponsel, $alamat, $lama, $tgl_pesan, $total, $status, $harga;

    public function render()
    {
        $data['mobil'] = Mobil::paginate(5);
        return view('livewire.transaksi-component', $data);
        @dd($mobil);
    }

    // add transaksi
    public function create($id, $harga)
    {
        $this->mobil_id = $id;
        $this->harga = $harga;
        $this->addPage = true;
    }

    // untuk hitung harga mobil
    public function hitung()
    {
        $lama = $this->lama;
        $harga = $this->harga;
        $this->total = $lama * $harga;
    }

    // menyimpan data ke database
    public function store()
    {
        $this->validate([
            'nama' => 'required',
            'ponsel' => 'required',
            'alamat' => 'required',
            'lama' => 'required',
            'tgl_pesan' => 'required',
            'total' => 'required',
            // 'status' => 'required',
        ], [
            'nama.required' => 'Nama tidak boleh kosong!',
            'ponsel.required' => 'No Ponsel tidak boleh kosong!',
            'alamat.required' => 'Alamat tidak boleh kosong!',
            'lama.required' => 'Lama pemesanan tidak boleh kosong!',
            'tgl_pesan.required' => 'Tanggal Pemesanan tidak boleh kosong!',
            'total.required' => 'Total Pemesanan tidak boleh kosong!',
            // 'status.required' => 'Status tidak boleh kosong!',
        ]);

        // memfilter jika mobilnya sudah ada yang pesan!
        $cari = Transaksi::Where('mobil_id', $this->mobil_id)
            ->where('tgl_pesan', $this->tgl_pesan)
            ->where('status', '!=', 'SELESAI')->count();

        if ($cari == 1) {
            session()->flash('error', 'Maaf Mobil sudah ada yang memesan!');
        } else {
            Transaksi::create([
                'user_id' => Auth::id(),
                'mobil_id' => $this->mobil_id,
                'nama' => $this->nama,
                'ponsel' => $this->ponsel,
                'alamat' => $this->alamat,
                'lama' => $this->lama,
                'tgl_pesan' => $this->tgl_pesan,
                'total' => $this->total,
                'status' => 'WAIT',
            ]);

            session()->flash('success', 'Transaksi berhasil disimpan');
        }
        // untuk menghubungkan dengan component yang lain
        $this->dispatch('lihat-transaksi');

        $this->reset();
    }

    // lihat transaksi 
    public function lihat()
    {
        $data['transaksi'] = Transaksi::paginate(10);
        return view('transaksi.lihat');
    }
}
