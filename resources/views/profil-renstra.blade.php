@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>RENSTRA</h1>
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
                    <h2>RENCANA STRATEGIS (RENSTRA)<em>DINAS LINGKUNGAN KOTA BATU 2017 – 2022</em></h2>
                    <p>Rencana Strategis (Renstra) Dinas Lingkungan Hidup adalah dokumen perencanaan Perangkat Daerah (PD) untuk periode 5 (lima) tahun yang memuat tujuan, sasaran, strategi dan kebijakan serta program dan kegiatan indikatif sesuai tugas pokok dan fungsinya. Renstra merupakan instrumen untuk merumuskan dan mencapai tujuan organisasi serta menggambarkan bagaimana cara mencapai suatu tujuan yang ingin dicapai pada periode rencana jangka menengah, sekaligus untuk memenuhi aspek akuntabilitas suatu institusi pemerintah kepada para pihak yang berkepentingan. 
                      Renstra ini dirumuskan dalam kerangka pandangan yang strategis, antisipatif dan akomodatif terhadap tuntutan kebutuhan masyarakat dan daerah serta perubahan-perubahan lingkungan eksternal dan internal. <br><br>

                      Proses penyusunan Renstra dilakukan dengan mengacu pada ketentuan sebagaimana diatur dalam Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 86 Tahun 2018 Tentang Tata Cara Perencanaan, Pengendalian Dan Evaluasi Pembangunan Daerah, Tata Cara Evaluasi Rancangan Peraturan Daerah Tentang 
                      Rencana Pembangunan Jangka Panjang Daerah Dan Rencana Pembangunan Jangka Menengah Daerah, Serta Tata Cara Perubahan Rencana Pembangunan Jangka Panjang Daerah, Rencana Pembangunan Jangka Menengah Daerah, Dan Rencana Kerja Pemerintah Daerah.<br><br>
                      
                      Guna mendukung visi kepala daerah terpilih yaitu <b>Desa Berdaya Kota Berjaya Terwujudnya Kota Batu Sebagai Sentra Agrowisata Internasional Yang Berkarakter, Berdaya Saing Dan Sejahtera, </b>Dinas Lingkungan Hidup menetapkan tujuannya berdasarkan misi keempat, 
                      Meningkatkan Pembangunan Infrastruktur Dan Kawasan Perdesaan Yang Berkualitas Dan Berwawasan Lingkungan yaitu dengan <b><i>Meningkatkan Kualitas Lingkungan Hidup.</b></i><br><br>

                      Landasan hukum penyusunan Renstra Dinas Lingkungan Hidup Kota Batu Tahun 2018- 2022, yaitu:<br><br>

                    &nbsp; 1. Undang-Undang Nomor 28 Tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas dari Korupsi, Kolusi dan Nepotisme<br>
                    &nbsp; 2. Undang-Undang Republik Indonesia Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup<br>
                    &nbsp; 3. Undang-Undang Republik Indonesia Nomor 23 Tahun 2014 tentang Pemerintahan Daerah<br>
                    &nbsp; 4. Peraturan Pemerintah Nomor 20 Tahun 2001 tentang Pembinaan dan Pengawasan Penyelenggaraan Pemerintah Daerah<br>
                    &nbsp; 5. Peraturan Pemerintah Nomor 56 Tahun 2001 tentang Pelaporan Penyelenggaraan Pemerintah Daerah<br>
                    &nbsp; 6. Instruksi Presiden Nomor 7 Tahun 1999, tentang Akuntabilitas Kinerja Instansi Pemerintah (AKIP)<br>
                    &nbsp; 7. Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 86 Tahun 2018 Tentang Tata Cara Perencanaan, Pengendalian Dan Evaluasi Pembangunan Daerah, Tata Cara Evaluasi Rancangan Peraturan Daerah Tentang Rencana Pembangunan Jangka Panjang Daerah Dan 
                    &nbsp; Rencana Pembangunan Jangka Menengah Daerah, Serta Tata Cara Perubahan Rencana Pembangunan Jangka Panjang Daerah, Rencana Pembangunan Jangka Menengah Daerah, Dan Rencana Kerja Pemerintah Daerah<br>
                    &nbsp; 8. Peraturan Daerah Kota Batu Nomor 5 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah<br>
                    &nbsp; 9. Peraturan Walikota Batu Nomor 80 Tahun 2016 tentang Kedudukan, Susunan Organisasi, Uraian Tugas dan Fungsi, Serta Tata Kerja Dinas Lingkungan Hidup Kota Batu;<br>
                    &nbsp; 10. Peraturan Walikota Batu Nomor 18 Tahun 2019 tentang Indikator Kinerja Utama di Lingkungan Pemerintah Kota Batu.<br>
                   
                    </p>
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