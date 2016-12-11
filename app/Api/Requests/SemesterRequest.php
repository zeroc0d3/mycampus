<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class SemesterRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'name' => 'required|max:150',
	    ];
	}
}