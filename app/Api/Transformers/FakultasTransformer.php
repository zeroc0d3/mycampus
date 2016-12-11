<?php

namespace Api\Transformers;

use App\Fakultas as Fakultas;
use League\Fractal\TransformerAbstract;

class FakultasTransformer extends TransformerAbstract
{
	public function transform(Fakultas $fakultas)
	{
		$data_fakultas = array(
			'id' 	=> (int) $fakultas->id,
			'name'  => $fakultas->name,
		);	
		return $data_fakultas;
	}
}