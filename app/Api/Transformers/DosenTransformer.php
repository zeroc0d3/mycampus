<?php

namespace Api\Transformers;

use App\Dosen as Dosen;
use League\Fractal\TransformerAbstract;

class DosenTransformer extends TransformerAbstract
{
	public function transform(Dosen $dosen)
	{
		$data_dosen = array(
			'id' 	=> (int) $dosen->id,
		    'nip'   => $dosen->nip,
			'name'  => $dosen->name,
		);	
		return $data_dosen;
	}
}