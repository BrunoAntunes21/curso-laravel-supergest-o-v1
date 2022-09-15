<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\SiteContato;
use \App\Models\MotivoContato;
class ContatoController extends Controller

{
    public function contato(Request $request){
        $motivo_contato=MotivoContato::all();
        return view('site.contato',['motivo_contatos_id'=>$motivo_contato]);

    }
    public function salvar(Request $request){
        //realizaremos a validação dos dados recebidos via request
        $request->validate(['nome'=>'required|min:3|max:40|unique:site_contatos','telefone'=>'required',
    'email'=>'email','motivo_contatos_id'=>'required','mensagem'=>'required|max:500'],
    [
    //customizando a mensagem de erro
    'nome.required'=>'O campo nome necessita ser preenchido',
    'nome.min'=>'O campo nome necessita ter no minimo 3 letras ',
    'nome.max'=>'O campo nome necessita ter menos de 40 caracteres',
    'nome.site_contatos'=>'o nome informado já esta em uso',
    'email.email'=>'o email é obrigatorio',
    'mensagem.max'=>'a mensagem teve ter no maximo 500 caracteres',
     'motivo_contatos_id.motivo_contatos_id'=>'a seleção do motivo é obrigatoria',
    'required'=>'é obrigatorio o preenchimento do campo :attribute'
    ]
);

     SiteContato::create($request->all());
     return redirect()->route('site.index');
    }
}
