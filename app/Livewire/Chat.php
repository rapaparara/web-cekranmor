<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Chat')]
class Chat extends Component
{
    public function render()
    {
        return view('livewire.chat');
    }
}
