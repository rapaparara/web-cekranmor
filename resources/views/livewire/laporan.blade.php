<div>
    <div class="mb-3">
        <h4>Manajemen Laporan</h4>
    </div>
    <div class="card mb-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <x-flash-messages />
                    <h3 class="card-title mb-3"><i class="bi bi-file-earmark-text me-2"></i>Daftar Laporan</h3>
                    <button type="button" class="btn btn-sm btn-success mb-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop">
                        <span class="bi-plus-circle-fill me-1"></span>Tambah Data
                    </button>
                    <div class="table-container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">No. Laporan</th>
                                    <th scope="col">Nama Pelapor</th>
                                    <th scope="col">No. Rangka</th>
                                    <th scope="col">No. Mesin</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataLaporans as $key => $value)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $value->no_laporan }}</td>
                                        <td>{{ $value->nama_pelapor }}</td>
                                        <td>{{ $value->no_rangka }}</td>
                                        <td>{{ $value->no_mesin }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning"><small><span
                                                        class="bi-pencil-square"></span></small></button>
                                            <button type="button" class="btn btn-sm btn-danger"><small><span
                                                        class="bi-trash"></span></small></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Laporan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form wire:submit="save">
                        <div class="form-group mb-3">
                            <label for="no_laporan">Nomor Laporan</label>
                            <input wire:model="form.no_laporan" type="text" class="form-control" id="no_laporan"
                                name="no_laporan" required>
                            @error('form.no_laporan')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tanggal_melapor">Tanggal Melapor</label>
                            <input wire:model="form.tanggal_melapor" type="date" class="form-control"
                                id="tanggal_melapor" name="tanggal_melapor" required>
                            @error('form.tanggal_melapor')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama_pelapor">Nama Pelapor</label>
                            <input wire:model="form.nama_pelapor" type="text" class="form-control" id="nama_pelapor"
                                name="nama_pelapor" required>
                            @error('form.nama_pelapor')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="umur">Umur Pelapor</label>
                            <input wire:model="form.umur" type="text" class="form-control" id="umur"
                                name="umur" required>
                            @error('form.umur')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat_pelapor">Alamat Pelapor</label>
                            <input wire:model="form.alamat_pelapor" type="text" class="form-control"
                                id="alamat_pelapor" name="alamat_pelapor" required>
                            @error('form.alamat_pelapor')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="waktu_kejadian">Waktu Kejadian</label>
                            <input wire:model="form.waktu_kejadian" type="datetime-local" class="form-control"
                                id="waktu_kejadian" name="waktu_kejadian" required>
                            @error('form.waktu_kejadian')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="tempat_kejadian">Tempat Kejadian</label>
                            <input wire:model="form.tempat_kejadian" type="text" class="form-control"
                                id="tempat_kejadian" name="tempat_kejadian" required>
                            @error('form.tempat_kejadian')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="pasal_pidana">Pasal Pidana</label>
                            <input wire:model="form.pasal_pidana" type="text" class="form-control"
                                id="pasal_pidana" name="pasal_pidana" required>
                            @error('form.pasal_pidana')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="identitas_pelapor">Identitas Pelapor</label>
                            <input wire:model="form.identitas_pelapor" type="text" class="form-control"
                                id="identitas_pelapor" name="identitas_pelapor" required>
                            @error('form.identitas_pelapor')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="identitas_korban">Identitas Korban</label>
                            <input wire:model="form.identitas_korban" type="text" class="form-control"
                                id="identitas_korban" name="identitas_korban" required>
                            @error('form.identitas_korban')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="uraian_kejadian">Uraian Kejadian</label>
                            <textarea wire:model="form.uraian_kejadian" class="form-control" id="uraian_kejadian" name="uraian_kejadian"
                                required></textarea>
                            @error('form.uraian_kejadian')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="unit">Unit</label>
                            <input wire:model="form.unit" type="text" class="form-control" id="unit"
                                name="unit" required>
                            @error('form.unit')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="perkembangan">Perkembangan</label>
                            <input wire:model="form.perkembangan" type="text" class="form-control"
                                id="perkembangan" name="perkembangan" required>
                            @error('form.perkembangan')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="ditangani">Ditangani</label>
                            <input wire:model="form.ditangani" type="text" class="form-control" id="ditangani"
                                name="ditangani" required>
                            @error('form.ditangani')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="identitas_pemilik">Identitas Pemilik</label>
                            <input wire:model="form.identitas_pemilik" type="text" class="form-control"
                                id="identitas_pemilik" name="identitas_pemilik" required>
                            @error('form.identitas_pemilik')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="jenis_kendaraan">Jenis Kendaraan</label>
                            <input wire:model="form.jenis_kendaraan" type="text" class="form-control"
                                id="jenis_kendaraan" name="jenis_kendaraan" required>
                            @error('form.jenis_kendaraan')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nopol">Nomor Polisi Kendaraan</label>
                            <input wire:model="form.nopol" type="text" class="form-control" id="nopol"
                                name="nopol" required>
                            @error('form.nopol')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="warna">Warna Kendaraan</label>
                            <input wire:model="form.warna" type="text" class="form-control" id="warna"
                                name="warna" required>
                            @error('form.warna')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_rangka">Nomor Rangka Kendaraan</label>
                            <input wire:model="form.no_rangka" type="text" class="form-control" id="no_rangka"
                                name="no_rangka" required>
                            @error('form.no_rangka')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="no_mesin">Nomor Mesin Kendaraan</label>
                            <input wire:model="form.no_mesin" type="text" class="form-control" id="no_mesin"
                                name="no_mesin" required>
                            @error('form.no_mesin')
                                <small class="text-danger d-block mt-1">{{ $message }}</small>
                            @enderror
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
