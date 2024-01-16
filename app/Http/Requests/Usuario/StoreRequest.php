<?php

namespace App\Http\Requests\Usuario;

use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required',Rules\Password::defaults()],
            'id_persona' => ['required','integer']
        ];
    }

    public function messages(): array
    {
        return [
            "id_persona.required" => "El campo nombre persona es requerido",
        ];
    }
}
