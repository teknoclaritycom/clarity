<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Konten;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Kontens extends Component
{
    public $konten_id;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;
    use WithPagination;
    public $isModalOpen = 0;
    public function render()
    {        
        return view('livewire.konten',[

            'listkonten' => Konten::latest()->paginate(5),
            
            ])->extends('layouts.sistem')->section('konten');
    }
    private function resetCreateForm()
    {
        $this->judul = '';
        $this->slug = '';
        $this->deskripsi = '';
        $this->thumbnail = '';
        $this->isikonten = '';
        $this->kategori = '';
        $this->penulis = Auth()->user()->name;
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
        $konten = Konten::findOrFail($id);
        $this->konten_id = $id;
        $this->judul = $konten->judul;
        $this->slug = $konten->slug;
        $this->deskripsi = $konten->deskripsi;
        $this->thumbnail = $konten->thumbnail;
        $this->isikonten = $konten->isikonten;
        $this->kategori = $konten->kategori;
        $this->penulis = $konten->penulis;

        $namafile = Konten::find($id);
        $file = $namafile->thumbnail;
        Storage::delete($file);
        $this->openModalPopover();
    }
    public function store()
    {
        $this->validate([
            'judul' => 'required',
            'thumbnail' =>'required',
            'deskripsi' => 'required',
            'slug' => 'required',
            'kategori' => 'required',
            'isikonten' => 'required',
            'penulis' => 'required',
        ]);
        $name = md5($this->thumbnail . microtime()).'.'.$this->thumbnail->extension();
        $storedImage = $this->thumbnail->storeAs('public/post', $name);
        Konten::updateOrCreate(['id' => $this->konten_id], [
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'slug' => $this->slug,
            'isikonten' => $this->isikonten,
            'kategori' => $this->kategori,
            'penulis' => $this->penulis,
            'thumbnail' => $name
        ]);

        session()->flash('message', $this->konten_id ? 'Update Berhasil.' : 'Posting ditambahkan.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function delete($id)
    {
        $namafile = Konten::find($id);
        $file = "public/post/".$namafile->thumbnail;
        Storage::delete($file);
        Konten::find($id)->delete();
        return redirect()->route('adminkonten')
            ->with('success', 'Posting Telah di hapus');
    }
}
