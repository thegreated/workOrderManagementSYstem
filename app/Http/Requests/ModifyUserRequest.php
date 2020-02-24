<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifyUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'firstname' => 'required | max:100 | min:2',
          'lastname' => 'required | max:100 | min:2',
          'email' => 'email:rfc,dns',
          'contact' => 'required | min:10 | max:11',
          'position_id' => 'required|integer',
          'password' => 'required | min:6'
        ];
    }
}
