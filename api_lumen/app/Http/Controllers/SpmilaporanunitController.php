<?php 


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Spmilaporanunit;
use App\Spmidaftartilik;
use DB;


class SpmilaporanunitController extends Controller  
{     
	public function index()     
	{        
	return DB::table('spmi_laporan_unit')
  ->join('spmi_opsi','spmi_opsi.opsi_id','spmi_laporan_unit.opsi')   
  ->select('spmi_laporan_unit.nama_laporan','spmi_opsi.nama_opsi','spmi_laporan_unit.pemasukan_dana','spmi_laporan_unit.laporan_unit_id','spmi_laporan_unit.unggah_dokumen','spmi_laporan_unit.opsi')   
  ->get(); 
	}

 



	public function test(){
		$spmidaftartilik = App\SpmiLaporanUnit::find(1)->spmidaftartilik()->where('opsi', 1)->first();
	}
	public function indexadmin()     
	{        
	return Spmilaporanunit::where('opsi', 1)->get();
	}      
	public function create(request $request)    
	 {         
	 	$spmilaporanunit = new Spmilaporanunit;
	 	$spmilaporanunit->nama_laporan = $request->nama_laporan;
	 	$spmilaporanunit->kegiatan_rutin = $request->kegiatan_rutin;
	 	$spmilaporanunit->kegiatan_non_rutin = $request->kegiatan_non_rutin;
	 	$spmilaporanunit->serapan_anggaran = $request->serapan_anggaran;
	 	$spmilaporanunit->pemasukan_dana = $request->pemasukan_dana;
	 	$spmilaporanunit->evaluasi_kegiatan = $request->evaluasi_kegiatan;
	 	$spmilaporanunit->rencana_kerja_bulan_berikutnya = $request->rencana_kerja_bulan_berikutnya;
	 	$spmilaporanunit->unggah_dokumen = $request->unggah_dokumen;
    	if($request->hasFile('unggah_dokumen')){
     	$request->file('unggah_dokumen')->move('images/',$request->file('unggah_dokumen')->getClientOriginalName());
     	$spmilaporanunit->unggah_dokumen = $request->file('unggah_dokumen')->getClientOriginalName();
     }
	 	$spmilaporanunit->save();

	 	return "Data berhasil masuk";	 
	 	  }    
	 	   public function show($id)     
	 	   {        
	 	    $spmilaporanunit = Spmilaporanunit::find($id);         
	 	    return response()->json($spmilaporanunit);     
	 	}    
	 	 public function update(request $request, $id)     
	 	 {        
	 	$nama_laporan = $request->nama_laporan;
	 	$kegiatan_rutin = $request->kegiatan_rutin;
	 	$kegiatan_non_rutin = $request->kegiatan_non_rutin;
	 	$serapan_anggaran = $request->serapan_anggaran;
	 	$pemasukan_dana = $request->pemasukan_dana;
	 	$evaluasi_kegiatan = $request->evaluasi_kegiatan;
	 	$rencana_kerja_bulan_berikutnya = $request->rencana_kerja_bulan_berikutnya; 

	 	$spmilaporanunit = Spmilaporanunit::find($id);
	 	$spmilaporanunit->nama_laporan = $request->nama_laporan;
	 	$spmilaporanunit->kegiatan_rutin = $request->kegiatan_rutin;
	 	$spmilaporanunit->kegiatan_non_rutin = $request->kegiatan_non_rutin;
	 	$spmilaporanunit->serapan_anggaran = $request->serapan_anggaran;
	 	$spmilaporanunit->pemasukan_dana = $request->pemasukan_dana;
	 	$spmilaporanunit->evaluasi_kegiatan = $request->evaluasi_kegiatan;
	 	$spmilaporanunit->rencana_kerja_bulan_berikutnya = $request->rencana_kerja_bulan_berikutnya;
	 	$spmilaporanunit->save();

	 	return "Data berhasil diupdate";

	 	    }    
	 	     public function delete($id)   
	 	       {        
	 	       	$spmilaporanunit = Spmilaporanunit::find($id);
    	$spmilaporanunit->delete();

    	return "data berhasil dihapus"; 
	 	 } 

	 	 public function datatable(){
	 	 	$spmilaporanunit = SpmiLaporanUnit::all();

    return view('datatable', ['spmilaporanunit' => $spmilaporanunit]);
	 	 }
}