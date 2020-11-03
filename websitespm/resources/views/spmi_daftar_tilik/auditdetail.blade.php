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

  <!-- /.sidebar-menu -->
</div>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <br>
        <!-- left column -->
        <div class="col-md-12">
          <br>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail Audit</h3>
            </div>

            <form class="form-horizontal" role="form" action="/audit/create" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">

               <div class="form-group row">
                 <label for="" class="col-sm-3 com-form-label">Dibuat oleh</label>
                 <div class="col-sm-9">
                  <label for="" class="col-sm-12 com-form-label">: {{$data->created_by}}</label>
                </div>
              </div>
              <div class="form-group row">
               <label for="" class="col-sm-3 com-form-label">Referensi</label>
               <div class="col-sm-9">
                <label for="" class="col-sm-12 com-form-label">: {{$data->referensi}}</label>
              </div>  
            </div>
            
            <div class="form-group row">
             <label for="" class="col-sm-3 com-form-label">Pernyataan</label>
             <div class="col-sm-9">
              <label for="" class="col-sm-12 com-form-label">: {{$data->Pernyataan}}</label>
            </div>
          </div>                         

          <div class="form-group row">
           <label for="" class="col-sm-3 com-form-label">Catatan khusus</label>
           <div class="col-sm-9">
            <label for="" class="col-sm-12 com-form-label">: {{$data->catatan_khusus}}</label>
          </div>
        </div>

        <div class="form-group row">
         <label for="" class="col-sm-3 com-form-label">Waktu</label>
         <div class="col-sm-9">
          <label for="" class="col-sm-12 com-form-label">: {{$data->created_at}}</label>
        </div>
      </div>


      @if(auth()->user()->role_id == 0)
      <a href="/spmi_laporan_unit/spmi_laporan_units">Kembali</a>
      @endif
      @if(auth()->user()->role_id == 1)
      <a href="/spmi_laporan_unit/spmi_laporan_units/admin">Kembali</a>
      @endif
      @if(auth()->user()->role_id == 2)
      <a href="/spmi_daftar_tilik/spmi_daftar_tilik">Kembali</a>
      @endif
      @if(auth()->user()->role_id == 3)
      <a href="/spmi_daftar_tilik/spmi_daftar_tilik">Kembali</a>
      @endif
    </div>
  </form>
</div>
</div>
</div> 
</div>
</div>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
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
