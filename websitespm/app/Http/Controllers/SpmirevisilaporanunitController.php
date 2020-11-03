<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\User;
use App\SpmiLaporanUnit;
use App\Spmirevisilaporanunit;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;
use Session;

class SpmirevisilaporanunitController extends Controller
{

  public function index(){

    return view('spmi_revisi_laporan_unit/spmi_revisi_laporan_unit');
  }

  public function add(SpmiLaporanUnit $data, Spmirevisilaporanunit $spmirevisilaporanunit)
  {
    $spmirevisilaporanunit = Spmirevisilaporanunit::find($data);
    return view('spmi_revisi_laporan_unit.create',['data' => $data,'spmirevisilaporanunit' => $spmirevisilaporanunit]);
  }

  public function create(Request $request, Spmirevisilaporanunit $spmirevisilaporanunit)
  {

    $data = new Spmirevisilaporanunit();
    $data->laporan_unit_id = $request->laporan_unit_id;
    $data->komentar = $request->komentar;
    $data->unggah_dokumen = $request->unggah_dokumen;
    if($request->hasFile('unggah_dokumen')){
     $request->file('unggah_dokumen')->move('images_rev/',$request->file('unggah_dokumen')->getClientOriginalName());
     $data->unggah_dokumen = $request->file('unggah_dokumen')->getClientOriginalName();
   }

   $data->save();
   return redirect('spmi_laporan_unit/spmi_laporan_units');  
   return $pdf->stream(); 
 }

 public function detail(Spmirevisilaporanunit $data){

  $spmirevisilaporanunit = Spmirevisilaporanunit::find($data);
  return view('spmi_revisi_laporan_unit/detail',['data' => $data, 'spmirevisilaporanunit' => $spmirevisilaporanunit]);
}

public function edit(Spmirevisilaporanunit $data)
{
 return view('spmi_revisi_laporan_unit.editrevisilaporan',['data' => $data]);
}

public function updatee(Request $request,Spmirevisilaporanunit $data)
{
  $data->update($request->all());
  $data->save();
  Session::flash('edit','Revisi Laporan diupdate');
  return redirect('/spmi_revisi_laporan_unit/spmi_revisi_laporan_units');
}

public function destroy($id)
{
  $spmirevisilaporanunit = Spmirevisilaporanunit::find($id); 
  $spmirevisilaporanunit->delete();
  Session::flash('destroy','Revisi Laporan dihapus');
  return redirect('/spmi_revisi_laporan_unit/spmi_revisi_laporan_units');
}
}