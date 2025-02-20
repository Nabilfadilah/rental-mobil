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

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h6 class="m-0">Data Transaksi</h6>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">No Polisi</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Nama</th>
                            <th scope="col">No Ponsel</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Tanggal Pesan</th>
                            <th scope="col">Total</th>
                            <th scope="col">Lama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}.</th>
                                <td>{{ $data->mobil->nopolisi }}</td>
                                <td>{{ $data->mobil->merk }}</td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->ponsel }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->tgl_pesan }}</td>
                                <td class="text-right">{{ number_format($data->total, 0, ',', '.') }}</td>
                                <td>{{ $data->lama }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    @if ($data->status == 'WAIT')
                                        <button class="btn btn-success btn-sm"
                                            wire:click="proses({{ $data->id }})">PROSES</button>
                                    @elseif ($data->status == 'PROSES')
                                        <button class="btn btn-success btn-sm"
                                            wire:click="selesai({{ $data->id }})">SELESAI</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{ $transaksi->links() }}

            </div>
        </div>
    </div>
</div>
