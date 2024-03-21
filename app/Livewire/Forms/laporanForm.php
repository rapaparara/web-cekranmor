<?php

namespace App\Livewire\Forms;

use App\Models\laporan;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Rule;

class laporanForm extends Form
{
    public ?laporan $edit;

    public string $laporan_id = '';

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
    #[Rule(['string', 'min:3', 'max:255'])]
    public string $ditangani = '';
    #[Rule(['string', 'min:3', 'max:255'])]
    public string $identitas_pemilik = '';
    #[Rule(['string', 'min:3', 'max:255'])]
    public string $jenis_kendaraan = '';
    #[Rule(['string', 'min:3', 'max:255'])]
    public string $nopol = '';
    #[Rule(['string', 'min:3', 'max:255'])]
    public string $warna = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $no_rangka = '';
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $no_mesin = '';

    public function edit($id)
    {
        $data = laporan::findOrFail($id);
        $this->no_laporan = $data->no_laporan;
        $this->tanggal_melapor = $data->tanggal_melapor;
        $this->nama_pelapor = $data->nama_pelapor;
        $this->umur = $data->umur;
        $this->alamat_pelapor = $data->alamat_pelapor;
        $this->waktu_kejadian = $data->waktu_kejadian;
        $this->tempat_kejadian = $data->tempat_kejadian;
        $this->pasal_pidana = $data->pasal_pidana;
        $this->identitas_pelapor = $data->identitas_pelapor;
        $this->identitas_korban = $data->identitas_korban;
        $this->uraian_kejadian = $data->uraian_kejadian;
        $this->unit = $data->unit;
        $this->perkembangan = $data->perkembangan;
        $this->ditangani = $data->ditangani;
        $this->identitas_pemilik = $data->identitas_pemilik;
        $this->jenis_kendaraan = $data->jenis_kendaraan;
        $this->nopol = $data->nopol;
        $this->warna = $data->warna;
        $this->no_rangka = $data->no_rangka;
        $this->no_mesin = $data->no_mesin;
        $this->laporan_id = $data->id;
    }
    public function update()
    {
        if ($this->validate()) {
            $data = Laporan::find($this->laporan_id);
            $data->update([
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
            flash('Laporan berhasil diubah.', 'success');
            $this->reset();
        }
    }
    public function delete($id)
    {
        $data = laporan::findOrFail($id);
        $this->laporan_id = $data->id;
    }
    public function deleteConfirm()
    {
        laporan::find($this->laporan_id)->delete();
        flash('Laporan berhasil dihapus.', 'success');
        $this->reset();
    }
    public function clear()
    {
        $this->no_laporan = '';
        $this->nama_pelapor = '';
        $this->tanggal_melapor = '';
        $this->umur = '';
        $this->alamat_pelapor = '';
        $this->waktu_kejadian = '';
        $this->tempat_kejadian = '';
        $this->pasal_pidana = '';
        $this->identitas_pelapor = '';
        $this->identitas_korban = '';
        $this->uraian_kejadian = '';
        $this->unit = '';
        $this->perkembangan = '';
        $this->ditangani = '';
        $this->identitas_pemilik = '';
        $this->jenis_kendaraan = '';
        $this->nopol = '';
        $this->warna = '';
        $this->no_rangka = '';
        $this->no_mesin = '';
    }

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
