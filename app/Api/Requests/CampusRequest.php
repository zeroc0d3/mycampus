<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class CampusRequest extends FormRequest
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