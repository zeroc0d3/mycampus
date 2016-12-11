<?php

namespace Api\Transformers;

use App\Campus as Campus;
use League\Fractal\TransformerAbstract;

class CampusTransformer extends TransformerAbstract
{
	public function transform(Campus $campus)
	{
		$data_campus = array(
			'name'     => $campus->name,
			'address'  => $campus->address,
			'phone'    => $campus->phone,
			'fax'      => $campus->fax,
			'zip'      => $campus->zip,
			'image1'   => $campus->image1,
			'image2'   => $campus->image2,
			'image3'   => $campus->image3,
			'profile'  => $campus->profile,
		);	
		return $data_campus;
	}
}