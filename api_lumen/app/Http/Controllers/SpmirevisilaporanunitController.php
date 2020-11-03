<?php 


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Spmilaporanunit;
use App\Spmidaftartilik;
use DB;


class SpmirevisilaporanunitController extends Controller  
{     
	public function index()     
	{        
	return DB::table('spmi_revisi_laporan_unit')
  ->join('spmi_laporan_unit','spmi_laporan_unit.laporan_unit_id','spmi_revisi_laporan_unit.laporan_unit_id')   
  ->select('spmi_laporan_unit.nama_laporan','spmi_revisi_laporan_unit.laporan_unit_id','spmi_revisi_laporan_unit.spmi_revisi_laporan_unit_id','spmi_revisi_laporan_unit.komentar','spmi_laporan_unit.unggah_dokumen')   
  ->get(); 
	}

 



	
}