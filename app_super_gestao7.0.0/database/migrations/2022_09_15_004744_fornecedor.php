<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Fornecedor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedores',function(Blueprint $table){
            $table->id();
            $table->string('nome',50);
            $table->timestamps();

        });
        Schema::table('fornecedores',function (Blueprint $table){
            $table->string('site',150)->after('nome')->nullable()->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   Schema::dropColumns('nome');
        Schema::dropIfExists('fornecedores');
    }
}
