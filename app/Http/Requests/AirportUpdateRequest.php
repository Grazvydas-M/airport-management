<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AirportUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|min:3|max:255',
            'country_id' => 'required',
            'latitude' => 'required|numeric|max:999|min:-999',
            'longitude' => 'required|numeric|max:999|min:-999',
        ];
    }
}
