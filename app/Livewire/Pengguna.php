<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Pengguna')]
class Pengguna extends Component
{
    public function render()
    {
        return view('livewire.pengguna');
    }
}
