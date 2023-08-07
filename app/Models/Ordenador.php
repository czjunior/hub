<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Ordenador extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'codigo_municipio',
        'exercicio_orcamento',
        'codigo_unidade_gestora',
        'codigo_orgao',
        'codigo_unidade',
        'data_referencia_ordenador',
        'nome_ordenador',
        'data_inclusao_unidade_orcamentaria',
        'cpf_servidor',
        'codigo_ingresso',
        'codigo_vinculo',
        'numero_expediente_nomeacao',
        'data_inicio_gestao_ordenador',
        'data_fim_gestao_ordenador',
        'tipo_cargo'
    ];
}
