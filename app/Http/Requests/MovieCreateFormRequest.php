<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieCreateFormRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'genre' => 'required|string',
            'image' => 'required|image',
            'trailer' => 'required|url',
            'directors' => 'required|string',
            'actors' => 'required|string',
            'upcoming' => 'boolean',
            'slider_image' => 'required|image',
            'about' => 'required|string',
        ];
    }
}
