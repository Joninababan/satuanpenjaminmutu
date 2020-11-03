<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Spmidaftartilik;

class Spmilaporanunit extends Model
{
    
    protected $table = 'spmi_laporan_unit';

    // protected $fillable = [
    //    'inst_unit','status_id','nama_laporan','kegiatan_rutin','kegiatan_non_rutin','serapan_anggaran','pemasukan_dana','evaluasi_kegiatan','rencana_kerja_bulan_berikutnya', 'unggah_dokumen',
    // ];

 public function spmidaftartilik(){
 	return $this->hasOne(Spmidaftartilik::class);
 }
   
}
