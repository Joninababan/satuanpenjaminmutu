<?php 
function curl($url){
  $ch = curl_init(); 
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  $output = curl_exec($ch);  
  curl_close($ch);      
  return $output;
}

$curl = curl("http://localhost:8001/spmilaporanunits/");

// mengubah JSON menjadi array
$data = json_decode($curl, TRUE);

?>

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
  <!-- DataTables -->
  <link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
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
</div>
<div>

 <!--sidebar-menu -->
 @extends('layouts.include.sidebar')
 <!-- /.sidebar-menu -->

</div>
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <br>
        <div class="col-12">
          <br>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Laporan</h3>
            </div>
            <div class="card-body">
             @if(auth()->user()->role_id == 1)
             <a href="/laporan/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
             @endif

             <table id="example2" class="table table-bordered table-hover">
              <thead>
                <th>No</th>
                <th>Nama laporan</th>
                <th>Pemasukan dana</th>
                <th>Aksi</th>
              </thead>
              <tbody>
               @php
               $j = 1;
               @endphp

               @foreach($data as $d)
               <tr>
                <td>{{$j++}}</td>
                <td><?php echo $d["nama_laporan"]; ?></td>
                <td><?php echo $d["pemasukan_dana"]; ?></td>

                @if(auth()->user()->role_id == 0)
                <td>
                  <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/detail" class="btn btn-info">View</a>
                  <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/edit" class="btn btn-warning ">Edit</a>
                  <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/destroy" class="btn btn-danger ">Hapus</a>
                  <a href="<?php echo'/images/'.$d["unggah_dokumen"]; ?>" download class="btn btn-primary ">Download</a>
                </td>
                @endif

                @if(auth()->user()->role_id == 1)
                <td>
                  <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/detail" class="btn btn-info">View</a>
                  <a href="<?php echo'/images/'.$d["unggah_dokumen"]; ?>" download class="btn btn-primary ">Download</a>
                </td>
                @endif

                @if(auth()->user()->role_id == 2)
                <td>
                 <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/detail" class="btn btn-info">View</a>
                 <a href="<?php echo'/images/'.$d["unggah_dokumen"]; ?>" download class="btn btn-primary ">Download</a>
                 <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/audit" class="btn btn-warning">Audit</a>
               </td>
               @endif

               @if(auth()->user()->role_id == 3)
               <td>
                <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/detail" class="btn btn-info">View</a>
                <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/status" class="btn btn-warning">Status</a>
                <a href="<?php echo'/images/'.$d["unggah_dokumen"]; ?>" download class="btn btn-primary ">Download</a>
              </td>
              @endif

            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </section>
</div>

<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
