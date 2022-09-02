<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{ public function index(){
    $fornecedores=[0=>['nome'=>'Fornecedor 1',
    'status'=>'N',
    'cnpj'=>'00.000.000-00','ddd'=>'','telefone'=>''],
1=>['nome'=>'Fornecedor 2',
'status'=>'N','ddd'=>'12','telefone'=>'0000-0001'],
2=>['nome'=>'Fornecedor 3',
'status'=>'S','ddd'=>'11','telefone'=>'0000-0002']];


    return view('app.fornecedor.index',compact('fornecedores'));

}}
