@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>STRUKTUR ORGANISASI</h1>
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
                    <h2>Tugas, Fungsi dan Struktur Organisasi<em>Dinas Lingkungan Hidup</em></h2>
                    <p>Berdasarkan Peraturan Walikota Batu Nomor 80 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Uraian Tugas dan Fungsi, Serta Tata Kerja Dinas Lingkungan Hidup Kota Batu adalah sebagai berikut <br><br>

                      <b>Susunan Organisasi Dinas Lingkungan Hidup terdiri dari :</b><br><br>

                    a. Kepala Dinas;<br>
                    b.  Sekretariat membawahi:<br>  
                    &nbsp; 1. Sub Bagian Keuangan, Umum, dan    Kepegawaian; dan<br>
                    &nbsp; 2. Kelompok Jabatan Fungsional.<br>
                    c. Bidang Penataan dan Penaatan Lingkungan terdiri atas kelompok jabatan fungsional.<br>
                    d. Bidang Pengendalian Pencemaran, Pemeliharaan Lingkungan, dan Pertamanan terdiri atas kelompok jabatan fungsional.<br>  
                    e. Bidang Pengelolaan Persampahan dan Pengelolaan Limbah Bahan Berbahaya dan Beracun terdiri atas kelompok jabatan fungsional.<br> 
                    f. UPTD; dan<br> 
                    g. Kelompok Jabatan Fungsional.<br><br>  
                   
                    (2) Sekretariat dipimpin oleh Sekretaris yang berada di bawah dan bertanggung jawab kepada Kepala Dinas.<br>
                    (3) Masing-masing Bidang dipimpin oleh Kepala Bidang yang berada di bawah dan bertanggung jawab kepada Kepala Dinas.<br>
                    (4) Masing-masing Sub Bagian dipimpin oleh Kepala Sub Bagian yang berada di bawah dan bertanggung jawab kepada Sekretaris.<br>
                    (5) Hubungan tata kerja antara Kepala Dinas dengan bawahan atau sebaliknya secara administratif dilakukan melalui Sekretaris.<br>
                    (6) Bagan Struktur Organisasi Dinas sebagaimana tercantum dalam Lampiran yang merupakan bagian tidak terpisahkan dari Peraturan Wali Kota ini.<br><br><br>

                    
                    </p>
                    <center><img src="{{asset('images/struktur.jpeg')}}" alt=""></center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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