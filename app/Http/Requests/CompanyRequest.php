<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
              //
              'name' => 'required',
              'email' => 'required|unique:companies',
              'phone' => 'required|unique:companies',
              'primary_image' => 'required|image|max:2048', 
              'secondary_images.*' => 'image|max:2048', // صور فرعية 
        ];
    }

    //message
    public function message(){
        return [
        'name.required' => 'الاسم مطلوب',
         'email.required' =>'الايميل مطلوب',

    ];
    }
}
