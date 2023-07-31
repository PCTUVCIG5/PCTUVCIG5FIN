<?php

namespace App\Http\Requests\Habitant;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // dont' forget to set this as true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        // make all of the fields required, set featured image to accept only images
        return [
            'nomHabi' => 'required|string|max:191',
            'prenHabi' => 'required|string|max:191',
            'dateNHabi' => 'required',
            'lieuNHabi' => 'required|string|max:191',
            'sexeHabi' => 'required|string|max:191',
            'telHabi' => 'required|string|max:191',
            'image' => 'nullable|image|max:1024|mimes:jpg,jpeg,png',
            'deleted_at' => 'nullable',
            'created_at' => 'nullable',
            'updated_at' => 'nullable'
        ];
    }
}
