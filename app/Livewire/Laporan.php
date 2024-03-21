<?php

namespace App\Livewire;

use App\Livewire\Forms\laporanForm;
use App\Models\laporan as ModelsLaporan;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Laporan')]
class Laporan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $showModal = false;
    public $editModal = false;
    public $katakunci = '';
    public laporanForm $form;
    public function save(): void
    {
        $this->form->store();
    }
    public function closeModal()
    {
        $this->showModal = false;
    }
    public function editStateModal()
    {
        $this->editModal = false;
        $this->form->clear();
    }
    #[On('edit-task')]
    public function edit($id)
    {
        $this->editModal = true;
        $this->form->edit($id);
    }
    public function update()
    {
        $this->form->update();
    }
    public function delete($id)
    {
        $this->form->delete($id);
    }
    public function deleteConfirm()
    {
        $this->form->deleteConfirm();
    }
    public function render()
    {
        if ($this->katakunci != null) {
            $data = ModelsLaporan::orderBy('no_laporan')
                ->where('no_laporan', 'like', '%' . $this->katakunci . '%')
                ->orWhere('nama_pelapor', 'like', '%' . $this->katakunci . '%')
                ->orWhere('no_rangka', 'like', '%' . $this->katakunci . '%')
                ->orWhere('no_mesin', 'like', '%' . $this->katakunci . '%')
                ->paginate(5);
        } else $data = ModelsLaporan::orderBy('no_laporan')->paginate(5);

        return view('livewire.laporan', ['dataLaporans' => $data]);
    }
}
