<?php

namespace Api\Requests;

use Dingo\Api\Http\FormRequest;

class KartuhasilstudiRequest extends FormRequest
{
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
	    	'karturencanastudi_id' => 'required',
     	    'nim'                  => 'required|max:150',
         	'nilai'                => 'required',
        ];
	}
}