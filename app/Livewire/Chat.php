<?php

namespace App\Livewire;

use App\Models\percakapan;
use App\Models\pesan;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Chat')]
class Chat extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $user_id;
    public $user_role;

    public string $name = '';
    public string $email = '';
    public $katakunci = '';
    public $data_percakapan;
    public $data_pesan;
    public function mount()
    {
        $this->user_id = Session::get('user_id');
        $this->user_role = Session::get('user_role');
    }
    public function pilih($id)
    {
        $data_user = User::find($id);
        $this->name = $data_user->name;
        $this->email = $data_user->email;
        $this->data_percakapan = percakapan::where(function ($query) use ($id) {
            $query->where('user_id_1', $this->user_id)
                ->where('user_id_2', $id);
        })
            ->orWhere(function ($query) use ($id) {
                $query->where('user_id_1', $id)
                    ->where('user_id_2', $this->user_id);
            })
            ->get();
        $data_percakapan_id = $this->data_percakapan->pluck('id')->values();
        if ($data_percakapan_id->isNotEmpty()) $this->data_pesan = pesan::orderBy('created_at')->where('percakapan_id', $data_percakapan_id[0])->get();
    }
    public function render()
    {
        // $data_percakapan = percakapan::where('user_id_1', $this->user_id)->get();
        $data_percakapans = $this->data_percakapan;
        $data_pesans = $this->data_pesan;

        if ($this->user_role == 'admin') {
            $data_user = User::orderBy('name')->paginate(3);
        } else $data_user = User::where('role', 'admin')->paginate(3);
        return view('livewire.chat', [
            'dataPercakapan' => $data_percakapans,
            'dataUser' => $data_user,
            'dataPesan' => $data_pesans,
        ]);
    }
}
