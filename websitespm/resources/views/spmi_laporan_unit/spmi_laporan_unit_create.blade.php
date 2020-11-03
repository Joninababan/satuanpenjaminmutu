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
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

  <!-- sidebar-menu -->
  @extends('layouts.include.sidebar')
  <!-- /.sidebar-menu -->

  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <br>
        @if ($message = Session::get('create'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
        </div>
        @endif
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Laporan</h3>
              </div>

              <form role="form" action="/spmi_laporan_unit/spmi_laporan_unit_create" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <form class="form-horizontal">
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="" class="col-sm-2 com-form-label">Nama Laporan</label>
                      <div class="col-sm-8">
                       <input type="text" class="form-control" name="nama_laporan" id="" placeholder="">
                     </div>
                   </div>

                   <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Tujuan</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="tujuan"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Kegiatan rutin</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="kegiatan_rutin"></textarea>                
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Kegiatan non-rutin</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="kegiatan_non_rutin"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Serapan anggaran</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="serapan_anggaran"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Pemasukan dana</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="pemasukan_dana" id="" placeholder="">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Keterangan dana</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="keterangan_dana"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Evaluasi kegiatan</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="evaluasi_kegiatan"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Rencana kerja</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="rencana_kerja_bulan_berikutnya"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Hambatan</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="hambatan"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Upaya mengatasi hambatan</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="upaya_mengatasi_hambatan"></textarea>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 com-form-label">Kesimpulan dan saran</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" rows="3" name="kesimpulan_dan_saran"></textarea>
                    </div>
                  </div>

                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="status" value="Sedang berjalan" id="" placeholder="">
                  </div>

                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Dokumen pendukung</label>
                    <div class="col-sm-10">
                     <input type="file" name="unggah_dokumen" class="forms-control">
                   </div>
                 </div>
               </div>

               <div class="card-footer">
                <button type="submit" class="btn btn-primary float-right">Submit</button>
              </div>
            </form>
          </div>
        </section>
      </div>

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
