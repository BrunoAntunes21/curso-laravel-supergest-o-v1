<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteContato;
use \App\Models\MotivoContato;
class ContatoController extends Controller

{
    public function contato(Request $request){
        $motivo_contato=MotivoContato::all();
        return view('site.contato',['motivo_contato'=>$motivo_contato]);

    }
    public function salvar(Request $request){
        //realizaremos a validação dos dados recebidos via request
        $request->validate(['nome'=>'required|min:3|max:40','telefone'=>'required',
    'email'=>'required','motivo_contato'=>'required','mensagem'=>'required']);
        SiteContato::create($request->all());

        return view('site.contato');

    }
}
