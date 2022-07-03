@extends('layouts.ui')
@section('konten')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Artikel Menarik</h2>
          <ol>
            <li><a href="/">Beranda</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8">

            <div class="row gy-4 posts-list">

                @foreach($blogposts as $posts)
              <div class="col-lg-6">
                <article class="d-flex flex-column">

                  <div class="post-img">
                    <img src="{{ asset('storage/post/' . $posts->thumbnail) }}" alt="" class="img-fluid">
                  </div>

                  <h2 class="title">
                    <a href="blog-details.html">{{$posts->judul}}</a>
                  </h2>

                  <div class="meta-top">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">{{$posts->penulis}}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html">{{$posts->updated_at->format('j F, Y')}}</a></li>
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      {{$posts->deskripsi}}
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="/blog/{{$posts->slug}}">Baca Selengkapnya</a>
                  </div>

                </article>
              </div><!-- End post list item -->
            @endforeach
            </div><!-- End blog posts list -->       
            {{ $blogposts->links('vendor.pagination.blog-pagination') }}   
          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Kategori</h3>
                <ul class="mt-3">
                  @foreach($kategoriposts as $kategori)
                  <li><a href="/blog/kategori/{{$kategori->kategori}}">{{$kategori->kategori}}</a></li>
                  @endforeach
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item recent-posts">
                <h3 class="sidebar-title">Trik Internet</h3>

                <div class="mt-3">

                @foreach($internetposts as $internet)
                  <div class="post-item">
                    <img src="{{ asset('storage/post/' . $internet->thumbnail) }}" alt="" class="flex-shrink-0">
                    <div>
                      <h4><a href="/blog/{{$internet->slug}}">{{$internet->judul}}</a></h4>
                      {{$posts->updated_at->format('j F, Y')}}
                    </div>
                  </div><!-- End recent post item-->
                  
                @endforeach

                </div>

              </div><!-- End sidebar recent posts-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Tags</h3>
                <ul class="mt-3">
                  <li><a href="#">App</a></li>
                  <li><a href="#">IT</a></li>
                  <li><a href="#">Business</a></li>
                  <li><a href="#">Mac</a></li>
                  <li><a href="#">Design</a></li>
                  <li><a href="#">Office</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Studio</a></li>
                  <li><a href="#">Smart</a></li>
                  <li><a href="#">Tips</a></li>
                  <li><a href="#">Marketing</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->
            
          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
  @endsection