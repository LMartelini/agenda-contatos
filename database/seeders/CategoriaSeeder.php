<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::factory()->family()->create();
        Categoria::factory()->friends()->create();
        Categoria::factory()->work()->create();
        Categoria::factory()->other()->create();
    }
}
