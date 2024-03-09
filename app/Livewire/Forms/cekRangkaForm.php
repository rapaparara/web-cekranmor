<?php

namespace App\Livewire\Forms;

use App\Models\laporan;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class cekRangkaForm extends Form
{
    #[Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $nomor = '';
    public function cek()
    {
        $validate = $this->validate();
        $laporan = laporan::where('no_rangka', $this->nomor)
            ->orWhere('no_mesin', $this->nomor)
            ->limit(1)
            ->get();
        return $laporan;
    }
}
