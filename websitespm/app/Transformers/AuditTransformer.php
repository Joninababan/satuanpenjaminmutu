<?php

namespace App\Transformers;

use App\Audit;
use League\Fractal\TransformerAbstract;

class  AuditTransformer extends TransformerAbstract
{
	public function transform(Audit $audit){
		return [
			
			'id' => $audit->id, 
			'kategori' => $audit->kategori,
			'pernyataan' => $audit->pernyataan,
			'usulan_perbaikan' => $audit->usulan_perbaikan,
			// 'published' => $audit->created_at->diffForHumans(),
		];
	}
}