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
                    <h6 class="m-0">Table Mobil</h6>
                    <button wire:click="create" class="btn btn-primary btn-sm">+ Tambah</button>
                    {{-- <button wire:click="create({{ $data->mobil_id }})" class="btn btn-primary btn-sm">+ Tambah</button> --}}
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">No Polisi</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Kapasitas</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mobils as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}.</th>
                                <td>{{ $data->nopolisi }}</td>
                                <td>{{ $data->merk }}</td>
                                <td>{{ $data->jenis }}</td>
                                <td>{{ $data->kapasitas }}</td>
                                <td>Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                                <td>
                                    @if ($data->foto)
                                        <img src="{{ asset('storage/' . $data->foto) }}" width="80">
                                    @else
                                        <span class="text-danger">Tidak ada foto</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-info btn-sm text-white"
                                        wire:click="edit({{ $data->id }})">
                                        Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm text-white"
                                        onclick="confirmDelete({{ $data->id }})">
                                        Delete
                                    </button>

                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Data mobil tidak ada!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                {{ $mobils->links() }}

                @if ($addPage)
                    @include('mobil.create')
                @endif

                @if ($editPage)
                    @include('mobil.edit')
                @endif

            </div>
        </div>
    </div>
</div>
<!-- Table End -->

<script>
    function confirmDelete(id) {
        if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
            @this.call('destroy', id);
        }
    }
</script>
