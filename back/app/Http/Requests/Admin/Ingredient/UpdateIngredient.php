<?php

namespace App\Http\Requests\Admin\Ingredient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateIngredient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.ingredient.edit', $this->ingredient);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id_meal' => ['sometimes', 'integer'],
            'ing1' => ['sometimes', 'string'],
            'ing2' => ['sometimes', 'string'],
            'ing3' => ['sometimes', 'string'],
            'ing4' => ['sometimes', 'string'],
            'ing5' => ['sometimes', 'string'],
            'ing6' => ['sometimes', 'string'],
            'ing7' => ['sometimes', 'string'],
            'ing8' => ['sometimes', 'string'],
            
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
