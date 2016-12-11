<?php

namespace Api\Transformers;

use App\Jurusan as Jurusan;
use App\Fakultas as Fakultas;
use League\Fractal\TransformerAbstract;

class JurusanTransformer extends TransformerAbstract
{
	public function transform(Jurusan $jurusan)
	{
		$fakultas = Fakultas::where('id', $jurusan->fakultas_id)->first(); 
		$data_jurusan = array(
			'id' 	   => (int) $jurusan->id,
			'name'     => $jurusan->name,
			'fakultas' => $fakultas->name,
			'image'    => $jurusan->image,
			'profile'  => $jurusan->profile,
		);
		return $data_jurusan;
	}
}