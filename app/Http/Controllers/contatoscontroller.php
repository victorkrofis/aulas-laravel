<?php

namespace App\Http\Controllers;

use App\Models\contatos;
use Illuminate\Http\Request;

//importando o arquivo de validaçao
use App\Http\Requests\FormRequestContatos;

class contatoscontroller extends Controller
{
    public function __construct(Contatos $contatos) {
        $this->contato = $contatos;
    }
    
        
    

    public function index(Request $request){
        $pesquisar = $request->pesquisar;
        $findcontatos = $this->contato->getFiltrosPaginate(search: $pesquisar ?? "");

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

    public function update(FormRequestContatos $required, $idcontato) {
        if($required->method() == 'PUT') {
            $data = $required->all();
            $buscaRegistro = contatos::find($idcontato);
            $buscaRegistro->update($data);

            return redirect('/contatos');
        }

        $findcontatos = contatos::where('id', '=', $idcontato)->first();

        return view('pages.contatos.update', compact('findcontatos'));
    }
}
