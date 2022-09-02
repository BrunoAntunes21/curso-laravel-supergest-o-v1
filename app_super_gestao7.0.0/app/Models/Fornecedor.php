<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use HasFactory;
    //utilizando a traits para contornar a herança unica
    use SoftDeletes;

    //configurando para que o ORM ache o aquivo de tabela correto
    protected $table='Fornecedores';
    //necessario para a inserção de informaçoes via tinker
    protected $fillable=['nome','site','uf','email'];
}
