<?php

namespace Database\Factories;

use App\Models\SiteContato;
use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    protected $model=SiteContato::class;
    public function definition()
    {   //o faker na versão 8 para cima não precisa da configuração mostratada na aula
        //criação de uma fabrica para o preenchimento automatico de tabelas no banco de dados
        return [
            'nome'=>$this->faker->name(),
            'telefone'=>$this->faker->tollFreePhoneNumber(),
            'email'=>$this->faker->unique->safeEmail(),
            'motivo_contato'=>$this->faker->numberBetween(1,4),
            'mensagem'=>$this->faker->text(200)
            //
        ];
    }
}
