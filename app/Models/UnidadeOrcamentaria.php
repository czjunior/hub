<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class UnidadeOrcamentaria extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'codigo_municipio',
        'exercicio_orcamento',
        'codigo_orgao',
        'codigo_unidade',
        'codigo_tipo_unidade',
        'nome_unidade',
        'tipo_administracao_unidade'
    ];
}
