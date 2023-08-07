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
        'codigo_orgao',
        'codigo_unidade',
        'cpf_servidor',
        'nome_gestor',
        'codigo_ingresso',
        'codigo_vinculo',
        'numero_expediente',
        'tipo_cargo',
        'data_inicio_gestao',
        'data_fim_gestao',
        'data_referencia'
    ];
}
