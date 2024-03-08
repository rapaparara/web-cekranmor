<?php

namespace App\Livewire\Forms;

use App\Models\laporan;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;

class laporanForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $no_laporan = '';
    #[Rule(['required'])]
    public string $tanggal_melapor = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $nama_pelapor = '';
    #[Rule(['required', 'string', 'min:1', 'max:2'])]
    public string $umur = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $alamat_pelapor = '';
    #[Rule(['required'])]
    public string $waktu_kejadian = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $tempat_kejadian = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $pasal_pidana = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $identitas_pelapor = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $identitas_korban = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $uraian_kejadian = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $unit = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $perkembangan = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $ditangani = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $identitas_pemilik = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $jenis_kendaraan = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $nopol = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $warna = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $no_rangka = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $no_mesin = '';

    public function store(): void
    {
        if ($this->validate()) {
            $laporan = Laporan::create([
                'no_laporan' => $this->no_laporan,
                'tanggal_melapor' => $this->tanggal_melapor,
                'nama_pelapor' => $this->nama_pelapor,
                'umur' => $this->umur,
                'alamat_pelapor' => $this->alamat_pelapor,
                'waktu_kejadian' => $this->waktu_kejadian,
                'tempat_kejadian' => $this->tempat_kejadian,
                'pasal_pidana' => $this->pasal_pidana,
                'identitas_pelapor' => $this->identitas_pelapor,
                'identitas_korban' => $this->identitas_korban,
                'uraian_kejadian' => $this->uraian_kejadian,
                'unit' => $this->unit,
                'perkembangan' => $this->perkembangan,
                'ditangani' => $this->ditangani,
                'identitas_pemilik' => $this->identitas_pemilik,
                'jenis_kendaraan' => $this->jenis_kendaraan,
                'nopol' => $this->nopol,
                'warna' => $this->warna,
                'no_rangka' => $this->no_rangka,
                'no_mesin' => $this->no_mesin,
            ]);
            flash('Laporan berhasil dibuat.', 'success');
            $this->reset();
        }
    }
}
