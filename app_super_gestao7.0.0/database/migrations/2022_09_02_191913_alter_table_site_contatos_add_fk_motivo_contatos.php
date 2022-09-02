<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //adicionando o a coluna motivo_contatos_id na tabela motivo_contato
        Schema::create('motivo_contatos',function(Blueprint $table){
           $table->unsignedBigInteger('motivo_contatos_id');


        });
        //permite que seja executada qualquer query no banco de dados
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');
        //criando a fk e removendo a coluna motivo contato

        Schema::table('site_contatos',function (Blueprint $table){
        $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
        $table->dropColumn('motivo_contato');});
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('update site_contatos set motivo_contatos = motivo_contato_id');
        
        Schema::table('site_contato',function(Blueprint $table){
            $table->interger('motivo_contato');
            $table->dropForeign('site_contato_contato<coluna>_foreign');
        });

    }
}
