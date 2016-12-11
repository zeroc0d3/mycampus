<?php

namespace Api\Transformers;

use App\Semester;
use League\Fractal\TransformerAbstract;

class SemesterTransformer extends TransformerAbstract
{
	public function transform(Semester $semester)
	{
		$data_semester = array(
			'id' 	=> (int) $semester->id,
			'name'  => $semester->name,
		);	
		return $data_semester;
	}
}