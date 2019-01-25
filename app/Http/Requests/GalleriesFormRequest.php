<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class GalleriesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'galleryId' => 'required|string|min:1',
            'image' => 'file|nullable|numeric',
    
        ];

        return $rules;
    }
    
    /**
     * Get the request's data from the request.
     *
     * 
     * @return array
     */
    public function getData()
    {
        $data = $this->only(['galleryId','image']);

        return $data;
    }

}