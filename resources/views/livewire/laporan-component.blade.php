<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-light rounded h-100 p-4">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
                    <h6 class="m-0 mb-2 mb-md-0">Data Laporan Transaksi "Selesai"</h6>
                    <div class="row g-2 justify-content-end">
                        <div class="col-12 col-md-auto">
                            <button class="btn btn-outline-success btn-sm" wire:click="exportpdf">Export pdf</button>
                        </div>

                        <div class="col-12 col-md-auto">
                            <input type="date" wire:model="tanggal1" class="form-control" placeholder="Tanggal">
                        </div>
                        <div class="col-12 col-md-auto">
                            <input type="date" wire:model="tanggal2" class="form-control" placeholder="s/d Tanggal">
                        </div>
                        <div class="col-12 col-md-auto">
                            <button class="btn btn-primary btn-sm" wire:click="cari">Filter</button>
                        </div>
                    </div>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">No Polisi</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tgl Pesan</th>
                            <th scope="col">Total</th>
                            <th scope="col">Lama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($transaksi as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}.</th>
                                <td>{{ $data->mobil->nopolisi }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->tgl_pesan }}</td>
                                <td class="text-right">{{ number_format($data->total, 0, ',', '.') }}</td>
                                <td>{{ $data->lama }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">Data Laporan Belum Ada!</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>

                {{ $transaksi->links() }}

            </div>
        </div>
    </div>
</div>
