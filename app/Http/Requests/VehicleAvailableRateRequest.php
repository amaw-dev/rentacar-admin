<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleAvailableRateRequest extends FormRequest
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
            'pickupLocation'    =>  ['required','string'],
            'returnLocation'    =>  ['required','string'],
            'pickupDateTime'    =>  ['required','string'],
            'returnDateTime'    =>  ['required','string'],
        ];
    }

    public function messages(){
        return [
            'pickupLocation.required'   => 'Se requiere lugar de recogida',
            'returnLocation.required'   => 'Se requiere lugar de devolución',
            'pickupDateTime.required'   => 'Se requiere fecha de recogida',
            'returnDateTime.required'   => 'Se requiere fecha de devolución',
        ];
    }
}
