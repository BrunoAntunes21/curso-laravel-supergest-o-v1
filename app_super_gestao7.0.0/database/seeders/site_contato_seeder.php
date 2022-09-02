<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\SiteContato;


class site_contato_seeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* $sitecontato=new SiteContato();
        $sitecontato->nome='bruno';
        $sitecontato->telefone='(12)982509369';
        $sitecontato->email='Brunoantunes039@gmail.com';
        $sitecontato->motivo_contato='2';
        $sitecontato->mensagem='dcbsihcbdsibdsibviwbfdlcbdsBf';
        $sitecontato->save();*/
        //
        //comando para criar multiplas entradas
        SiteContato::factory()->count(100)->create();

    }
}
