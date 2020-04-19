<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class MealRequest extends FormRequest
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
            'title' => ['required', 'String', 'unique:meals', 'min:3', 'max:122'],
            'price' => ['required', 'Number', 'min:20', 'max:100000'],
            'describe' => ['required', 'String', 'min:64', 'max455'],
            'image' => []
        ];
    }
}
