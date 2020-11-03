<!DOCTYPE html>
<html>
 <head>
  <title>Data Laporan</title>
<script src="js/jquery-3.1.0.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

  

  

 </head>

 <body>
   <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Pemasukan dana</th>
            <th>Kegiatan Rutin</th>
         
        </tr>
    </thead>
    
    <tbody>
      @php
                      $j = 1;
                    
                    @endphp
      @foreach($spmilaporanunit as $d)
        <tr>
          <td>{{$j++}}</td>
            <td>{{$d->nama_laporan}}</td>
            <td>{{$d->spmidaftartilik->daftar_tilik_id}}</td>
            <td>{{$d->pemasukan_dana}}</td>
            <td>{{$d->kegiatan_rutin}}</td>
       
        </tr>
        
  
    </tbody>
    @endforeach
</table>
 </body>
 <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>