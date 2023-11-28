<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Documento_liquidacao extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'exec_f_fin_id',
        'num_doc_liquidacao',
        'item_doc_liquiacao',
        'vlr_item_liquidacao'
    ];
}
