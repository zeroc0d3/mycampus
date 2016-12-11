<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class DosenRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'nip'  => 'required|max:150',
        	'name' => 'required|max:150',
        ];
	}
}