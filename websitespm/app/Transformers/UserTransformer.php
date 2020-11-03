<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;
use App\Transformers\DokumenTransformer;

class  UserTransformer extends TransformerAbstract
{

	protected $availableIncludes = [
		'dokumens'
	];

	public function transform(User $user){
		return [
			'id' => $user->id,
			'name' => $user->name,
			'email' => $user->email,
			'role' => $user->role,
			// 'registered' => $user->created_at->diffForHumans(),

		];
	}

	public function includeDokumens(User $user){
		$dokumens = $user->dokumens()->LatestFirst()->get();

		return $this->collection($dokumens, new DokumenTransformer);
	}
}