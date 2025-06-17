<?php

namespace App\Http\Controllers;

use App\Models\contatos;
use Illuminate\Http\Request;

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
}
