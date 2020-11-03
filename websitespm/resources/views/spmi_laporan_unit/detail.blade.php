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
  </nav>
</div>
<!-- /.navbar -->

<!-- sidebar-menu -->
@extends('layouts.include.sidebar')
<!-- /.sidebar-menu -->

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
              <h3 class="card-title">Detail Laporan</h3>
            </div>
            <form class="form-horizontal" role="form" action="/dokumen/create" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
              <div class="card-body">
                <div class="form-group row">
                 <label for="" class="col-sm-2 com-form-label">Dibuat oleh</label>
                 <div class="col-sm-9">
                   <label for="" class="col-sm-12 com-form-label">: {{$data->created_by}}</label>
                 </div>
               </div>

               <div class="form-group row">
                 <label for="" class="col-sm-2 com-form-label">Nama laporan</label>
                 <div class="col-sm-9">
                   <label for="" class="col-sm-12 com-form-label">: {{$data->nama_laporan}}</label>
                 </div>
               </div>

               <div class="form-group row">
                 <label for="" class="col-sm-2 com-form-label">Tujuan</label>
                 <div class="col-sm-9">
                   <label for="" class="col-sm-12 com-form-label">: {{$data->tujuan}}</label>
                 </div>
               </div>

               <div class="form-group row">
                 <label for="" class="col-sm-2 com-form-label">Kegiatan rutin</label>
                 <div class="col-sm-9">
                   <label for="" class="col-sm-12 com-form-label">: {{$data->kegiatan_rutin}}</label>
                 </div>
               </div>

               <div class="form-group row">
                 <label for="" class="col-sm-2 com-form-label">Kegiatan non-rutin</label>
                 <div class="col-sm-9">
                  <label for="" class="col-sm-12 com-form-label">: {{$data->kegiatan_non_rutin}}</label>
                </div>
              </div>

              <div class="form-group row">
               <label for="" class="col-sm-2 com-form-label">Serapan anggaran</label>
               <div class="col-sm-9">
                 <label for="" class="col-sm-12 com-form-label">: {{$data->serapan_anggaran}}</label>
               </div>
             </div>

             <div class="form-group row">
               <label for="" class="col-sm-2 com-form-label">Pemasukan dana</label>
               <div class="col-sm-9">
                <label for="" class="col-sm-12 com-form-label">: @currency($data->pemasukan_dana)</label>
              </div>
            </div>

            <div class="form-group row">
             <label for="" class="col-sm-2 com-form-label">Keterangan dana</label>
             <div class="col-sm-9">
               <label for="" class="col-sm-12 com-form-label">: {{$data->keterangan_dana}}</label>
             </div>
           </div>

           <div class="form-group row">
             <label for="" class="col-sm-2 com-form-label">Evaluasi kegiatan</label>
             <div class="col-sm-9">
               <label for="" class="col-sm-12 com-form-label">: {{$data->evaluasi_kegiatan}}</label>
             </div>
           </div>

           <div class="form-group row">
             <label for="" class="col-sm-2 com-form-label">Rencana kerja bulan berikutnya</label>
             <div class="col-sm-9">
               <label for="" class="col-sm-12 com-form-label">: {{$data->rencana_kerja_bulan_berikutnya}}</label>
             </div>
           </div>

           <div class="form-group row">
             <label for="" class="col-sm-2 com-form-label">Hambatan</label>
             <div class="col-sm-9">
               <label for="" class="col-sm-12 com-form-label">: {{$data->hambatan}}</label>
             </div>
           </div>

           <div class="form-group row">
             <label for="" class="col-sm-2 com-form-label">Upaya mengatasi hambatan</label>
             <div class="col-sm-9">
               <label for="" class="col-sm-12 com-form-label">: {{$data->upaya_mengatasi_hambatan}}</label>
             </div>
           </div>

           <div class="form-group row">
             <label for="" class="col-sm-2 com-form-label">Kesimpulan dan saran</label>
             <div class="col-sm-9">
               <label for="" class="col-sm-12 com-form-label">: {{$data->kesimpulan_dan_saran}}</label>
             </div>
           </div>

           <div class="form-group row">
             <label for="" class="col-sm-2 com-form-label">Dokumen Pendukung</label>
             <div class="col-sm-9">
               <label  for="" class="col-sm-12 com-form-label"><a href="{{'/images/'.$data->unggah_dokumen}}" target="_blank" >: {{$data->unggah_dokumen}}</a></label>
               @php
               $ext = File::extension($data->unggah_dokumen);
               @endphp
               @if ($ext == 'pdf')
               <object
               type="application/pdf"
               data="{{asset('images/'.$data->unggah_dokumen)}}"
               width="800"
               height="700">
             </object>
             @endif
           </div>
         </div>         

         <!-- /.card-body -->
         @if(auth()->user()->role_id == 2)
         <a href="/spmi_laporan_unit/spmi_laporan_unit"<button>Kembali</button></a>
         @endif
         @if(auth()->user()->role_id == 1)
         <a href="/spmi_laporan_unit/spmi_laporan_units/admin"<button>Kembali</button></a>
         @endif
         @if(auth()->user()->role_id == 0)
         <a href="/spmi_laporan_unit/spmi_laporan_units"<button>Kembali</button></a>
         @endif
         @if(auth()->user()->role_id == 3)
         <a href="/spmi_laporan_unit/spmi_laporan_units/admin"<button>Kembali</button></a>
         @endif
       </section>
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
