<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class MahasiswaRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'nim'        => 'required|max:150',
        	'name'       => 'required|max:150',
     	    'jurusan_id' => 'required',
        ];
	}
}