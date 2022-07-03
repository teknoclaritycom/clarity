<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Webset;

class Websets extends Component
{
    public $konten_id;

    public function render()
    {
        return view('livewire.websets',[

            'listkonten' => Webset::latest()->paginate(10),
            
            ])->extends('layouts.sistem')->section('konten');
    }
    private function resetCreateForm()
    {
        $this->namaweb = '';
        $this->author = '';
        $this->description = '';
        $this->iglink = '';
        $this->fblink = '';
        $this->ytlink = '';
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
        $konten = Webset::findOrFail($id);
        $this->konten_id = $id;
        $this->namaweb = $konten->namaweb;
        $this->author = $konten->author;
        $this->description = $konten->description;
        $this->iglink = $konten->iglink;
        $this->fblink = $konten->fblink;
        $this->ytlink = $konten->ytlink;

        $this->openModalPopover();
    }
    public function store()
    {
        $this->validate([
            'namaweb' => 'required',
            'description' => 'required',
            'author' => 'required',
            'iglink' => 'required',
            'fblink' => 'required',
            'ytlink' => 'required',
        ]);
        Webset::updateOrCreate(['id' => $this->konten_id], [
            'namaweb' => $this->namaweb,
            'author' => $this->author,
            'description' => $this->description,
            'iglink' => $this->iglink,
            'fblink' => $this->fblink,
            'ytlink' => $this->ytlink,
        ]);

        session()->flash('message', $this->konten_id ? 'Update Berhasil.' : 'Posting ditambahkan.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }
    public function delete($id)
    {        
        Webset::find($id)->delete();
        return redirect()->route('adminwebset')
            ->with('success', 'Posting Telah di hapus');
    }
}
