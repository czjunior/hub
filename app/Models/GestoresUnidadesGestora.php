<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class GestoresUnidadesGestora extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'cpf_servidor',
        'codigo_municipio',
        'exercicio_orcamento',
        'codigo_unidade_gestora',
        'codigo_unidade',
        'codigo_ingresso',
        'codigo_vinculo',
        'numero_expediente',
        'data_inicio_gestao',
        'data_referencia',
        'nome_gestor',
        'data_fim_gestao',
        'tipo_cargo'
    ];
}
