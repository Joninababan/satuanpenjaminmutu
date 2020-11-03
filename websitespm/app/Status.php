<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'spmi_status';
	protected $primaryKey = 'status_id';

	public function SpmiLaporanUnit()
	{
		return $this->hasMany('App\SpmiLaporanUnit');
	}
}
