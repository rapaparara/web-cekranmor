<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;


class loginForm extends Form
{
    #[\Livewire\Attributes\Rule(['required', 'email'])]
    public string $email = '';
    #[\Livewire\Attributes\Rule(['required'])]
    public string $password = '';
    public function login()
    {
        $this->validate();
        $user = User::where('email', $this->email)->first();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session(['user_id' => $user->id]);
            session(['name' => $user->name]);
            session(['email' => $user->email]);
            session(['user_role' => $user->role]);
            if ($user->role == 'admin') {
                return redirect()->route('home.admin')->with('role', $user->role);
            } else {
                return redirect()->route('home.pengguna')->with('role', $user->role);
            }
        } else {
            flash('Email/password yang anda masukkan salah.', 'danger');
            return redirect()->route('login');
        }
    }
}
