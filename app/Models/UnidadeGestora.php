<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class UnidadeGestora extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'codigo_municipio',
        'exercicio_orcamento',
        'codigo_unidade_gestora',
        'data_referencia',
        'nome_unidade_gestora',
        'data_criacao',
        'data_extincao',
        'numero_lei_criacao'
    ];
}
