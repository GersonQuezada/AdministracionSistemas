<?php

namespace App\Http\Requests\Personas;

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
            "VC_NOMBRE" => "required|min:3|max:100",
            "VC_APELLIDO_PATERNO" => "required|min:3|max:100",
            "VC_APELLIDO_MATERNO" => "required|min:3|max:100",
            "VC_DNI" => "required|min:8|max:12|unique:Personas",
        ];
    }

    public function messages(): array
    {
        return [
            "VC_NOMBRE.required" => "Campo Nombre es requerido",
            "VC_APELLIDO_PATERNO.required" => "Campo Apellido Paterno es requerido",
            "VC_APELLIDO_MATERNO.required" => "Campo Apellido Materno es requerido",
            "VC_DNI.required" => "Campo DNI es requerido",
            "min" => "No cubre la cantidad minima de caracteres",
            "max" => "Sobrepasa la cantidad maxima de caracteres",
            "VC_DNI.unique" => "Ya existe un registro con este documento de indentidad",
        ];
    }
}

