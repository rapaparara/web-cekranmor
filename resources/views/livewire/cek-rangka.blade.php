<div>
    <div class="mb-3">
        <h1>Periksa Kendaraan</h1>
        <p>Anda bisa mengecek kendaraan dengan hanya memasukkan nomor rangka atau nomor mesin.</p>
    </div>
    <div class="card mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="card-title mb-3"><i class="bi bi-search me-2"></i>Cek Noka Nosin</h3>
                    <form class="row g-3" wire:submit="save">
                        <div class="col-md-12">
                            <div class="form-floating mb-3">
                                <div class="form-floating mb-3">
                                    <input wire:model="form.nomor" type="name" class="form-control" id="name"
                                        placeholder="Cek No. Rangka / No. Mesin">
                                    <label for="name">Masukkan No. Rangka / No. Mesin</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success"><i
                                        class="bi bi-arrow-right me-1"></i>Periksa</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@if ($dataLaporans)
    <div class="card mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="card-title mb-3"><i class="bi bi-file-earmark-text me-2"></i>Detail Laporan</h3>
                    @foreach ($dataLaporans as $key => $value)
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Nomor Laporan</h5>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $value->no_laporan }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Pasal Pidana</h5>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $value->pasal_pidana }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Jenis Kendaraan</h5>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $value->jenis_kendaraan }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Warna</h5>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $value->warna }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h5>Nomor Rangka</h5>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $value->no_rangka }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Nomor Mesin</h5>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $value->no_mesin }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endif
</div>
