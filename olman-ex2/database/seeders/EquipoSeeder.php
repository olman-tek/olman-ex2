<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    public function run(): void
    {
        if (Equipo::count() === 0) {
            Equipo::factory()->count(10)->create();
        }
    }
}