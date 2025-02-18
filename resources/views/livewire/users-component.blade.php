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
                    <h6 class="m-0">Basic Table</h6>
                    <button wire:click="create" class="btn btn-primary btn-sm">+ Tambah</button>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}.</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->role }}</td>
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
                        @endforeach
                    </tbody>
                </table>

                {{ $user->links() }}

                @if ($addPage)
                    @include('users.create')
                @endif

                @if ($editPage)
                    @include('users.edit')
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
