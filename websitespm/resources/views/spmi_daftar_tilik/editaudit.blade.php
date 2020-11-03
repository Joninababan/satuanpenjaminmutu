  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPM</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
       <span><?php echo date(' l, d F Y');?></span>
       <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu">
            <li>
              <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
          </li>
        </ul>
      </li>
      @endguest
    </ul> 
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  @extends('layouts.include.sidebar')
  </div>
  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <br>
          <div class="col-md-12">
            <br>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Audit</h3>
              </div>

              <form role="form" action="/listAllAudit/{{$data->laporan_id}}/edit" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

                <form class="form-horizontal">
                  <div class="card-body">
                   <div class="form-group row">
                    <div class="col-sm-6">
                      <input type="hidden" class="form-control" name="laporan_id" id="" value="{{$data->laporan_id}}"  placeholder="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-5 com-form-label">Referensi</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="referensi" id="" value="{{$data->referensi}}" placeholder="">
                    </div>

                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-5 com-form-label">Pernyataan</label>
                    <div class="col-sm-6">
                     <textarea class="form-control" rows="3" name="Pernyataan" value="{{$data->Pernyataan}}" placeholder="{{$data->Pernyataan}}">{{$data->Pernyataan}}</textarea>
                   </div>
                 </div>

                 <div class="form-group row">
                  <label for="" class="col-sm-5 com-form-label">Catatan khusus</label>
                  <div class="col-sm-6">
                   <textarea class="form-control" rows="3" name="catatan_khusus" value="{{$data->catatan_khusus}}" placeholder="{{$data->catatan_khusus}}">{{$data->catatan_khusus}}</textarea>
                 </div>
               </div>

               <div class="card-footer">         
                <button type="submit" class="btn btn-primary float-right">Submit</button>
              </div>
            </form>
          </div>        
        </section>
      </div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/admin/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/admin/dist/js/demo.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        bsCustomFileInput.init();
      });
    </script>
  </body>
  </html>
