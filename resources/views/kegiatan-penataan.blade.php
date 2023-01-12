@extends('layouts.app')

@section('content')

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>BIDANG PENATAAN DAN PENAATAN LINGKUNGAN</h1>
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
                    <h2>BIDANG PENATAAN DAN<em>&nbsp;PENAATAN LINGKUNGAN</em></h2>
                    @foreach ($penataan as $data)
                    <p>{!!$data->content!!}</p>
                    @endforeach
                  </div>
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
              <h2>DOKUMENTASI <em>TERBARU</em></h2>
              <span>DINAS LINGKUNGAN HIDUP KOTA BATU</span>
            </div>
          </div>
          @foreach ($penataan as $data)
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('storage/'.$data->image)}}" alt="">
              <div class="down-content">
                <center><h4>{{$data->title_image}}</h4></center>
              </div>
            </div>
          </div>
          @endforeach
  </div>
</div>
<br><br>

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