<?php

namespace App\Livewire;

use App\Livewire\Forms\loginForm;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
class Login extends Component
{
    public loginForm $form;
    public function render()
    {
        return view('livewire.login');
    }
    public function login()
    {
        $this->form->login();
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
