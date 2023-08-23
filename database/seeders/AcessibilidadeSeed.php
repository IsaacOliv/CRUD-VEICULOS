<?php

namespace Database\Seeders;

use App\Models\Acessibilidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcessibilidadeSeed extends Seeder
{

    public function run(): void
    {
        Acessibilidade::insert([
            'categoria' => 'Não possui acessibilidade',
        ]);
        Acessibilidade::insert([
            'categoria' => 'Elevador',
        ]);
        Acessibilidade::insert([
            'categoria' => 'Rampa',
        ]);
        
        
    }
}
