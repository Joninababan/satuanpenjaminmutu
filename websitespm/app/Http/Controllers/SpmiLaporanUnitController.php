<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SpmiLaporanUnit; 
use App\Audit;
use App\User;
use App\Status;
use App\Spmirevisilaporanunit;
use App\Transformers\SpmiLaporanUnitTransformer;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
use Session;
use Illuminate\Support\Facades\Blade;

class SpmiLaporanUnitController extends Controller
{
  public function add(Request $request, SpmiLaporanUnit $spmilaporanunit)
  {
    $this->validate($request, [
      'name' => 'required',
      'kategori' => 'required',
    ]);

    $spmilaporanunit = $spmilaporanunit->create([
      'user_id' => Auth::user()->id,
      'name' => $request->name,
      'kategori' => $request->kategori,
    ]);

    $response = fractal()
    ->item($spmiLaporanUnit)
    ->transformWith(new SpmiLaporanUnitTransformer)
    ->toArray();

    return response()->json($response, 201); 

  }


  public function view(SpmiLaporanUnit $spmilaporanunit){
    $spmilaporanunit = $spmilaporanunit->all();
    $data = SpmiLaporanUnit::all();
    return view('SpmiLaporanUnit',['data' => $data]);

  }

  public function vieww()
  {
    return view('/spmi_laporan_unit.spmi_laporan_unit_create');
  }

  public function laporan(Audit $audit){
    $spmilaporanunit = SpmiLaporanUnit::all();

    Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
    return view('laporan', ['spmilaporanunit' => $spmilaporanunit, 'audit' => $audit]);
  }


  public function laporans(Spmirevisilaporanunit $spmirevisilaporanunit){ 
    Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
    return view('spmi_laporan_unit/spmi_laporan_unit',['spmirevisilaporanunit' => $spmirevisilaporanunit]);
  }

  public function indexadmin(SpmiLaporanUnit $spmilaporanunit){

    $spmilaporanunit = SpmiLaporanUnit::where('opsi', 1)->get();
    

    return view('spmi_laporan_unit/spmi_laporan_unit_admin',['spmilaporanunit' => $spmilaporanunit]);
  }

  public function create(Request $request, SpmiLaporanUnit $spmilaporanunit)
  {

   $this->validate($request, [
    'kegiatan_rutin' => 'required',
    'kegiatan_non_rutin' => 'required',
  ]);

   $data = new SpmiLaporanUnit();
   $data->inst_unit = Auth::user()->inst_unit;
   $data->nama_laporan = $request->nama_laporan;
   $data->tujuan = $request->tujuan;   
   $data->kegiatan_rutin = $request->kegiatan_rutin;
   $data->kegiatan_non_rutin = $request->kegiatan_non_rutin;
   $data->serapan_anggaran = $request->serapan_anggaran;
   $data->pemasukan_dana = $request->pemasukan_dana;
   $data->keterangan_dana = $request->keterangan_dana;
   $data->evaluasi_kegiatan = $request->evaluasi_kegiatan;
   $data->rencana_kerja_bulan_berikutnya = $request->rencana_kerja_bulan_berikutnya;
   $data->hambatan = $request->hambatan;
   $data->upaya_mengatasi_hambatan = $request->upaya_mengatasi_hambatan;
   $data->kesimpulan_dan_saran = $request->kesimpulan_dan_saran;
   $data->created_by = Auth::user()->name;
   $data->unggah_dokumen = $request->unggah_dokumen;
   if($request->hasFile('unggah_dokumen')){
     $request->file('unggah_dokumen')->move('images/',$request->file('unggah_dokumen')->getClientOriginalName());
     $data->unggah_dokumen = $request->file('unggah_dokumen')->getClientOriginalName();
   }
   
   $data->save();

   Session::flash('create','Laporan ditambahkan');
   return redirect('spmi_laporan_unit/spmi_laporan_units');
 }
 
 public function detail(SpmiLaporanUnit $data){
  Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
  return view('spmi_laporan_unit.detail',['data' => $data]);

}

public function edit(SpmiLaporanUnit $data)
{
 return view('spmi_laporan_unit.editlaporan',['data' => $data]);
}

public function updatee(Request $request,SpmiLaporanUnit $data)
{
  $data->update($request->all());
  $data->save();
  Session::flash('edit','Laporan diupdate');
  return redirect('/spmi_laporan_unit/spmi_laporan_units')->with('sukses', 'Berhasil diupdate');
}

public function downfunc(){
        $data=DB::table($this->table)->get(); //tak rubah dikit
        return view('SpmiLaporanUnit',compact(['data']));
      }


      public function destroy($id)
      {
        $spmilaporanunit = SpmiLaporanUnit::find($id); 
        $spmilaporanunit->delete();
        Session::flash('destroy','Laporan dihapus');
        return redirect('/spmi_laporan_unit/spmi_laporan_units');
      }
      

      public function updatestatus(Request $request,SpmiLaporanUnit $data)
      {
        $data->update($request->all());
        $data->save();
        return redirect('/spmi_laporan_unit/spmi_laporan_unit');
      }
      public function status(SpmiLaporanUnit $data){

        return view('spmi_laporan_unit.status',['data' => $data]);
      }

      

      public function opsi(SpmiLaporanUnit $data){

        return view('spmi_laporan_unit.opsi',['data' => $data]);
      }

      public function updateopsi(Request $request,SpmiLaporanUnit $data)
      {
        $data->update($request->all());
        $data->save();
        return redirect('/spmi_laporan_unit/spmi_laporan_unit');
      }

      public function cetak_pdf()
      {
        $spmi_laporan_unit = SpmiLaporanUnit::where('opsi', 1)->get();
        Blade::directive('currency', function ( $expression ) { return "Rp. <?php echo number_format($expression,0,',','.'); ?>"; });
        $pdf = PDF::loadview('laporan_pdf',['laporan'=>$spmi_laporan_unit]);
        return $pdf->stream();
      }
    }
