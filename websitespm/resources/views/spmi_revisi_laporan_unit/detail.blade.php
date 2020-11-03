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
      <!-- Left navbar links -->
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


    <!-- Right navbar links -->
    
  </nav>
</div>
<!-- Main Sidebar Container -->

@extends('layouts.include.sidebar')

<!-- /.sidebar-menu -->

<!-- /.sidebar -->


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


          <!-- general form elements -->
          <!-- general form elements -->
         @php
      $j = 1;
      @endphp
      @foreach($spmirevisilaporanunit as $d)

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Revisi Laporan {{$j++}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" role="form" action="" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <div class="card-body">


           <div class="form-group row">
             <label for="" class="col-sm-3 com-form-label">Komentar</label>
             <div class="col-sm-9">
               <label for="" class="col-sm-12 com-form-label">: {{$d->komentar}}</label>
             </div>
           </div>
           
      

            @if( $d->unggah_dokumen == null)
               <div class="form-group row">
             <label for="" class="col-sm-3 com-form-label">Dokumen Pendukung</label>
               <div class="col-sm-9">
               <label  for="" class="col-sm-12 com-form-label">
                <a>: Tidak ada dokumen pendukung</a></label>
              </div>
            </div>
            @endif

            @if( $d->unggah_dokumen != null)
               <div class="form-group row">
             <label for="" class="col-sm-3 com-form-label">Dokumen Pendukung</label>
               <div class="col-sm-9">
               <label  for="" class="col-sm-12 com-form-label">
                <a href="{{'/images/'.$data->unggah_dokumen}}" target="_blank" >: {{$d->unggah_dokumen}}</a></label>
              </div>
            </div>
            @endif

    
          </div>
        </form>


        
        <!-- /.card -->

        <!-- Form Element sizes -->


        <!-- Input addon -->



        <!-- /.col-lg-6 -->

        <!-- /.row -->


        <!-- /input-group -->

        <!-- /input-group -->
      </div>




      @endforeach




      <!-- /.card-body -->
    </div>
    

  <!-- /.card -->


<!--/.col (left) -->
<!-- right column -->




<!-- /.row -->
<!-- /.container-fluid -->
<div class="card-footer">
            @if(auth()->user()->role_id == 2)
            <a href="/spmi_laporan_unit/spmi_laporan_unit" class="btn btn-default">Kembali</a>
            @endif  
            
            @if(auth()->user()->role_id == 0)
            <a href="/spmi_revisi_laporan_unit/spmi_revisi_laporan_units" class="btn btn-default">Kembali</a>
            @endif
    <!-- /.card -->
    <!-- Horizontal Form -->
    </div>
</section>


<!-- /.content -->

</div>


<!-- /.content-wrapper -->


<!-- Control Sidebar -->

<!-- /.control-sidebar -->

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
