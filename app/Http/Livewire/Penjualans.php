<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Penjualan;
use Livewire\WithPagination;

class Penjualans extends Component
{
    public $pemasukan_id;
    use WithPagination;
    public $isModalOpen = 0;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.penjualans',[

            'listkonten' => Penjualan::latest()->paginate(10),
            
            ])->extends('layouts.sistem')->section('konten');
    }
    private function resetCreateForm()
    {
        $this->judul = '';
        $this->pemasukan = '';
    }
    public function create()
    {
        $this->resetCreateForm();
        $this->openModalPopover();
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }
    public function edit($id)
    {
        $konten = Penjualan::findOrFail($id);
        $this->pemasukan_id = $id;
        $this->judul = $konten->judul;
        $this->pemasukan = $konten->pemasukan;

        $this->openModalPopover();
    }
    public function store()
    {
        $this->validate([
            'judul' => 'required',
            'pemasukan' => 'required',
        ]);
        Penjualan::updateOrCreate(['id' => $this->pemasukan_id], [
            'judul' => $this->judul,
            'pemasukan' => $this->pemasukan,
        ]);

        session()->flash('message', $this->pemasukan_id ? 'Update Berhasil.' : 'Posting ditambahkan.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function delete($id)
    {        
        Penjualan::find($id)->delete();
        return redirect()->route('adminpenjualan')
            ->with('success', 'Posting Telah di hapus');
    }
}
