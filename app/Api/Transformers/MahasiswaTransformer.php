<?php

namespace Api\Transformers;

use App\Mahasiswa as Mahasiswa;
use App\Jurusan as Jurusan;
use App\Fakultas as Fakultas;
use League\Fractal\TransformerAbstract;

class MahasiswaTransformer extends TransformerAbstract
{
	public function transform(Mahasiswa $mahasiswa)
	{
		$jurusan  = Jurusan::where('id', $mahasiswa->jurusan_id)->first(); 
		$fakultas = Fakultas::where('id', $jurusan->fakultas_id)->first(); 
		
		$data_mahasiswa = array(
			'id'       => (int) $mahasiswa->id,
			'nim'      => $mahasiswa->nim,
			'name'     => $mahasiswa->name,
			'jurusan'  => $jurusan->name,
			'fakultas' => $fakultas->name
		);
		return $data_mahasiswa;
	}
}