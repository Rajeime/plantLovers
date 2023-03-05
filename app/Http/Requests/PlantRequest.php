<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantRequest extends FormRequest
{
    private string $currentRoute;

    function __construct()
    {
        $this->currentRoute = request()->route()->getName();
    }
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return match ($this->currentRoute){
            'plant.store' => [
                "common_name" => "required|string|max:50",
                "genus" => "required|string|max:50",
                "species" => "required|string|max:50",
                "img" => "required|string",
            ],
            'plant.update' => [
                "common_name" => "required|string|max:50",
                "genus" => "required|string|max:50",
                "species" => "required|string|max:50",
                "img" => "required|string",

            ],
            'default' => []
        };
    }
}
