<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;

    public function definition(): array
    {
        return [
            'codigo' => fake()->unique()->bothify('EQ-####'),
            'nombre' => fake()->randomElement(['Laptop', 'Computadora de escritorio', 'Impresora', 'Monitor', 'Servidor', 'Router', 'Proyector']),
            'marca' => fake()->randomElement(['Dell', 'HP', 'Lenovo', 'Asus', 'Acer', 'Epson', 'Cisco']),
            'fecha_adquisicion' => fake()
                ->dateTimeBetween('-5 years', 'now')
                ->format('Y-m-d'),
            'estado' => fake()->randomElement(['disponible', 'asignado', 'mantenimiento']),
        ];
    }
}