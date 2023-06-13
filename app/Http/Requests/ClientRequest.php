<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'cpf' => 'required|min:8',
            'dataDeNacimento' => 'required|email|unique:users',
            'sexo' => 'required|min:8',
            'endereco' => 'required|min:8',
            'estado' => 'required|min:8',
            'cidade' => 'required|min:8',
        ];
    }
}
