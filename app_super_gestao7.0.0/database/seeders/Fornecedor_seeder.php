<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Fornecedor;
class Fornecedor_seeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //via objeto
        $fornecedor=new Fornecedor();
        $fornecedor->nome='fornecedor 100';
        //$fornecedor->site='F100.com.br';
        $fornecedor->uf='Sp';
        $fornecedor->email='Contato@f100.com';
        $fornecedor->save();
        //metodo create
        Fornecedor::create(['nome'=>'Fornecedor200','uf'=>'PR','email'=>'contato@f200.com.br']);
        //insert
       // DB::table('fornecedores')->insert(['nome'=>'Fornecedor300','uf'=>'SP','email'=>'contato@f300.com.br']);
    }
}
