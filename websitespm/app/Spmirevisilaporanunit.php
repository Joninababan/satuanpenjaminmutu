<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spmirevisilaporanunit extends Model
{

    protected $table = 'spmi_revisi_laporan_unit';
    protected $primaryKey = 'laporan_unit_id';
    protected $fillable =  [
        'laporan_unit_id','komentar','unggah_dokumen',
    ];

    public function audit(){
        return $this->hasOne('App\Audit');
    }

    public function spmilaporanunit(){
        return $this->belongsTo('App\SpmiLaporanUnit');
    }
}