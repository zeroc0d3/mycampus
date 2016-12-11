<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class MatakuliahRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'name'       => 'required|max:150',
        	'jurusan_id' => 'required',
     	    'sks'        => 'required',
        ];
	}
}