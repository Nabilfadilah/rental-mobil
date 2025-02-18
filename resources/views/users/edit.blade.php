<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        {{-- Basic Form --}}
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Edit User</h6>
                <form wire:submit.prevent="update">
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" wire:model="nama" id="nama">
                        @error('nama')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label">Email address</label>
                        <input type="email" class="form-control" wire:model="email" id="email">
                        @error('email')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password (kosongkan jika tidak diubah)</label>
                        <input type="password" class="form-control" wire:model="password" id="password">
                        @error('password')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="Role" class="form-label">Role</label>
                        <select class="form-select" wire:model="role" id="role">
                            <option value="">--Pilih--</option>
                            <option value="admin">admin</option>
                            <option value="pimpinan">pimpinan</option>
                        </select>
                        @error('role')
                            <div class="form-text text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                </form>

            </div>
        </div>
    </div>
</div>
