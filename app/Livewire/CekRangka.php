<?php

namespace App\Livewire;

use App\Livewire\Forms\cekRangkaForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Periksa Kendaraan')]
class CekRangka extends Component
{
    public cekRangkaForm $form;
    public $data;
    public $dataLaporans;
    public function save()
    {
        $this->dataLaporans = $this->form->cek();
    }
    public function render()
    {
        return view('livewire.cek-rangka', [
            'dataLaporans' => $this->dataLaporans,
        ]);
    }
}
