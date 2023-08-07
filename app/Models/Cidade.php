<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Cidade extends Model
{
    use HasApiTokens, HasFactory;
    protected $fillable = [
        'codigo_municipio',
        'nome_municipio',
        'geoibgeId',
        'geonamesId'
    ];
}
