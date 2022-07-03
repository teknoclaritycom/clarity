<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Halaman;
use Livewire\WithPagination;

class Posts extends Component
{
    public $konten_id;
    use WithPagination;
    public $isModalOpen = 0;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.halaman',[

            'listkonten' => Halaman::latest()->paginate(10),
            
            ])->extends('layouts.sistem')->section('konten');
    }
    private function resetCreateForm()
    {
        $this->judul = '';
        $this->slug = '';
        $this->deskripsi = '';
        $this->isikonten = '';
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
        $konten = Halaman::findOrFail($id);
        $this->konten_id = $id;
        $this->judul = $konten->judul;
        $this->slug = $konten->slug;
        $this->deskripsi = $konten->deskripsi;
        $this->isikonten = $konten->isikonten;

        $this->openModalPopover();
    }
    public function store()
    {
        $this->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'slug' => 'required',
            'isikonten' => 'required',
        ]);
        Halaman::updateOrCreate(['id' => $this->konten_id], [
            'judul' => $this->judul,
            'slug' => $this->slug,
            'deskripsi' => $this->deskripsi,
            'isikonten' => $this->isikonten,
        ]);

        session()->flash('message', $this->konten_id ? 'Update Berhasil.' : 'Posting ditambahkan.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function delete($id)
    {        
        Halaman::find($id)->delete();
        return redirect()->route('adminhalaman')
            ->with('success', 'Posting Telah di hapus');
    }
}
