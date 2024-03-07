<?php

namespace App\Livewire;

use App\Livewire\Forms\registerForm;
use Livewire\Component;

use Livewire\Attributes\Title;

#[Title('Register')]
class Register extends Component
{
    public registerForm $form;
    public function save(): void
    {
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.register');
    }
}
