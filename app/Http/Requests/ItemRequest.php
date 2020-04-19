<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'quantity' => ['required', 'Number', 'min:1', 'max:25'],
            'notes' => ['String','max:255'],
            'order_id' => ['Number','min:1'],
            'meal_id' => ['Number','min:1'],
        ];
    }
}
