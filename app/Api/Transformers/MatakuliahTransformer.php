<?php

namespace Api\Transformers;

use App\Matakuliah as Matakuliah;
use App\Jurusan as Jurusan;
use League\Fractal\TransformerAbstract;

class MatakuliahTransformer extends TransformerAbstract
{
	public function transform(Matakuliah $matakuliah)
	{
		$jurusan = Jurusan::where('id', $matakuliah->jurusan_id)->first(); 
		$data_matakuliah = array(
			'id' 	   => (int) $matakuliah->id,
			'name'     => $matakuliah->name,
			'jurusan'  => $jurusan->name
		);	
		return $data_matakuliah;
	}
}