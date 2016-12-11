<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class KarturencanastudiRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'nim'                   => 'required|max:150',
            'matakuliahsemester_id' => 'required',
        ];
	}
}