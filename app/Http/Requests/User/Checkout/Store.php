<?php

namespace App\Http\Requests\User\Checkout;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Store extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|string',
            'email'             => 'required|email|unique:users,email,' . Auth::id() . ',id', // fungsi Auth::id() untuk jika user update meskipun emailnya sama akan tetap lanjut.
            'no_telp'           => 'required|numeric',
            'address'           => 'required',
            'vehicle_brand'     => 'required|string',
            'vehicle_color'     => 'required|alpha',
            'production_year'   => 'required|numeric',
            'number_plate'      => 'required|string',
            'order_schedule'    => 'required|',
        ];
    }
}
