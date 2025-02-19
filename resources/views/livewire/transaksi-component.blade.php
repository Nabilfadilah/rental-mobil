<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded p-4 shadow-sm">

                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h4 class="m-0 fw-bold">Daftar Mobil</h4>
                </div>

                {{-- Grid untuk card --}}
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    @foreach ($mobil as $data)
                        <div class="col">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="{{ asset('assets/img/car.png') }}" class="card-img-top p-3" alt="Mobil"
                                    style="border-radius: 15px; object-fit: cover; height: 200px;">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $data->merk }}</h5>
                                    <p class="text-muted mb-2">No Polisi: <span
                                            class="fw-semibold">{{ $data->nopolisi }}</span></p>
                                    <p class="text-primary fs-5 fw-bold">Rp
                                        {{ number_format($data->harga, 0, ',', '.') }}</p>
                                    <p class="text-muted">Kapasitas: <span class="fw-semibold">{{ $data->kapasitas }}
                                            Orang</span></p>
                                </div>
                                <div class="card-footer bg-white border-0 text-center pb-3">
                                    <a href="#" class="btn btn-outline-success w-100">Pesan Sekarang</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Pagination jika diperlukan --}}
                {{-- {{ $mobil->links() }} --}}

            </div>
        </div>
    </div>
</div>
