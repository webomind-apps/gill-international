<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WeddingRequest extends FormRequest
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
            //destination wedding section 1
            'destination_wedding_title' => 'required',
            'destination_wedding_image' => 'required',
            'destination_wedding_description' => 'required',
            //destination wedding section 2
            'destination_wedding_form_title' => 'required',
            'destination_wedding_form_description' => 'required',
            'destination_wedding_form_image' => 'required',
            //destination wedding section 3
            'destination_wedding_plan_title' => 'required',
            'destination_wedding_plan_image' => 'required',
            'destination_wedding_plan_description' => 'required',
            //about section
            'about_title' => 'required',
            'about_image' => 'required',
            'about_description' => 'required',
            //gift  registry section
            'gift_registry_title' => 'required',
            'gift_registry_image' => 'required',
            'gift_registry_description' => 'required',
            //Easy registration
            'easy_registration_title' => 'required',
            'easy_registration_image' => 'required',
            'easy_registration_description' => 'required',
            //Buying process 
            'buying_process_title' => 'required',
            'buying_process_image' => 'required',
            'buying_process_description' => 'required',
            //Gift cards
            'gift_card_title' => 'required',
            'gift_card_image' => 'required',
            'gift_card_description' => 'required',
            //let your guests know
            'guest_title' => 'required',
            'guest_image' => 'required',
            'guest_description' => 'required',
            //advantage of destination wedding
            'advantage_title' => 'required',
            'advantage_image' => 'required',
            'advantage_description' => 'required',
            //meta details
            'meta_title'  =>  'required',
            'meta_description' =>  'required',
            'meta_keywords' =>  'required'
        ];
    }
}
