<?php

namespace App\Http\Livewire;

use App\Models\Halaman;
use App\Models\Konten;
use App\Models\Produk;
use Livewire\WithPagination;
use Livewire\Component;

class Ui extends Component
{
    // protected $paginationTheme = 'bootstrap';
    // use WithPagination;

    public function render()
    {
        return view('welcome',[
            
            'listkonten' => Konten::all()->sortByDesc('id')->take(6),
            'listproduk' => Produk::all()->sortByDesc('id')->take(6),
            
            ])->extends('layouts.ui')->section('konten');
    }

    public function peekh($slug)
    {
        return view('halamans',[

            'datah' => Halaman::all()->where('slug',$slug),

        ])->extends('layouts.ui')->section('konten');
    }

    public function listblog()
    {
        return view('listblog',[

            'blogposts' => Konten::latest()->paginate(6),
            'kategoriposts' => Konten::distinct('kategori')->select('kategori')->get(),
            'internetposts' => Konten::all()->where('kategori','=','Internet')->sortByDesc('id')->take(4)

        ])->extends('layouts.ui')->section('konten');
    }
    
}
