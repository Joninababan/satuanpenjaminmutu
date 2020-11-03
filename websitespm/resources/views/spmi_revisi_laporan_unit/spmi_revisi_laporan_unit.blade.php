  <?php 
  function curl($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);  
    curl_close($ch);      
    return $output;
  }

  $curl = curl("http://localhost:8001/spmirevisilaporanunits/");

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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  <div>

   @extends('layouts.include.sidebar')
   <!-- /.sidebar-menu -->
  </div>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <br>
          <div class="col-12">
            <br>
            <div class="card">
              @if ($message = Session::get('destroy'))
              <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
              </div>
              @endif
              @if ($message = Session::get('create'))
              <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
              </div>
              @endif
              @if ($message = Session::get('edit'))
              <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ $message }}</strong>
              </div>
              @endif
              <div class="card-header">
                <h3 class="card-title">Data Laporan</h3>
              </div>



              <!-- /.card-header -->
              <div class="card-body">



               <!-- @include('layouts.include.flash') -->
       

               <table id="example1" class="table table-bordered table-hover">
                <thead>

                  <th>No</th>
                  <th>Nama laporan</th>
                  <!-- <th>Kegiatan Non Rutin</th> -->
                  <th>Komentar</th>
         
        
                  <!--     <th>Status</th> -->
               
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
                  <td><?php echo $d["komentar"]; ?></td>
             


                  @if(auth()->user()->role_id == 0)
                  <td>
                    <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/detailrev" class="btn btn-info">View</a> 
                <!--     <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/editrev" class="btn btn-warning ">Edit</a> -->
                   <a href="/listAllLaporan/<?php echo $d["laporan_unit_id"]; ?>/destroyrev" class="btn btn-danger ">Hapus</a>
                    

                  </td>
                  @endif

                 

              </tr>
              @endforeach
            </table>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
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

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "lengthMenu": [[5, 10, -1], [5,10, "All"]]
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
  <!-- page script -->

  </body>
  </html>
