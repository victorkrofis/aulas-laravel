<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestContatos extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

   
    public function rules(): array
    {

        //inicializar o array de regras
        $request = [];

        //verifica se o metodo é POST ou PUT

        if($this->method() == 'POST' || $this->method() == 'PUT'){
            $request = [
            'nome' => 'required|string|max:255',
            'numero' => 'required|regex:/^\(\d{2}\)\s\d{4,5}-\d{4}$/', // Validação do telefone
            'email' => ['required', 'email', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'], // Validação do e-mail
            ];
        }

        //retorna o array das regras (seja vazio ou com regras)
        return $request;
    }
}
