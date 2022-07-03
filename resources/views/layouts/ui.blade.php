<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Web Teknik Informatika - IRVANJAYA.ID</title>
  <meta content="Web Teknik Informatika - IRVANJAYA.ID, Sebuah website Teknologi dan juga Dunia Koding Persembahan Muh. Irvan Jaya" name="description">
  <meta content="Muh Irvan Jaya, Irvan Jaya, Irvan Jaya Unmul, IRVANJAYA.ID, Blog Teknologi, Blog Tutorial" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('ui/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('ui/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ui/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('ui/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{asset('ui/assets/css/variables.css')}}" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{asset('ui/assets/css/main.css')}}" rel="stylesheet">
</head>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>IrvanJaya<span>.ID</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="/">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Koding</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            <li><a href="index.html">Android</a></li>
              <li><a href="index.html">CodeIgniter</a></li>
              <li><a href="index-2.html">Laravel</a></li>
              <li><a href="index-3.html">Javascript</a></li>
              <li><a href="index-4.html">Bootstrap</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Trik Bisnis</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            <li><a href="index.html">Belajar Search Engine Marketing</a></li>
              <li><a href="index.html">Marketing di Facebook</a></li>
              <li><a href="index-2.html">Martketing di Shopee</a></li>
              <li><a href="index-3.html">Marketing di TikTok</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Tutor Blog</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            <li><a href="index.html">Belajar Search Engine Optimization</a></li>
              <li><a href="index.html">Tutorial Blogspot</a></li>
              <li><a href="index-2.html">Tutorial Wordpress</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Trik Medsos</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
            <li><a href="index.html">Instagram</a></li>
              <li><a href="index.html">Twitter</a></li>
              <li><a href="index-2.html">Facebook</a></li>
              <li><a href="index-3.html">WhatsApp</a></li>
              <li><a href="index-4.html">Telegram</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->
  @yield('konten')
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>IRVANJAYA.ID</h3>
              <p>
                Kota Samarinda <br>
                Kalimantan Timur, Indonesia<br><br>
                <strong>WhatsApp:</strong> +62 8125 4732 879<br>
                <strong>Email:</strong> irvanjaya54@gmail.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Halaman Website</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="/halaman/disclaimer">Disclaimer</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/halaman/kontak">Kontak</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="/halaman/tentang">Tentang</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Web Circle</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="https://coretankode.com">CoretanKode</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="https://hexacrew.id" rel="dofollow">HexaCrew Samarinda</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>IrvanJaya.ID</span></strong>. Laravel Web Developer
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://twitter.com/coretankodecom" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="https://facebook.com/irvanj1" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/irvanjayas" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('ui/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('ui/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('ui/assets/js/main.js')}}"></script>

</body>

</html>