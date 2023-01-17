<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CruiseShipOptions extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'banner' => 'required',
            'header_title' => 'required',
            'header_description' => 'required',
            'header_image_1' => 'required',
            'header_image_2' => 'required',
            'popular_title' => 'required',
            'popular_description' => 'required',
            'popular_image' => 'required',
            'premium_title' => 'required',
            'premium_description' => 'required',
            'premium_image' => 'required',
            'luxury_title' => 'required',
            'luxury_description' => 'required',
            'luxury_image' => 'required',
            'river_cruises_title' => 'required',
            'river_cruises_description' => 'required',
            'river_cruises_image' => 'required',
        ];
    }
}
