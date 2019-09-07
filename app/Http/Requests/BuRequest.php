<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuRequest extends FormRequest
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
            'bu_name' => 'required|min:5|max:100',
            'bu_price' => 'required|max:20',
            'bu_square' => " required|max:10",
            // // 'bu_small_dis' => "required|min:5|max:160",
            'bu_meta' => "required|min:5|max:200",
            'bu_longtitude' => "required|max:50",
            'bu_latitude' => "required|max:50",
            'bu_rent' => 'required|integer',
            'bu_type' => 'required|integer',
            // 'bu_status' => 'required|integer',
            'bu_large_dis' => 'required|min:10',
            'rooms' => 'required|integer',
            'bu_place' => 'required',
            'image' => 'mimes:png,jpg,jpeg,bmp|unique:bus',
        ];
    }
}
