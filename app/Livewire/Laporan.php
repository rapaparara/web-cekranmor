<?php

namespace App\Livewire;

use App\Livewire\Forms\laporanForm;
use App\Models\laporan as ModelsLaporan;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Laporan')]
class Laporan extends Component
{
    public $dataLaporans;
    public $showModal = false;
    public laporanForm $form;
    public function save(): void
    {
        $this->form->store();
    }
    public function closeModal()
    {
        $this->showModal = false;
    }
    public function render()
    {
        $this->dataLaporans = ModelsLaporan::orderBy('no_laporan')->get();
        return view('livewire.laporan');
    }
}
