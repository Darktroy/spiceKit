<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class MenuItemsFormRequest extends FormRequest
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
            'title' => 'string|min:1|max:255|nullable',
            'menutypeId' => 'string|min:1|nullable',
            'itemDescription' => 'string|min:1|nullable',
    
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
        $data = $this->only(['menuItemsId','image','title','menutypeId','itemDescription']);

        return $data;
    }
    public function getDataUpdate()
    {
        $data = $this->only(['title','menutypeId','itemDescription']);

        return $data;
    }

}