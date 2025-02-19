<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        {{-- Basic Form --}}
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add Transaksi</h6>
                <form>
                    {{-- nama pemesanan --}}
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" wire:model="nama" id="nama"
                            value="{{ @old('nama') }}">
                        @error('nama')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- no telepon --}}
                    <div class="mb-3">
                        <label for="ponsel" class="form-label">Nomor Ponsel</label>
                        <input type="text" class="form-control" wire:model="ponsel" id="ponsel"
                            value="{{ @old('ponsel') }}">
                        @error('ponsel')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- alamat --}}
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Pemesanan</label>
                        <input type="text" class="form-control" wire:model="alamat" id="alamat"
                            value="{{ @old('alamat') }}">
                        @error('alamat')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- lama pemesan --}}
                    <div class="mb-3">
                        <label for="lama" class="form-label">Lama Pemesanan</label>
                        <input type="number" class="form-control" wire:change="hitung" wire:model="lama" id="lama"
                            value="{{ @old('lama') }}">
                        @error('lama')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- tgl pesan --}}
                    <div class="mb-3">
                        <label for="tgl_pesan" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" wire:model="tgl_pesan" id="tgl_pesan"
                            value="{{ @old('tgl_pesan') }}">
                        @error('tgl_pesan')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- total harga --}}
                    <div class="mb-3">
                        <label for="total" class="form-label">Total Harga Pemesanan</label>
                        <input type="text" class="form-control" wire:model="total" id="total"
                            value="{{ @old('total') }}">
                        @error('total')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- status --}}
                    {{-- <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" wire:model="status" id="status">
                            <option value="">--Pilih--</option>
                            <option value="WAIT">Tunggu</option>
                            <option value="PROSES">Proses</option>
                            <option value="SELESAI">Selesai</option>
                        </select>
                        @error('status')
                            <div class="form-text text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}

                    {{-- {{ $total }} --}}
                    <button type="button" wire:click.prevent="store" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
