@extends('layouts.ui')
@section('konten')
@foreach($datah as $d)
<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>{{$d->judul}}</h2>
      <ol>
        <li><a href="/">Beranda</a></li>
        <li>{{$d->judul}}</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section class="inner-page">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>{{$d->judul}}</h2>
      <p>{{$d->deskripsi}}</p>
    </div>

    {!!$d->isikonten!!}

  </div>
</section><!-- End Inner Page -->

</main><!-- End #main -->
@endforeach
@endsection