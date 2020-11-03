<?php

namespace App\Transformers;

use App\Dokumen;
use League\Fractal\TransformerAbstract;

class  DokumenTransformer extends TransformerAbstract
{
	public function transform(Dokumen $dokumen){
		return [
			'user_id' => $dokumen->user_id,
			'id' => $dokumen->id, 
			'name' => $dokumen->name,
			'kategori' => $dokumen->kategori,
			'published' => $dokumen->created_at->diffForHumans(),
		];
	}
}