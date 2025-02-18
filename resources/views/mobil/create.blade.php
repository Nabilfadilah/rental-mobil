<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Tambah Mobil</h6>
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nopolisi" class="form-label">No Polisi</label>
                        <input type="text" class="form-control" wire:model.defer="nopolisi">
                        @error('nopolisi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" class="form-control" wire:model.defer="merk">
                        @error('merk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Mobil</label>
                        <select class="form-select" wire:model.defer="jenis">
                            <option value="">--Pilih--</option>
                            <option value="sedan">Sedan</option>
                            <option value="MPV">MPV</option>
                            <option value="SUV">SUV</option>
                        </select>
                        @error('jenis')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kapasitas" class="form-label">Kapasitas</label>
                        <input type="number" class="form-control" wire:model.defer="kapasitas">
                        @error('kapasitas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" wire:model.defer="harga">
                        @error('harga')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" wire:model="foto" accept="image/*">

                        @if ($foto)
                            <img src="{{ $foto->temporaryUrl() }}" class="mt-2" width="150">
                        @endif

                        <div wire:loading wire:target="foto" class="text-warning">Uploading...</div>
                        @error('foto')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
