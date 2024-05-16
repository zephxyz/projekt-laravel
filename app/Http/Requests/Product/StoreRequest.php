<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    { // TODO: Implement authorization
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
           "name" => "required|string|max:200|min:2",
            "description" => "string|max:2000|min:2",
            "price" => "required|integer|min:1",
            "image_url" => "required",
            "category_id" => "required"

        ];
    }
}
