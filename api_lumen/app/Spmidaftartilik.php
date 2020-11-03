<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Spmilaporanunit;

class Spmidaftartilik extends Model
{
    
    protected $table = 'spmi_daftar_tilik';

   

 	public function spmilaporanunit(){
 		return $this->belongsTo(Spmilaporanunit::class);
 	}
   
}
