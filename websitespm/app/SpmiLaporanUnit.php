<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpmiLaporanUnit extends Model
{

    protected $table = 'spmi_laporan_unit';
    protected $primaryKey = 'laporan_unit_id';


    protected $fillable = [
        'inst_unit','struktur_jabaran_id','status_id','opsi','created_by','tujuan','keterangan_dana','hambatan','upaya_mengatasi_hambatan','kesimpulan_dan_saran','nama_laporan','kegiatan_rutin','kegiatan_non_rutin','serapan_anggaran','pemasukan_dana','evaluasi_kegiatan','rencana_kerja_bulan_berikutnya','status', 'unggah_dokumen',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function audit(){
        return $this->hasOne('App\Audit');
    }
    
    public function spmilaporanrevisi() {
        return $this->hasMany(Spmirevisilaporanunit::class);
    }
}