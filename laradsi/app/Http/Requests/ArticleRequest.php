<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            return [
            'name' => 'required|min:5',    
            'category_id' => 'required',
            'content' => 'required',
            ];
        } else {            
            return [
                'name' => 'required|min:5',
                'image' => 'required',
                'category_id' => 'required',
                'content' => 'required',
            ];
        }

    }
    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'name.min' => 'El campo nombre no puede tener menos de 5 (cinco) caracteres',
            'image.required' => 'El campo Imágen es requerido',
            'category_id.required' => 'El campo Categoría es requerido',
            'content.required' => 'El campo Contenido es requerido'
        ];
    }
}
