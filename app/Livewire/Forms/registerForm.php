<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class registerForm extends Form
{
    #[\Livewire\Attributes\Rule(['required', 'string', 'min:3', 'max:255'])]
    public string $name = '';
    #[\Livewire\Attributes\Rule(['required', 'email'])]
    public string $email = '';
    #[\Livewire\Attributes\Rule(['required', 'min:6'])]
    public string $password = '';
    public function store(): void
    {
        if ($this->validate()) {
            $users = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role' => 'pengguna',
            ]);
            flash('Akun anda berhasil dibuat.', 'success');
            $this->reset();
        }
    }
}
