<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Home Admin')]
class Admin extends Component
{
    public function render()
    {
        return view('livewire.admin');
    }
}
