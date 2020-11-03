<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audit; 
use App\User;
use App\SpmiLaporanUnit;
use App\Transformers\AuditTransformer;
use DB;
use PDF;
use Auth;
use Illuminate\Support\Facades\Storage;
use Session;

class SpmidaftartilikController extends Controller
{
 public function add(SpmiLaporanUnit $data)
 {
   return view('createaudit',['data' => $data]);
 }

 public function hasil(Audit $audit)
 {     
   $data = Audit::all();
   return view('hasilaudit',['lihat' => $data]);
 }

 public function hasiladmin(Audit $audit)
 {
  $audit = DB::table('spmi_daftar_tilik')
  ->join('spmi_laporan_unit','spmi_laporan_unit.laporan_unit_id','spmi_daftar_tilik.laporan_id')   
  ->select('spmi_laporan_unit.nama_laporan','spmi_daftar_tilik.laporan_id', 'spmi_daftar_tilik.referensi','spmi_daftar_tilik.Pernyataan','spmi_daftar_tilik.created_at')   
  ->get();
  return view('spmi_daftar_tilik/spmi_daftar_tilik',compact('audit'));
}

public function create(Request $request, Audit $audit)
{
  $data = new Audit();
  $data->inst_unit = Auth::user()->inst_unit;
  $data->laporan_id = $request->laporan_id;
  $data->referensi = $request->referensi;
  $data->Pernyataan = $request->Pernyataan;
  $data->created_by = Auth::user()->name;
  $data->catatan_khusus = $request->catatan_khusus;

  $data->save();
  Session::flash('create','Audit ditambahkan');
  return redirect('spmi_laporan_unit/spmi_laporan_unit');   
}

public function detail(Audit $data){

  return view('spmi_daftar_tilik/auditdetail',['data' => $data]);
}

public function test(){
  echo "join table";
  return DB::table('spmi_daftar_tilik')
  ->join('spmi_laporan_unit','spmi_laporan_unit.laporan_unit_id','spmi_daftar_tilik.laporan_id')   
  ->select('spmi_laporan_unit.nama_laporan','')   
  ->get();
}

public function edit(Audit $data)
{
 return view('spmi_daftar_tilik/editaudit',['data' => $data]);
}

public function updatee(Request $request,Audit $data)
{
  $data->update($request->all());
  $data->save();
  Session::flash('edit','Audit diupdate');
  return redirect('spmi_daftar_tilik/spmi_daftar_tilik');
}

public function destroy($id)
{
  $audit = Audit::find($id); 
  $audit->delete();
  Session::flash('destroy','Audit dihapus');
  return redirect('spmi_daftar_tilik/spmi_daftar_tilik');
}
}



