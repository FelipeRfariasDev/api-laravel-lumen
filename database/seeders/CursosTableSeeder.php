<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class CursosTableSeeder extends Seeder
{
    public function run()
    {
        Curso::factory()->times(30)->create();
    }
}
