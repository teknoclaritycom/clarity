<?php

namespace App\Http\Livewire;
use App\Models\Konten;
use App\Models\Produk;
use App\Models\Pageview;
use App\Models\Penjualan;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
public function render()
    {        
        $this->jumlahkonten = Konten::all()->count();
        $this->konten5 = Konten::all()->sortByDesc('id')->take(5);
        $this->produk5 = Produk::all()->sortByDesc('id')->take(5);
        $this->jumlahproduk = Produk::all()->count();
        $this->totalpageviews = Pageview::all();
        $this->penjualan = Penjualan::all()->count();
        $this->profit = Penjualan::all()->sum('pemasukan');
        return view('dashboard')->extends('layouts.sistem')->section('konten');
    }
}