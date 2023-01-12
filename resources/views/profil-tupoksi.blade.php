@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>TUPOKSI KADIS</h1>
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
                    <h2>Tugas Pokok dan<em>Fungsi Kepala Dinas</em></h2>
                    <p><b>Dalam melaksanakan tugas, Kepala Dinas menyelenggarakan fungsi :</b><br><br>

                    &nbsp; 1. Perumusan kebijakan teknis dan rencana strategis di bidang lingkungan hidup<br>
                    &nbsp; 2. Penetapan rencana kerja dan anggaran di bidang lingkungan hidup<br>
                    &nbsp; 3. Pelaksanaan kebijakan di bidang lingkungan hidup<br>
                    &nbsp; 4. Penyelenggaraan peningkatan kualitas Sumber Daya Manusia aparatur dibidang lingkungan hidup<br>
                    &nbsp; 5. Pelaksanaan administrasi dinas di bidang lingkungan hidup<br>
                    &nbsp; 6. Penyelenggaraan evaluasi pelaksanaan program, kegiatan dan anggaran di bidang lingkungan hidup<br>
                    &nbsp; 7. Pelaksanaan fungsi lain yang diberikan oleh Walikota terkait dengan tugas dan fungsinya.<br><br>
                   
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