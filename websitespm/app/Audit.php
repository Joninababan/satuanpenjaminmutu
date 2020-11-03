<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $table = 'spmi_daftar_tilik';
    protected $primaryKey = 'laporan_id';

    protected $fillable = [
    	'inst_unit','referensi','Pernyataan','catatan_khusus'
    ];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function spmilaporanunit(){
        return $this->belongsTo('App\SpmiLaporanUnit');
    }

    public function scopeLatestFirst($query)
    {
    	return $query->orderBy('id', 'DESC');
    }

}