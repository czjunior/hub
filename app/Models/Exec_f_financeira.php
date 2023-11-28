<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Exec_f_financeira extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'cod_item_pt',
        'item_pt',
        'vlr_item_pt',
        'saldo_p_aquisicao',
        'processo_aquisicao',
        'item_processo_aquisicao',
        'vlr_item_pa',
        'saldo_contratacao',
        'num_contratacao',
        'item_contratacao',
        'vlr_item_contratacao',
        'saldo_liquidacao'
    ];
}
