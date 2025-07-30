<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestUsuarios extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
         //inicializar o array de regras
        $request = [];

        //verifica se o metodo é POST ou PUT

        if($this->method() == 'POST' || $this->method() == 'PUT'){
        $request = [
            'nome' => 'required|string|max:255',
            'email' => ['required', 'email', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'], // Validação do e-mail
            'password' => 'required',
            ];
        }

        //retorna o array das regras (seja vazio ou com regras)
        return $request;
    }
}
