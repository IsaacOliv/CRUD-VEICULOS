<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculos extends Model
{
    use HasFactory;

    protected $table = 'veiculos';
    protected $fillable = [
        'modelo',
        'dataAquisicao',
        'placa',
        'acessibilidade_id',
    ];

    function acessibilidade() {
        return $this->belongsTo(Acessibilidade::class, 'acessibilidade_id', 'id');
    }

    protected $casts = [
        'dataAquisicao' => 'datetime:Y-m-d',
    ];
}
