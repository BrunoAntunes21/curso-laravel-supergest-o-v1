<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
       /** renderização da view*/
       $motivo_contatos=MotivoContato::all();
       //dd($motivo_contatos);
       return view('site.principal',['motivo_contatos_id'=>$motivo_contatos]);
    }

}
