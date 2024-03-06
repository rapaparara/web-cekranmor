<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Cek Rangka')]
class CekRangka extends Component
{
    public function render()
    {
        return view('livewire.cek-rangka');
    }
}
