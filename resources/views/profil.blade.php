@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Visi dan Misi</h1>
            <span>DINAS LINGKUNGAN HIDUP KOTA BATU</span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-13">
                  <div class="col-md-13 align-self-center">
                  <div class="right-content">
                    <h2>Visi Walikota dan Wakil Walikota Batu <em>Tahun 2018 – 2022</em></h2>
                    <p><b>“DESA BERDAYA KOTA BERJAYA TERWUJUDNYA KOTA BATU SEBAGAI SENTRA AGROWISATA INTERNASIONAL YANG BERKARAKTER, BERDAYA SAING DAN SEJAHTERA“</b><br>

                      Yang dijabarkan melalui misi sebagai berikut:<br>
                      
                      1. Meningkatkan kualitas kehidupan sosial masyarakat yang berlandaskan nilai-nilai keagamaan dan kearifan budaya lokal.<br>
                      2. Meningkatkan pembangunan kualitas dan kesejahteraan sumber daya manusia.<br>
                      3. Mewujudkan daya saing perekonomian daerah yang progresif, mandiri berbasis agrowisata.<br>
                      4. Meningkatkan pembangunan infrastruktur dan kawasan perdesaan yang berkualitas dan berwawasan lingkungan.<br>
                      5. Meningkatkan tata kelola pemerintahan yang baik, bersih dan akuntabel berorientasi pada pelayanan publik yang profesional.<br>
                      Relevansi dan korelasi tugas pokok dan fungsi Dinas Lingkungan Hidup Kota Batu dengan visi dan misi Kepala Daerah dan Wakil Kepala Daerah Terpilih terletak pada Misi ke-4, yaitu 
                      <b>“Meningkatkan pembangunan infrastruktur dan kawasan perdesaan yang berkualitas dan berwawasan lingkungan” </b>yang bertujuan untuk mewujudkan <b>“Batu kota agropolitan dalam rangka merawat dan mempertahankan kelestarian lingkungan”</b>
                       dengan sasaran <b>“Meningkatnya kualitas lingkungan hidup”.</b> <br><br><br>
                      
                      Sebagai tindak lanjut visi dan misi Kepala Daerah dan Wakil Kepala Daerah Terpilih, Dinas Lingkungan Hidup mempunyai tujuan yang ingin dicapai sesuai dengan sasaran Kota Batu, 
                      yaitu <b>Meningkatkan Kualitas Lingkungan Hidup </b> dan dengan sasaran yang sama yaitu meningkatkan kualitas lingkungan hidup. Tabel berikut merupakan hubungan antara visi misi 
                      Kepala Daerah dengan program dan permasalahan pelayanan Dinas Lingkungan Hidup berikut faktor pendorong dan penghambatnya.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Visi <em>Misi</em></h2>
              <span>DINAS LINGKUNGAN HIDUP KOTA BATU</span>
              <p>Faktor Penghambat dan Pendorong Pelayanan Dinas Lingkungan Hidup Kota Batu terhadap telaahan Visi, Misi dan Program Kepala Daerah dan Wakil Kepala Daerah terpilih</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>VISI<em></em></h2>
                    <p><b>DESA BERDAYA KOTA BERJAYA TERWUJUDNYA KOTA BATU SEBAGAI  SENTRA AGROWISATA INTERNASIONAL YANG BERKARAKTER, BERDAYA SAING DAN SEJAHTERA</b></p><br></br>
                    <h2><em>MISI</em></h2>
                    <p><b>Meningkatkan pembangunan infrastruktur dan kawasan perdesaan yang berkualitas dan berwawasan lingkungan</b></p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{--  <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <br></br>
                  <div class="left-image">
                    <img src="{{asset('images/sekolah4.jpg')}}" alt="">
                  </div>
                  <br></br>
                  <div class="left-image">
                    <img src="{{asset('images/sekolah5.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <h2>TUJUAN <em>SEKOLAH</em></h2>
                    <p>{{ $data->tujuan_sekolah }}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  --}}
  
    <br></br><br></br>

@endsection
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