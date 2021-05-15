<?php

namespace App\Http\Requests\Admin\Ingredient;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreIngredient extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.ingredient.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'id_meal' => ['required', 'integer'],
            'ing1' => ['required', 'string'],
            'ing2' => ['required', 'string'],
            'ing3' => ['required', 'string'],
            'ing4' => ['required', 'string'],
            'ing5' => ['required', 'string'],
            'ing6' => ['required', 'string'],
            'ing7' => ['required', 'string'],
            'ing8' => ['required', 'string'],
            
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
