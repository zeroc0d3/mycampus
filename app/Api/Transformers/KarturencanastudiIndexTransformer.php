<?php

namespace Api\Transformers;

use App\Fakultas as Fakultas;
use App\Jurusan as Jurusan;
use App\Semester as Semester;
use App\Matakuliah as Matakuliah;
use App\Matakuliahsemester as Matakuliahsemester;
use App\Dosen as Dosen;
use App\Dosenmatakuliah as Dosenmatakuliah;
use App\Mahasiswa as Mahasiswa;
use App\Karturencanastudi as Karturencanastudi;
use League\Fractal\TransformerAbstract;

class KarturencanastudiIndexTransformer extends TransformerAbstract
{
	public function transform(Karturencanastudi $karturencanastudi)
	{
		$data_mahasiswa = Mahasiswa::where('nim', $karturencanastudi->nim)->get();  
		$data_krs       = array();
		foreach ($data_mahasiswa as $nim) {
			$jurusan  = Jurusan::where('id', $nim->jurusan_id)->first();  
			$fakultas = Fakultas::where('id', $jurusan->fakultas_id)->first(); 
			$data_krs['mahasiswa'] = array(
				'nim'      => $nim->nim,
				'name'     => $nim->name,
				'jurusan'  => $jurusan->name,
				'fakultas' => $fakultas->name
		    );	

			$data_kartu = Karturencanastudi::where('nim', $nim->nim)
			                               ->groupBy('matakuliahsemester_id')
			                               ->get(); 
			$data_krs_detail = array();
			foreach ($data_kartu as $kartu) {
				$data_matakuliah_semester = Matakuliahsemester::where('id', $kartu->matakuliahsemester_id)
													   ->first(); 
	            $data_matakuliah = Matakuliah::where('id', $data_matakuliah_semester->matakuliah_id)
													   ->first(); 
				$data_semester = Semester::where('id', $data_matakuliah_semester->semester_id)
													   ->first(); 
	            $temp = array(
					'id' 	         => (int) $kartu->id,
					'matakuliah'     => $data_matakuliah->name,
				    'semester'       => (int) $data_semester->id,
				    'semester_title' => $data_semester->name,
				    'tahun'          => $data_matakuliah_semester->tahun,
				);
				array_push($data_krs_detail, $temp);
			} 
			$data_krs['karturencanastudi'] = $data_krs_detail;
		}		
		return $data_krs;
	}
}