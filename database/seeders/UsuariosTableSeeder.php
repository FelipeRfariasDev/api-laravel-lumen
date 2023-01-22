<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    public function run()
    {
        Usuario::factory()->times(30)->create();
    }
}
