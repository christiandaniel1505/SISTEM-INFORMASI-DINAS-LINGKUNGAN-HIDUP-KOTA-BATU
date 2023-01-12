<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="TemplateMo">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>DINAS LINGKUNGAN HIDUP KOTA BATU</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-finance-business.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
<!--

Finance Business TemplateMo

https://templatemo.com/tm-545-finance-business

-->
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    @section('header')
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-clock-o"></i>Mon-Fri 08:00-16:00</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>087-778-609-303</a></li>
              <li><a href="#"><i class="fa fa-email"></i>info@dinaslingkunganhidup.go.id</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="https://www.facebook.com/DinasLingkunganHidupKotaBatu/"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/dlh_kotabatu/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/@dinaslingkunganhidupkotaba8010"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <div class="partner-item">
            {{--  <a href="{{ route('beranda') }}" ></a><img src="{{asset('images/logo dinas.png')}}" title="5" alt="5" > </a>  --}}
            <a href="{{ route('beranda') }}" class="m-0 text-primary md"><img src="{{asset('images/logo dinas.png')}}" alt=""></a>
          </div>
          {{--  <a class="navbar-brand" href="/"><h2>Dinas Lingkungan Hidup</h2></a>  --}}
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Beranda
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Kegiatan
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('kegiatan-persampahan') }}">BIDANG PENGELOLAAN PERSAMPAHAN DAN PENGELOLAAN LIMBAH BERBAHAYA DAN BERACUN</a></li>
                  <li><a class="dropdown-item" href="{{ route('kegiatan-penataan') }}">BIDANG PENATAAN DAN PENAATAN LINGKUNGAN</a></li>
                  <li><a class="dropdown-item" href="{{ route('kegiatan-pengendalian') }}">BIDANG PENGENDALIAN PENCEMARAN, PEMELIHARAAN LINGKUNGAN & PERTAMANAN</a></li>
                  <li><a class="dropdown-item" href="https://awase.dlh.batukota.go.id/">PENGADUAN</a></li>
                  <li><a class="dropdown-item" href="http://etanam.com/index.php">PENGAJUAN BIBIT</a></li>
                </ul>
              </div>
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                  Profil
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('profil') }}">Visi dan Misi</a></li>
                  <li><a class="dropdown-item" href="{{ route('profil-renja') }}">RENJA</a></li>
                  <li><a class="dropdown-item" href="{{ route('profil-renstra') }}">RENSTRA</a></li>
                  <li><a class="dropdown-item" href="{{ route('profil-sakip') }}">SAKIP</a></li>
                  <li><a class="dropdown-item" href="{{ route('profil-struktur-organisasi') }}">Struktur Organisasi</a></li>
                  <li><a class="dropdown-item" href="{{ route('profil-tupoksi') }}">TUPOKSI KADIS</a></li>
                </ul>
              </div>
              <li class="nav-item">
                <a class="nav-link" href="/galeri">Galeri</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/berita">Berita</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->

    @yield('content')

    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Website</h4>
            <p>DINAS LINGKUNGAN HIDUP KOTA BATU</p>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://www.facebook.com/DinasLingkunganHidupKotaBatu/" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.instagram.com/dlh_kotabatu/"><i class="fa fa-instagram"></i></a></li>
              <li><a href="https://www.youtube.com/@dinaslingkunganhidupkotaba8010"><i class="fa fa-youtube"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Menu Utama</h4>
            <ul class="menu-list">
              <li><a href="/">Beranda</a></li>
              <li><a href="Galeri">Galeri</a></li>
              <li><a href="Berita">Berita</a></li>
            </ul>
          </div>
          <div class="col-md-6 footer-item last-item">
            <h4>Contact Us</h4>
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4047130.838296838!2d108.03088002500003!3d-7.866137699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7887abc7e5d1d5%3A0xca248fb6d0f1017a!2sDinas%20Lingkungan%20Hidup%20Kota%20Batu!5e0!3m2!1sid!2sid!4v1670252108992!5m2!1sid!2sid" width="520" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
    <div class="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p>Copyright &copy; 2023 DINAS LINGKUNGAN HIDUP KOTA BATU.
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>