<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemory extends FormRequest
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
            //
            'point' => 'required|string|max:30',
            'date' => 'required',
            'size' => 'required',
            'w_condition' => 'required',
            'number' => 'required',
            'state' => 'required',
            'direction' => 'required',
            'people' => 'required'
        ];
    }
}
