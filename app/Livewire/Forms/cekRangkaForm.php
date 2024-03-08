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
        $laporan = laporan::where('no_rangka', 'LIKE', "%{$this->nomor}%")
            ->orWhere('no_mesin', 'LIKE', "%{$this->nomor}%")
            ->get();
        return $laporan;
    }
}
