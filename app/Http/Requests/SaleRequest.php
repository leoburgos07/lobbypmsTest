<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
            'reservationDate' => 'required',
            'reservationDays' => 'required|min:1',
            'payment' => 'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute Es requerido',
            'reservationsDays' => 'Debe escribir cuantos dias quiere reservar'
        ];
    }
}
