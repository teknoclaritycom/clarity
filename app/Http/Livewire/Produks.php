<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;

class Produks extends Component
{
    public $produk_id;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;
    use WithPagination;
    public $isModalOpen = 0;

    public function render()
    {        
        return view('livewire.produk',[
            
            'listkonten' => Produk::latest()->paginate(5)
            
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
        $this->nomorwa = '';
        $this->price = '';
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
        $konten = Produk::findOrFail($id);
        $this->produk_id = $id;
        $this->judul = $konten->judul;
        $this->slug = $konten->slug;
        $this->deskripsi = $konten->deskripsi;
        $this->thumbnail = $konten->thumbnail;
        $this->isikonten = $konten->isikonten;
        $this->kategori = $konten->kategori;        
        $this->nomorwa = $konten->nomorwa;
        $this->price = $konten->price;

        $namafile = Produk::find($id);
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
            'nomorwa' => 'required',
            'price' => 'required',
        ]);
        $name = md5($this->thumbnail . microtime()).'.'.$this->thumbnail->extension();
        $storedImage = $this->thumbnail->storeAs('public/produk', $name);
        Produk::updateOrCreate(['id' => $this->produk_id], [
            'judul' => $this->judul,
            'deskripsi' => $this->deskripsi,
            'slug' => $this->slug,
            'isikonten' => $this->isikonten,
            'kategori' => $this->kategori,
            'nomorwa' => $this->nomorwa,
            'price' => $this->price,
            'thumbnail' => $name
        ]);

        session()->flash('message', $this->produk_id ? 'Update Berhasil.' : 'Posting ditambahkan.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function delete($id)
    {
        $namafile = Produk::find($id);
        $file = "public/produk/".$namafile->thumbnail;
        Storage::delete($file);
        Produk::find($id)->delete();
        return redirect()->route('adminproduk')
            ->with('success', 'Posting Telah di hapus');
    }
}
