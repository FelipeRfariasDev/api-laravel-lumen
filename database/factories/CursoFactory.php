<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->sentence,
            'descricao'  => $this->faker->sentence,
            'preco'  => $this->faker->randomFloat(2, 0, 10)
        ];
    }
}
