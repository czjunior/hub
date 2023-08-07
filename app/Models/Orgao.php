<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Orgao extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'codigo_municipio',
        'exercicio_orcamento',
        'codigo_orgao',
        'nome_orgao',
        'codigo_tipo_unidade',
        'cgc_orgao'
    ];
}
