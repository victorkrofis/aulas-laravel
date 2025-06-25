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
                'nome' => 'required',
            ];
        }

        //retorna o array das regras (seja vazio ou com regras)
        return $request;
    }
}
