<?php

namespace App\Http\Controllers;

use App\Models\contatos;
use Illuminate\Http\Request;

//importando o arquivo de validaçao
use App\Http\Requests\FormRequestContatos;

class contatoscontroller extends Controller
{
    public function index(){
        $findcontatos = contatos::get();

        return view('pages.contatos.index', compact('findcontatos'));
    } 

    public function delete($idUser){
        $buscaRegistro = contatos::find($idUser);
        $buscaRegistro->delete();

        return back();
    }

    public function create(FormRequestContatos $request){
        // condicional para entendimento do envio dos dados para o  banco de dados
        if($request->method() == "POST"){
            $data = $request->all();
            Contatos::create($data);
 
            return redirect('/contatos');
        }
 
        return view('pages.contatos.create');
    }
}
